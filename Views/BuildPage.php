<?php
  function buildPage($content)
  {
    $htmlElement .= headerPage();
    $htmlElement .= menuPage();
    $htmlElement .= bodyPage($content);
    return $htmlElement;
  }

?>
