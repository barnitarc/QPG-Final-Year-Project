<?php

session_start();
$out=$_SESSION['out'];
$file=$_SESSION['file'];
$subject=$_SESSION['subject'];
$d=date("Y-m-d h:i:sa");
file_put_contents($file,$out);
include('connection.php');
$query ="SELECT max(id) FROM questions";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_row($result);
    $max= $row[0];
    
    $id=$max+1;
    $res=mysqli_query($conn,"INSERT INTO questions VALUES('$id','$subject','$d','$file')");
    echo mysqli_error($conn);
    echo "<script>";
           //echo "alert('updated');";
           
           echo "if(confirm('saved'))";
           echo "window.close()";
           echo "</script>";
//header("location:previous.php");
?>