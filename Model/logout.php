<?php
  function logout() {
    $msg = '';
    if (isset($_SESSION['username'])) {
      $msg .= success("you have been succesfully disconnected !");
    }
    session_unset($_SESSION);
    session_destroy();
    header('Location: index.php?action="index"');
    exit();
    return $msg.signInAndSignUpForm();
  }

?>
