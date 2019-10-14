<?php
  function logout() {
    $msg = '';
    session_start();
    if (isset($_SESSION['username'])) {
      $msg .= success("you have been succesfully disconnected !");
    }
    session_unset($_SESSION['username']);
    session_destroy();
    return $msg.signInAndSignUpForm();
  }

?>
