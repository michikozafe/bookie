<?php 
  require_once "./connection.php";

  if( $_POST["title"] == "" || $_POST["isbn"] == "" || $_POST["author"] == "" || $_POST["genre"] == "" || $_POST["year"] == "" ) {
    $_SESSION["message"] = "Please Complete The Form";
    header("Location: ../index.php");
    return;
  }

  // var_dump($_FILES["image"]);
  $title = $_POST["title"];
  $isbn = $_POST["isbn"];
  $author = $_POST["author"];
  $genre = $_POST["genre"];
  $year = $_POST["year"];
  $uploadedImgName = $_FILES["image"]["name"];

  if(!$uploadedImgName) {
    $addBookQuery = "INSERT INTO books(title, isbn, author, genre, year) VALUES
    ('$title', '$isbn', '$author', '$genre', $year)";
    echo $addBookQuery;
  } else {
    // Image Validation
    $imgTypes = ["jpg", "jpeg", "png", "gif", "svg", "bmp"];
    $imgExt = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    if(!in_array($imgExt, $imgTypes)) {
      $_SESSION["message"] = "Please Upload A Valid Image";
      header("Location: ../index.php");
    }

    $uploadedImgName = time() . '.' . $imgExt;
    $image = "../assets/images/$uploadedImgName";
    $filename = $_FILES["image"]["tmp_name"];
    move_uploaded_file($filename, $image);

    $addBookQuery = "INSERT INTO books(title, isbn, author, genre, year, img) VALUES
    ('$title', '$isbn', '$author', '$genre', $year, '$image')";
  }
  $addBookResult = mysqli_query($conn, $addBookQuery);
  $_SESSION["message"] = "$title Added Successfully!";

  header("Location: ../index.php");
