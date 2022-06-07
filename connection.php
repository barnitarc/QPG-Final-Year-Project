<?php

$host = "localhost";
 $id = "root";
 $pass = "";
 $database = "dbexam";
 $user = "root";
 $errordb="Unable to select database";
 $error = "Unable to connect to the database check again..!!";
$conn = mysqli_connect($host,$id,$pass);
mysqli_select_db($conn,"dbexam");
 ?>