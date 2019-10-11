<?php
  require_once 'Views/header.php';
  require_once 'Views/Menu.php';
  require_once 'Views/body.php';
  require_once 'Views/Home.php';
  require_once 'Views/BuildPage.php';
  require_once 'Views/SignInAndSignUp.php';
  require_once 'Ctrl/Ctrl.php';

  $content = Ctrl();
  echo buildPage($content);

 ?>
