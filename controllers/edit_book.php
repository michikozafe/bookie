<?php 
  require_once "connection.php";

  if( $_POST["title"] == "" || $_POST["isbn"] == "" || $_POST["author"] == "" || $_POST["genre"] == "" || $_POST["year"] == "" ) {
    $_SESSION["message"] = "Please Complete The Form";
    header("Location: ../index.php");
    return;
  }

  $id = $_POST["id"];
  $title = $_POST["title"];
  $isbn = $_POST["isbn"];
  $author = $_POST["author"];
  $genre = $_POST["genre"];
  $year = $_POST["year"];

  $editBookQuery = "UPDATE books SET title='$title', isbn='$isbn', author='$author', year=$year WHERE id=$id";
  $editBookResult = mysqli_query($conn, $editBookQuery);
  $_SESSION["message"] = "$title Successfully Updated!";

  header("Location: ../index.php");
?>