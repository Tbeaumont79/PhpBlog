<?php

  function addElement()
  {
    return [
      'index' => 'Acceuil',
      'sign_in' => 'Login',
      'sign_up' => 'Register',
    ];
  }

  function menuPage()
  {
    $elements = addElement();
    $htmlElement .= '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
    $htmlElement .='<a class="navbar-brand" href="#">Blog</a>';
    $htmlElement .= '<div class="navbar-nav mr-auto">';
    $htmlElement .= '<ul class="navbar-nav">';
    foreach ($elements as $key => $value) {
      $htmlElement .= '<li class="nav-item" ><a class="nav-link" href="index.php?page='. $key .'">'. $value .'</a></li>';
    }
    $htmlElement .= '</ul>';
    $htmlElement .= '</div>';
    $htmlElement .= '</nav>';
    return $htmlElement;
  }

?>
