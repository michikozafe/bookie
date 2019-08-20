<?php
require_once './connection.php';

if($_GET["search"] == "") {
  $_SESSION["message"] = "Please enter an input";
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}

$searchInput = $_GET["search"];
echo $searchInput;
$_SESSION["search"] = " WHERE title LIKE '%$searchInput%'
OR author LIKE '%$searchInput%'
OR isbn LIKE '%$searchInput%'
OR genre LIKE '%$searchInput%'
OR year LIKE '%$searchInput%'
";

header("Location: " . $_SERVER["HTTP_REFERER"]);
?>