<?php


  function createAllPost($titre, $post) {
    $htmlElement .='   <div class="container w-60 m-auto">';
    $htmlElement .='   <div class="card mb-4">';
    //$htmlElement .='<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">';
    $htmlElement .=' <div class="card-body">';
    $htmlElement .='   <h2 class="card-title">'.$titre.'</h2>';
    $htmlElement .='   <p class="card-text">'.substr($post, 0, 100).'</p>';
    $htmlElement .='   <a href="#" class="btn btn-primary">Read More &rarr;</a>';
    $htmlElement .=' </div>';
    $htmlElement .=' <div class="card-footer text-muted">';
    $htmlElement .='   Posted on January 1, 2017 by';
    $htmlElement .=' </div>';
    $htmlElement .='</div>';
    $htmlElement .=' </div>';
    return $htmlElement;
  }

  function HomeView() {
    return $htmlElement;
  }
?>
