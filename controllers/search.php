<?php

if(isset($_GET["search"])){
  if($_GET["search"] == "") {
    $_SESSION["message"] = "Please enter an input";
  }
  $searchInput = $_GET["search"];
  $bookListsQuery .= " WHERE title LIKE '%$searchInput%'
  OR author LIKE '%$searchInput%'
  OR isbn LIKE '%$searchInput%'
  OR genre LIKE '%$searchInput%'
  OR year LIKE '%$searchInput%'
  ";
  //  echo $bookListsQuery;
}
?>