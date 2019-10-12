<?php

  function bodyPage($content)
  {
    $htmlElement .= $content;
    return $htmlElement;
  }

  function  footerPage($copyright = null)
  {
    $htmlElement .= '</body>';
    $htmlElement .= '<footer class="pt-4 my-md-5 pt-md-5 border-top">';
    $htmlElement .= '<p class="text-center mt-5 pt-5">Made with love ♥ by thibault</p>';
    $htmlElement .= '</footer>';
    $htmlElement .= '</html>';
    return $htmlElement;
  }
?>
