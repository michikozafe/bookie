<?php
require_once './connection.php';

$id = $_POST["id"];
$title = $_POST["title"];



$deleteQuery = "DELETE FROM books WHERE id = $id";

echo $deleteQuery;;
$deleteResult = mysqli_query($conn, $deleteQuery);
$_SESSION["message"] = "$title Successfully Deleted!";

header("Location: " . $_SERVER["HTTP_REFERER"])
?>