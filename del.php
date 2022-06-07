<?php
$email=$_POST['email'];
include('connection.php');
$res=mysqli_query($conn,"delete from tbuser where uemail like '$email'");
//echo $res;
Header("Location: update.php");