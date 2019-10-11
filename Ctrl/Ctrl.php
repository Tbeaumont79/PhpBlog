<?php
  function Ctrl()
  {
    switch ($_GET['page']) {
      case 'sign_in':
        $ctrl .= signInAndSignUpForm();
        break;

      default:
        $ctrl .= HomeView();
        break;
    }
    return $ctrl;
  }
?>
