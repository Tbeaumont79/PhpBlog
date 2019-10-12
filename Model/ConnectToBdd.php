<?php

function connectionToBdd() {
  $db = mysqli_connect('localhost', 'root', 'root', 'phpblog') OR die('Erreur de connexion à la base');
  if (!$db) {
  die("Connect failed: ". mysqli_connect_error());
  }
  return $db;
}

?>
