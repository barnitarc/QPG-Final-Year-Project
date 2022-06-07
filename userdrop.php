<?php

include('connection.php');
$res=mysqli_query($conn,"drop table longg");
$res=mysqli_query($conn,"drop table brief");
$res=mysqli_query($conn,"drop table mcq");

//echo $res;
Header("Location: usergenerate-paper.php");
?>