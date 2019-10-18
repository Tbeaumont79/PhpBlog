<?php
  function  restrictedPage() {
    if ($_SESSION['name'] != 'admin') {
      return error("you are not allowed to access this page ! ").signInAndSignUpForm();
    }
  }

  function deleteArticle($db, $title, $post) {
    if (isset($title) && isset($post)) {
      die('test');
      mysqli_query($db, "DELETE * FROM blogpost WHERE title_post='$title'");
    }
    return (getThePost($db, true));
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

  function getThePost($db, $usersignInUp = null) {
    $res = mysqli_query($db, "SELECT * FROM blogpost ORDER BY id_post DESC ;");
    while ($data = mysqli_fetch_array($res)) {
      if ($_GET['page'] == 'index' || $usersignInUp == true) {
        return (displayArticle($data[1], $data[2], $data[3]));
      } else if ($_GET['page'] == 'deleteArticle' && $_POST['delete']) {
        return (deleteArticle($db, $_POST['title'], $_POST['post']));
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
