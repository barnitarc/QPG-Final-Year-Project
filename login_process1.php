<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
/* @var $_POST type */

include ('header.php');

$server="localhost";
    $user="root";
    $password="";
    $con=mysqli_connect($server,$user,$password);
    if($con){
        echo "<p> connected</p>";
    }
    else{
        echo "no";
    }
    mysqli_select_db($con,"dbexam");
    $email=$_POST['userid'];
    $passwd=$_POST['password'];
    
    $sql="select * from `tbuser` where uemail='$email' and upasswd='$passwd'";
    //$q = "select ufname from `tbuser` where uemail = '$email' AND upasswd = '$password'";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{

$_SESSION["currentuser"]=$email;
$e=$_SESSION['currentuser'];
if($e=="admin@exam.com")
Header("Location: dashboard.html");
else
Header("Location: userDashboard.html");
}
else
{
    Header("Location: sign-up.html");
//echo "Welcome "." $queryresult";
}