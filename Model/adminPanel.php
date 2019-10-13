<?php

  function sendAPost($db) {
    if (isset($_POST['postTitle']) && isset($_POST['postBody'])) {
      $postTitle = $_POST['postTitle'];
      $postBody = $_POST['postBody'];
      $stmt = mysqli_prepare($db, "INSERT INTO blogpost(title_post, body_post) VALUES (?, ?)");
      mysqli_stmt_bind_param($stmt, 'ss', $postTitle, $postBody);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      return success("you post is online ! ").homeView();
    }
    return compose();
  }

  function getThePost($db) {

    $res = mysqli_query($db, "SELECT * FROM blogpost");
    while ($data = mysqli_fetch_array($res, MYSQLI_NUM)) {
      $htmlData .= createAllPost($data[1], $data[2]);
    }
    return articleview($htmlData);
  }
?>
