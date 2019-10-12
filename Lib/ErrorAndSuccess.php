<?php

  function error($message)
  {
    $htmlElement .= '<div class="d-flex flex-column flex-row-reverse align-items-center">';
    $htmlElement .= '<div class="alert alert-danger alert-dismissible fade show text-center h-20 position-absolute mt-2" role="alert">'.$message.'  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div></div>';
    return $htmlElement;
  }

  function success($message)
  {
    $htmlElement .= '<div class="d-flex flex-column flex-row-reverse align-items-center">';
    $htmlElement .= '<div class="alert alert-success alert-dismissible fade show text-center h-20 position-absolute mt-2" role="alert">'.$message.'  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div></div>';
    return $htmlElement;
  }

?>
