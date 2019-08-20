<?php
  session_start();
  
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'bookie';

  $conn = mysqli_connect($host, $username, $password, $db);

  if(!$conn) {
    die("Connection Failed" . mysqli_error($conn));
  } else {
    // echo "Connection Successful";
  }
?>