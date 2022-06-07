<?php
$email=$_POST['uemail'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$add=$_POST['address'];
include('connection.php');
$res=mysqli_query($conn,"update tbuser set ufname='$fname',ulname='$lname',ucontact='$contact', uaddress='$add' where uemail like '$email'");
if($res==1)
{
    echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm('updated'))";
    echo "window.location.href='update.php'";
    echo "</script>";
    
}
else
{
    echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm(' not updated try again!!!!'))";
    echo "window.location.href='update.php'";
    echo "</script>";
}