<?php

  function Ctrl()
  {
    switch ($_GET['page']) {
      case 'sign_in':
        $ctrl .= signInAndSignUpForm();
        break;
      case 'sign_up':
        $ctrl .= signInAndSignUpForm();
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
