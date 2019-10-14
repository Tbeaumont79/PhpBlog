<?php

  function Ctrl()
  {
    $db = connectionToBdd();
    switch ($_GET['page']) {
      case 'signUp':
      echo session_id();

        $ctrl .= sign_up($db);
        break;
      case 'signIn':
      echo session_id();
        $ctrl .= sign_in($db);
        break;
      case 'logout':
      echo session_id();

        $ctrl .= logout($db);
        break;
      case 'index':
      echo session_id();

        $ctrl .= HomeView();
        break;
      case 'article':
      echo session_id();

        $ctrl .= getThePost($db);
        break;
      case 'admin':
      echo session_id();
        $ctrl .= sendAPost($db);
        break;
      default:
        $ctrl .= HomeView();
        break;
    }
    return $ctrl;
  }
?>
