<?php
  require_once './connection.php';

  if(isset($_GET["sort"])) {
    if($_GET["sort"] === "title") {
      $_SESSION["sort"] = " ORDER BY title ASC";
    }
    if($_GET["sort"] === "isbn") {
      $_SESSION["sort"] = " ORDER BY isbn ASC";
    }
    if($_GET["sort"] === "author") {
      $_SESSION["sort"] = " ORDER BY author ASC";
    }
    if($_GET["sort"] === "genre") {
      $_SESSION["sort"] = " ORDER BY genre ASC";
    }
    if($_GET["sort"] === "year") {
      $_SESSION["sort"] = " ORDER BY year ASC";
    }
  }

  header("Location: " . $_SERVER["HTTP_REFERER"]);
?>