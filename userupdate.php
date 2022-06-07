<?php
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$add=$_POST['address'];
$country=$_POST['country'];
include('connection.php');
$res=mysqli_query($conn,"update tbuser set ufname='$fname',ulname='$lname',ucontact='$contact', uaddress='$add',ucountry='$country' where uemail like '$email'");
if($res==1)
{
    echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm('updated'))";
    echo "window.location.href='account.php'";
    echo "</script>";
    
}
else
{
    echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm(' not updated try again!!!!'))";
    echo "window.location.href='account.php'";
    echo "</script>";
}