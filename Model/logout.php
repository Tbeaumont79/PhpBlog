<?php
  function logout($db) {
    $msg = '';
    if (isset($_SESSION['name'])) {
      $msg .= success("you have been succesfully disconnected !".$_SESSION['name']);
    }
    session_unset($_SESSION['name']);
    session_destroy();
    return manageThePost($db, true);
  }

?>
