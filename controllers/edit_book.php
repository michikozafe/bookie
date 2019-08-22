<?php 
  require_once "./connection.php";

  if( $_POST["title"] == "" || $_POST["isbn"] == "" || $_POST["author"] == "" || $_POST["genre"] == "" || $_POST["year"] == "" ) {
    $_SESSION["message"] = "Please Complete The Form";
    header("Location: ../index.php");
    return;
  }

  // Image Validation
  $imgTypes = ["jpg", "jpeg", "png", "gif", "svg", "bmp"];
  $imgExt = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
  if(!in_array($imgExt, $imgTypes)) {
    $_SESSION["message"] = "Please Upload A Valid Image";
    header("Location: ../index.php");
  }

  $id = $_POST["id"];
  $title = $_POST["title"];
  $isbn = $_POST["isbn"];
  $author = $_POST["author"];
  $genre = $_POST["genre"];
  $year = $_POST["year"];
  $uploadedImgName = $_FILES["image"]["name"];
  
  if(!$uploadedImgName) {
    $editBookQuery = "UPDATE books SET title='$title', isbn='$isbn', author='$author', year=$year WHERE id=$id";
  } else {
    $uploadedImgName = time() . '.' . $imgExt;
    $image = "../assets/images/$uploadedImgName";
    $filename = $_FILES["image"]["tmp_name"];
    move_uploaded_file($filename, $image);
    $editBookQuery = "UPDATE books SET title='$title', isbn='$isbn', author='$author', year=$year, img='$image' WHERE id=$id";
  }
  $editBookResult = mysqli_query($conn, $editBookQuery);
  $_SESSION["message"] = "$title Successfully Updated!";
  header("Location: ../index.php");
?>