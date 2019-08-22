<?php
  if(isset($_GET["sort"])) {
    if($_GET["sort"] === "title") {
      $bookListsQuery .= " ORDER BY title ASC";
    }
    if($_GET["sort"] === "isbn") {
      $bookListsQuery .= " ORDER BY isbn ASC";
    }
    if($_GET["sort"] === "author") {
      $bookListsQuery .= " ORDER BY author ASC";
    }
    if($_GET["sort"] === "genre") {
      $bookListsQuery .= " ORDER BY genre ASC";
    }
    if($_GET["sort"] === "year") {
      $bookListsQuery .= " ORDER BY year ASC";
    }
  }
?>