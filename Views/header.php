<?php

  function headerPage()
  {
    session_start();
    debug($_SESSION);
    $htmlElement .= '<html>';
    $htmlElement .= '<head>';
    $htmlElement .=   '<meta charset="utf-8">';
    $htmlElement .=   '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
    $htmlElement .=   '<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono&display=swap" rel="stylesheet">';
    $htmlElement .= '<script src="https://kit.fontawesome.com/c1bbb0d38e.js" crossorigin="anonymous"></script>';
    $htmlElement .=   '<title>blog</title>';
    $htmlElement .= '</head>';
    $htmlElement .= '<body>';
    return $htmlElement;
  }

?>
