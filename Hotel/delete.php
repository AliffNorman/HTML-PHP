<?php

include 'dbconn.php';

$id = $_GET['id'];

$q = "DELETE FROM `user` WHERE id=$id";

mysqli_query($dbconn,$q);

header('location:index.php');

?>