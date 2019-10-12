<?php

  function Ctrl()
  {
    $db = connectionToBdd();
    switch ($_GET['page']) {
      case 'signUp':
        $ctrl .= sign_up($db);
        break;
      case 'signIn':
        $ctrl .= sign_in($db);
        break;
      case 'index':
        $ctrl .= HomeView();
        break;
      default:
        $ctrl .= HomeView();
        break;
    }
    return $ctrl;
  }
?>
