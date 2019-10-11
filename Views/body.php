<?php

  function bodyPage($content)
  {
    $htmlElement .= $content;
    return $htmlElement;
  }

  function  footerPage($copyright = null)
  {
    $htmlElement .= '</body>';
    $htmlElement .= '</html>';
    return $htmlElement;
  }
?>
