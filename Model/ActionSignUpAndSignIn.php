<?php
function password_encrypted($password) {
  return password_hash($password, PASSWORD_BCRYPT);
}

function sign_up($db) {
$message = '';
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['email'])) {
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     error("Invalid email format").signInAndSignUpForm();
  }
  if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['email'])) {
  if ($_POST['password'] === $_POST['password2']) {
  $password = password_encrypted($_post['password']);
  $stmt = mysqli_prepare($db, "INSERT INTO users(username, password, email) VALUES (?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'sss', $_POST['username'], $password, $_POST['email']);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  session_start();
  $_SESSION['password'] = $_POST['password'];
  $message = "bonjour ".$_POST['username'];
  return success($message).HomeView();
  } else {
  $message = "password and confirm password doesn't match !";
  return error($message).signInAndSignUpForm();
  }
  } else {
  return error("all information are needed to register to the website !").signInAndSignUpForm();
  }
}
else {
  return signInAndSignUpForm();
}
  return $message;
}

function sign_in($db) {
  if(isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $res = mysqli_query($db,"SELECT password FROM users WHERE username='$username';");
    $verif = mysqli_fetch_row($res);
    $password = $_SESSION['password'];
    if ($verif) {
      $hashedPass = $verif[0];
      if (password_verify($password, $hashedPass))
      {
        session_start();
        $_SESSION['username'] = $username;
        $msg = "Ravi de vous revoir ! ".$_SESSION['username'];
        return success($msg).homeView();
      } else {
        return error("invalid username or password !").signInAndSignUpForm();
      }
    }
  } else {
    return error("Username and password need to fill so sign in !").signInAndSignUpForm();
  }
  }
   else {
    return signInAndSignUpForm();
  }
}

?>
