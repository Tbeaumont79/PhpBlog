<?php
var_dump(session_start());

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
    $htmlElement .= '<div class="border-bottom">';
    $htmlElement .= '<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white box-shadow mt-2">';
    $htmlElement .= '<h4 class="my-0 mr-md-auto font-weight-normal ml-md-5" font-family:Roboto Mono;>Thibault Beaumont</h4>';
    $htmlElement .= '<nav class="my-2 my-md-0 mr-md-3 nav nav-items">';
    foreach ($elements as $key => $value) {
      if ($_GET['page'] == $key) {
        $htmlElement .= '<a class="p-2 text-info nav-link active mr-5" href="index.php?page='. $key .'" style="font-family:Roboto;">'. $value .'</a>';
      } else {
        $htmlElement .= '<a class="p-2 text-dark mr-5" href="index.php?page='. $key .'"style="font-family:Roboto;">'. $value .'</a>';
      }
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
    $htmlElement .= '</div>';

    return $htmlElement;
  }

?>
