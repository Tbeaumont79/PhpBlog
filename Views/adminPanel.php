<?php
  function compose() {
    $htmlElement .='<div class="container w-60 m-auto">';
    $htmlElement .='<form class="" action="#" method="post">';
    $htmlElement .='  <div class="form-group">';
    $htmlElement .='  <label for="inputTitle">Title</label>';
    $htmlElement .='  <input class="form-control" type="text" name="postTitle" value="">';
    $htmlElement .='</div>';
    $htmlElement .='<div class="form-group">';
    $htmlElement .='  <label for="inputMessage">Post</label>';
    $htmlElement .='  <textarea class="form-control" name="postBody" rows="5" cols="30"></textarea>';
    $htmlElement .='</div>';
    $htmlElement .='<button type="submit" class="btn btn-primary btn-lg" name="button">Publish</button>';
    $htmlElement .='</form>';
    $htmlElement .='</div>';
    return $htmlElement;
}
?>
