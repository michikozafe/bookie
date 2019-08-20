<?php
require_once './connection.php';

if(isset($_GET["genre"])){
  $genre = $_GET["genre"];
  $_SESSION["filter"] = " WHERE genre='$genre' ";

  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>