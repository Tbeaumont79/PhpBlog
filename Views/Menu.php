<?php

  function addElement()
  {
    return [
      'index' => 'Acceuil',
      'article' => 'Article',
      'contact' => 'Contact',
    ];
  }

  function menuPage()
  {
    $elements = addElement();
    $htmlElement .= '<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">';
    $htmlElement .= '<h5 class="my-0 mr-md-auto font-weight-normal">Blog</h5>';
    $htmlElement .= '<nav class="my-2 my-md-0 mr-md-3">';
    foreach ($elements as $key => $value) {
      $htmlElement .= '<a class="p-2 text-dark" href="index.php?page='. $key .'">'. $value .'</a>';
    }
    if (!$_SESSION['username']) {
      $htmlElement .= '<a class="btn btn-outline-primary" href="index.php?page=signUp">Sign up</a>';
      $htmlElement .= '<a class="btn btn-outline-secondary ml-2" href="index.php?page=signIn">Sign in</a>';
    } else {
      if ($_SESSION['username'] == 'admin') {
        $htmlElement .= '<a class="btn btn-outline-primary mr-2" href="index.php?page=admin">Manage post</a>';
      }
      $htmlElement .= '<a class="btn btn-outline-primary" href="index.php?page=logout">Logout</a>';
    }
    $htmlElement .= '</div>';
    $htmlElement .= '</nav>';
    $htmlElement .= '</div>';
    return $htmlElement;
  }

?>
