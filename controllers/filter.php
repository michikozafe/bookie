<?php
if(isset($_GET["filter"])){
  $genre = $_GET["filter"];
  $bookListsQuery .= " WHERE genre='$genre' ";
}
?>