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
	case 'logout':
	    $ctrl .= logout($db);
	    break;
	case 'index':
	    $ctrl .= getThePost($db);
	    break;
	case 'article':
	    $ctrl .= getThePost($db);
	    break;
	case 'admin':
	    $ctrl .= sendAPost($db);
	    break;
  case 'contact':
      $ctrl .= contactView();
	default:
	    $ctrl .= getThePost($db);
	    break;
    }
    return $ctrl;
}
?>
