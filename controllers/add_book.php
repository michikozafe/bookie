<?php 
  require_once "connection.php";

  if( $_POST["title"] == "" || $_POST["isbn"] == "" || $_POST["author"] == "" || $_POST["genre"] == "" || $_POST["year"] == "" ) {
    $_SESSION["message"] = "Please Complete The Form";
    header("Location: ../index.php");
    return;
  }

  $title = $_POST["title"];
  $isbn = $_POST["isbn"];
  $author = $_POST["author"];
  $genre = $_POST["genre"];
  $year = $_POST["year"];
  // var_export($_POST);
  $addBookQuery = "INSERT INTO books(title, isbn, author, genre, year) VALUES
  ('$title', '$isbn', '$author', '$genre', $year)";
  $addBookResult = mysqli_query($conn, $addBookQuery);
  $_SESSION["message"] = "$title Added Successfully!";

  header("Location: ../index.php");
