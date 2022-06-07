<?php

//session_start();
include("connection.php");
$email='barnitarc8583@gmail.com';
echo $email;
$query ="SELECT * FROM tbuser where uemail = '$email'";
echo $query;
$result = mysqli_query($conn,$query);
echo mysqli_error($conn);
$row = mysqli_fetch_row($result);
echo $row[1];
?>