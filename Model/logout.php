<?php
  function logout() {
    $msg = '';
    if (isset($_SESSION['username'])) {
      $msg .= success("you have been succesfully disconnected !");
    }
    session_destroy();
    session_unset($_SESSION);
    return $msg.signInAndSignUpForm();
  }

?>
