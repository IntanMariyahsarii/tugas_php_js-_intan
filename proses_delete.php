<?php
include_once("config.php");
 
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM customer WHERE id = $id");

header("Location:index.php");