<?php
  header('Content-type:text/html; charset=UTF-8');	// encodage UTF-8
  session_start();
  require_once 'Views/header.php';
  require_once 'Views/Menu.php';
  require_once 'Views/body.php';
  require_once 'Views/Home.php';
  require_once 'Views/BuildPage.php';
  require_once 'Views/SignInAndSignUp.php';
  require_once 'Views/adminPanel.php';
  require_once 'Views/article.php';
  require_once 'Lib/ErrorAndSuccess.php';
  require_once 'Lib/debug.php';
  require_once 'Model/ConnectToBdd.php';
  require_once 'Model/ActionSignUpAndSignIn.php';
  require_once 'Model/logout.php';
  require_once 'Model/adminPanel.php';
  require_once 'Ctrl/Ctrl.php';

  $content = Ctrl();
  echo buildPage($content);

 ?>
