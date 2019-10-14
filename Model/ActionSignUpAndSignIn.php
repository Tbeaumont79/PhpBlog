<?php

function isUsernameAlreadyLogged($user) {
  if (!isset($user)) {
    return signInAndSignUpForm();
  } else {
    return homeView();
  }
}

function  isUsernameAlreadyUsed($db)
{
  $username = $_POST['username'];
  $res = mysqli_query($db, "SELECT username FROM users WHERE username='$username'");
  $verif = mysqli_fetch_row($res);
  return $verif[0];
}

function sign_up($db) {
$message = '';
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['email'])) {
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     error("Invalid email format").signInAndSignUpForm();
  }
  if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['email'])) {
  if ($_POST['password'] === $_POST['password2']) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    if (!isUsernameAlreadyUsed($db))
    {
      $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt = mysqli_prepare($db, "INSERT INTO users(username, pass, email) VALUES (?, ?, ?)");
      mysqli_stmt_bind_param($stmt, 'sss', $username, $hash, $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmit);

      return success($message).HomeView();
  } else {
      $message = "Username already exist ! ";
      return error($message).signInAndSignUpForm();
  }
  } else {
      $message = "password and confirm password doesn't match !";
      return error($message).signInAndSignUpForm();
  }
  } else {
      return error("all information are needed to register to the website !").signInAndSignUpForm();
  }
}
else {
  return isUsernameAlreadyLogged($_SESSION['username']);
}
}

function sign_in($db) {
  var_dump(session_start());
  if(isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
      $user = $_POST['username'];
      $res = mysqli_query($db,"SELECT pass FROM users WHERE username='$user';");
      $verif = mysqli_fetch_row($res);
      $passwd = $_POST['password'];
      if (password_verify($passwd, $verif[0]))
      {
        $_SESSION['username'] = $user;
        $msg = "Ravi de vous revoir ! ".$_SESSION['username'];
        return success($msg).homeView();
      } else {
        return error("invalid username or password !").signInAndSignUpForm();
      }
  } else {
    return error("Username and password need to fill so sign in !").signInAndSignUpForm();
  }
  }
   else {
    return isUsernameAlreadyLogged($_SESSION['username']);
  }
}

?>
