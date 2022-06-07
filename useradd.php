<?php
session_start();
?>
<?php

$qtype=$_SESSION['q'];
echo $qtype;
$q=$_POST['question'];
$module=$_POST['module'];
$priority=$_POST['priority'];
$level=$_POST['level'];
$subid=$_POST['subid'];
$email=$_SESSION['currentuser'];
echo $_SESSION['currentuser'];
include('connection.php');
if($qtype=="mcq"){
    $a1=$_POST['a1'];$a2=$_POST['a2'];$a3=$_POST['a3'];$a4=$_POST['a4'];
    echo $q.$module.$priority.$subid.$user.$a1.$a2.$a3.$a4;
    $query ="SELECT max(mcqid) FROM tbqmcq";
    $result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
$max= $row[0];

$id=$max+1;
echo $id;
echo $email;

$select="INSERT INTO tbqmcq VALUES('$id','$q','$a1','$a2','$a3','$a4','$email','$subid','$module','$priority','$level')";
if (!mysqli_query($conn,$select))
 {
 die('Error: ' . mysqli_error($conn));
 echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm(' not updated try again!!!!'))";
    echo "window.location.href='userquestions.html'";
    echo "</script>";

 }else{
 echo "1 question is added";
 echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm('updated'))";
    echo "window.location.href='userquestions.html'";
    echo "</script>";
}
}
if($qtype=="long")
{
    $query ="SELECT max(wordid) FROM tbq1word";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
$max= $row[0];

$id=$max+1;
echo $id;

$select="INSERT INTO tbq1word VALUES('$id','$q','$email','$subid','$module','$priority','$level')";
if (!mysqli_query($conn,$select))
{
    die('Error: ' . mysqli_error($conn));
    echo "<script>";
       //echo "alert('updated');";
       
       echo "if(confirm(' not updated try again!!!!'))";
       echo "window.location.href='userquestions.html'";
       echo "</script>";
   
    }else{
    echo "1 question is added";
    echo "<script>";
       //echo "alert('updated');";
       
       echo "if(confirm('updated'))";
       echo "window.location.href='userquestions.html'";
       echo "</script>";
   }
   }
   if($qtype=="brief")
   {
    $query ="SELECT max(BID) FROM tbqbrief";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_row($result);
    $max= $row[0];
    
    $id=$max+1;
    
    
    $select="INSERT INTO tbqbrief VALUES('$id','$q','$email','$subid','$module','$priority','$level')";
    if (!mysqli_query($conn,$select))
     {
        die('Error: ' . mysqli_error($conn));
        echo "<script>";
           //echo "alert('updated');";
           
           echo "if(confirm(' not updated try again!!!!'))";
           echo "window.location.href='userquestions.html'";
           echo "</script>";
       
        }else{
        echo "1 question is added";
        echo "<script>";
           //echo "alert('updated');";
           
           echo "if(confirm('updated'))";
           echo "window.location.href='userquestions.html'";
           echo "</script>";
       }
       }
/*
$res=mysqli_query($conn,"INSERT INTO `tbqmcq` VALUES ('$id', '$q', '$a1', '$a2', '$a3', '$a4', '$user', '$subid', '$module', '$priority')");
echo $res."ghhh:";
/*if($res==1)
{
    echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm('updated'))";
    echo "window.location.href='questions.html'";
    echo "</script>";
    
}
else
{
    echo "<script>";
    //echo "alert('updated');";
    
    echo "if(confirm(' not updated try again!!!!'))";
    echo "window.location.href='questions.html'";
    echo "</script>";
}
}*/


?>