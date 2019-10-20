<?php
function displayArticle($title, $post, $date) {
  $htmlElement .='   <div class="container w-75 m-auto pt-5">';
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

function createHiddenArticleForm($titre, $post, $date) {
  $htmlElement .= '<form class="" action="#" method="post">';
  $htmlElement .= '<input type="text" name="title" value="'.$titre.'" style="display:none;"">';
  $htmlElement .= '<input type="text" name="post" value="'.$post.'" style="display:none;"">';
  $htmlElement .= '<input type="text" name="date" value="'.$date.'" style="display:none;"">';
  $htmlElement .='   <button type="submit" name="read_more"class="btn btn-primary">Read More &rarr;</button>';
  $htmlElement .=' </div>';
  $htmlElement .= '</form>';
  return ($htmlElement);
}

function createAllPost($titre, $post, $date) {
  $htmlElement .='   <div class="container w-75 m-auto pt-5">';
  $htmlElement .='   <div class="card mb-4">';
  //$htmlElement .='<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">';
  $htmlElement .=' <div class="card-body  d-flex justify-content-center flex-column">';
  $htmlElement .='   <h2 class="card-title">'.$titre.'</h2>';
  $htmlElement .='   <p class="card-text">'.substr($post, 0, 100).'</p>';
  $htmlElement .= createHiddenArticleForm($titre, $post, $date);
  $htmlElement .=' <div class="card-footer text-muted">';
  $htmlElement .= $date;
  if ($_SESSION['name'] == 'admin') {
    $htmlElement .= '<div class="float-right">';
    $htmlElement .= '<a class="text-center text-danger" name="delete" href="index.php?page=deleteArticle" style="font-family:Roboto;">Delete</a>';
    $htmlElement .= '<a class="text-center ml-md-3 text-secondary" name="edit" href="index.php?page=editArticle" style="font-family:Roboto;">Edit</a>';
    $htmlElement .=' </div>';
  }
  $htmlElement .=' </div>';
  $htmlElement .='</div>';
  $htmlElement .=' </div>';
  return $htmlElement;
}

  function articleview($datas) {
    return $datas;
  }

?>
