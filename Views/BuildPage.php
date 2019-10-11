<?php
  function buildPage($content)
  {
    $htmlElement .= headerPage();
    $htmlElement .= menuPage();
    $htmlElement .= bodyPage($content);
    $htmlElement .= footerPage();
    return $htmlElement;
  }

?>
