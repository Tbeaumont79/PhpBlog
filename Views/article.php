<?php
function displayArticle($title, $post, $date) {
  $htmlElement .='   <div class="container w-75 m-auto">';
  $htmlElement .='   <div class="card mb-4">';
  //$htmlElement .='<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">';
  $htmlElement .=' <div class="card-body">';
  $htmlElement .='   <h2 class="card-title">'.$title.'</h2>';
  $htmlElement .='   <p class="card-text">'.$post.'</p>';
  $htmlElement .=' </div>';
  $htmlElement .=' <div class="card-footer text-muted">';
  $htmlElement .= $date;
  $htmlElement .=' </div>';
  $htmlElement .='</div>';
  $htmlElement .=' </div>';
  return $htmlElement;
}

function createAllPost($titre, $post, $date) {
  $htmlElement .='   <div class="container w-75 m-auto pt-5">';
  $htmlElement .='   <div class="card mb-4">';
  //$htmlElement .='<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">';
  $htmlElement .=' <div class="card-body  d-flex justify-content-center flex-column">';
  $htmlElement .='   <h2 class="card-title">'.$titre.'</h2>';
  $htmlElement .='   <p class="card-text">'.substr($post, 0, 100).'</p>';
  $htmlElement .= '<form class="" action="#" method="post">';
  $htmlElement .= '<input type="text" name="title" value="'.$titre.'" style="display:none;"">';
  $htmlElement .= '<input type="text" name="post" value="'.$post.'" style="display:none;"">';
  $htmlElement .= '<input type="text" name="date" value="'.$date.'" style="display:none;"">';
  $htmlElement .='   <button type="submit" name="read_more"class="btn btn-primary">Read More &rarr;</button>';
  $htmlElement .= '</form>';
  $htmlElement .=' </div>';
  $htmlElement .=' <div class="card-footer text-muted">';
  $htmlElement .= $date;
  $htmlElement .=' </div>';
  $htmlElement .='</div>';
  $htmlElement .=' </div>';
  return $htmlElement;
}

  function articleview($datas) {
    return $datas;
  }

?>
