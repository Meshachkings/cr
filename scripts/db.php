<?php
  $conn = new mysqli("localhost", "root", "", "crime");

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

?>