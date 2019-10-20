<?php
  function  restrictedPage() {
    if ($_SESSION['name'] != 'admin') {
      return error("you are not allowed to access this page ! ").signInAndSignUpForm();
    }
  }
// le manage article redirige en fonction de si tu veux afficher les articles ou les deletes 
// pour l'edit recuperer les donnees les modifiers puis les deletes
  function deleteArticle($db) {
    $res = mysqli_query($db, "SELECT * FROM blogpost ORDER BY id_post DESC ;");
    while ($data = mysqli_fetch_array($res)) {
      if (isset($_POST['delete']) && isset($_POST['title'])) {
        if ($data[1] == $_POST['title']) {
          $title = $_POST['title'];
          $res = mysqli_query($db, "DELETE * FROM blogpost WHERE title_post='$title'");
        }
      }
      $htmlData .= createAllPost($data[1], $data[2], $data[3]);
    }
    return articleview($htmlData);
  }

  function sendAPost($db) {
    restrictedPage();
    if (isset($_POST['postTitle']) && isset($_POST['postBody'])) {
      $postTitle = $_POST['postTitle'];
      $postBody = $_POST['postBody'];
      $stmt = mysqli_prepare($db, "INSERT INTO blogpost(title_post, body_post,date_post) VALUES (?, ?, ?)");
      mysqli_stmt_bind_param($stmt, 'sss', $postTitle, $postBody, date("F j, Y, g:i a"));
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      return success("you post is online ! ");
    }
    return compose();
  }

  function manageThePost($db, $usersignInUp = null) {
    $res = mysqli_query($db, "SELECT * FROM blogpost ORDER BY id_post DESC ;");
    while ($data = mysqli_fetch_array($res)) {
      if ($_GET['page'] == 'index' || $usersignInUp == true) {
        return (displayArticle($data[1], $data[2], $data[3]));
      }
      if (isset($_POST['read_more'])) {
        $htmlData = displayArticle($_POST['title'], $_POST['post'], $_POST['date']);
      } else {
        $htmlData .= createAllPost($data[1], $data[2], $data[3]);
      }
    }
    return articleview($htmlData);
  }
?>
