
<?php
session_start();
include('connection.php');

$res=mysqli_query($conn,"drop table if exists mcq,longg,brief");
//echo "1";

?>
<?php
ob_start();

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>finalpaper</title>
    <link rel="stylesheet" href="nicepage3.css" media="screen">
<link rel="stylesheet" href="finalpaper.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.6.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="finalpaper">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-167a"><div class="u-clearfix u-sheet u-sheet-1">
        
        <h3 class="u-align-right u-headline u-text u-text-palette-5-dark-2 u-text-1">
        
          
        
        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="dashboard.html" data-page-id="66040615"><span style="font-weight: 700;"></span>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="home.html"><span style="font-weight: 700;"></span>
          </a>
        
        </h3>
        <h3 class="u-headline u-text u-text-grey-70 u-text-2">
        <p style="font-size:35px; text-align:center">XYZ College of Engineering and Technology-- Question Paper<br>
</p>
        </h3>
        
      </div></header>

<div id="bottom" style="height: 700px;">


<div id="content">
 <hr>
 
 <hr>
<!--<div id="menubar">
			<div id="menu1" class="menu_single_container"> <div class="padded_menu">Users</div> 
				<div id="drop1" class="drop">
					<ul>
						<li><a href ="#">Show Users</a></li>
						<li><a href ="delusers.php">Delete users</a></li>
					</ul>
				</div>
			</div>	
			<div id="menu2" class="menu_single_container"> <div class="padded_menu">Papers</div> 
				<div id="drop2" class="drop">
					<ul>
						<li><a href ="papers.php">Show papers</a></li>
						<li><a href ="addpaper.php">Add paper</a></li>
						<li>Delete paper</li>
						
					</ul>
				</div>	
			</div>
		
			</div>-->

<div id="papers_menu">


</div>
<hr>


</div>
<?php
include ('connection.php');
$server="localhost";
    $user="root";
    $password="";
    $conn=mysqli_connect($server,$user,$password);
    if($conn){
        //echo "<p> connected</p>";
    }
    else{
        echo "no";
    }
    mysqli_select_db($conn,"dbexam");
$subid=$_POST['subid'];
$sql="select subname from `tbsub` where subid='$subid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($res);
$subject=$row[0];
//$qtype=$_POST["qtype"];
/*$noofquestions=$_POST["noofquestions"];
$totmarks=$_POST["totmarks"];*/
$_SESSION['subject']=$subject;
$mcq=$_POST["mcq"];
$_SESSION['mcq']=$mcq;
$mcqmarks=$_POST["mcqmarks"];
$_SESSION['mcqmarks']=$mcqmarks;
$unitmcq=$mcqmarks/$mcq;
$_SESSION['unitmcq']=$unitmcq;
$brief=$_POST["brief"];
$_SESSION['brief']=$brief;
$mhard=$_POST["mcqhard"];
$mmod=$_POST["mcqmod"];
$mlow=$_POST["mcqlow"];
$briefmarks=$_POST["briefmarks"];
$_SESSION['briefmarks']=$briefmarks;
$bhard=$_POST["briefhard"];
$bmod=$_POST["briefmod"];
$blow=$_POST["brieflow"];
$lhard=$_POST["longhard"];
$lmod=$_POST["longmod"];
$llow=$_POST["longlow"];
$unitbrief=$briefmarks/$brief;
$_SESSION['unitbrief']=$unitbrief;
$long=$_POST["long"];
$_SESSION['long']=$long;
$longmarks=$_POST["longmarks"];
$_SESSION['longmarks']=$longmarks;
$unitlong=$longmarks/$long;
$_SESSION['unitlong']=$unitlong;
$date=$_POST["edate"];
$_SESSION['date']=$date;
$total=$mcqmarks+$briefmarks+$longmarks;
$_SESSION['total']=$total;
$i=1;
echo "<table  align='center' width='800'>";
echo"<tr>";
echo"<td><b>Set no :$i</b></td>";
$i=$i+1;
$_SESSION['i']=$i;
echo"<td colspan='2'></td>";

echo"<td align='right'><b>Marks : $total</b></td>";
 
echo"</tr>";
echo"<tr>";
echo"<td><b>Subject :$subject</b></td>";

echo"<td colspan='2'></td>";

echo"<td align='right'><b>Date :$date</b></td>";
 
echo"</tr>";

echo"<tr>";
echo"<td>&nbsp;</td>";

echo"<td colspan='2'></td>";


echo"</tr>";
echo"<tr>";
echo"<td>&nbsp;</td>";

echo"<td colspan='2'></td>";

 
echo"</tr>";

echo"<tr>";
echo"<td>&nbsp;</td>";
echo"<td colspan='2'>&nbsp;</td>"; 
echo"<td>&nbsp;</td>"; 

echo"</tr>";


//if ($qtype=="tbq1word")
{
//$mcqTable=mysqli_query($conn,"create table mcq");
	
$result=mysqli_query($conn,"create table mcq  as Select * from tbqmcq where subid=$subid and level like 'high' order by rand() limit $mhard");
//$result=mysqli_query($conn,"insert into mcq Select * from tbqmcq where subid=$subid and level like 'high' order by rand() limit $mhard");
$result=mysqli_query($conn,"insert into mcq Select * from tbqmcq where subid=$subid and level like 'mod' order by rand() limit $mmod");
$result=mysqli_query($conn,"insert into mcq Select * from tbqmcq where subid=$subid and level like 'low' order by rand() limit $mlow");
$result=mysqli_query($conn,"select * from mcq order by rand()");
echo "</table>";
echo"<table border='0' align='center' width='800'>";
$i=1;
echo "<tr>";
echo "<td>";
echo "<u><b>mcq questions</u></b>";
echo"<td colspan='2'>&nbsp;</td>";
echo"<td align='right'><b>$unitmcq X $mcq = $mcqmarks</b></td>";
echo "</tr>";
echo "</td>";
while($row = mysqli_fetch_assoc($result))
{
	
$num = $row['mcqid'];
//if(isset($_REQUEST[$num]))

$arr=array($row['a1'],$row['a2'],$row['a3'],$row['a4']);

shuffle($arr);
echo"<tr>";
echo"<td>";
//$val = $row['mcqquestion']."  ".$row['a1'];
echo $i.".".$row['mcqquestion']."    level:".$row['level'];
//echo $row['a1']." ".$row['a2']."  ".$row['a3']."  ".$row['a4'];
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";
$i=$i+1;
echo "&nbsp&nbsp&nbsp&nbspa)".$arr[0];
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";

echo "&nbsp&nbsp&nbsp&nbspb)".$arr[1];
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";

echo "&nbsp&nbsp&nbsp&nbspc)".$arr[2];
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";

echo "&nbsp&nbsp&nbsp&nbspd)".$arr[3];
echo"</td>";
echo"</tr>";

}

echo "</table >";

//$result=mysqli_query($conn,"drop table mcq");
$result=mysqli_query($conn,"Select * from tbqbrief where subid=$subid order by rand() limit $brief");
$result=mysqli_query($conn,"create table brief  as Select * from tbqbrief where subid=$subid and level like 'high' order by rand() limit $bhard");
//$result=mysqli_query($conn,"insert into mcq Select * from tbqmcq where subid=$subid and level like 'high' order by rand() limit $mhard");
$result=mysqli_query($conn,"insert into brief Select * from tbqbrief where subid=$subid and level like 'mod' order by rand() limit $bmod");
$result=mysqli_query($conn,"insert into brief Select * from tbqbrief where subid=$subid and level like 'low' order by rand() limit $blow");
$result=mysqli_query($conn,"select * from brief order by rand()");
echo "</table>";
echo"<table border='0' align='center' width='800'>";
echo "<tr>";
echo "<td>";
echo "<u><b>brief questions</u></b>";
echo"<td colspan='2'>&nbsp;</td>";
echo"<td align='right'><b>$unitbrief X $brief = $briefmarks</b></td>";
echo "</tr>";
echo "</td>";
$i=0;
while($row = mysqli_fetch_assoc($result))
{
$num = $row['bid'];
//if(isset($_REQUEST[$num]))
{
$i=$i+1;
echo"<tr>";
echo"<td>";
//$val = $_REQUEST[$num];
echo $i.".".$row['bquestion']."   level:".$row['level'];
echo"</td>";
echo"</tr>";
}
}

echo "</table >";
//$result=mysqli_query($conn,"drop table brief");
$result=mysqli_query($conn,"Select * from tbq1word where subid=$subid order by rand() limit $long");
$result=mysqli_query($conn,"create table longg  as Select * from tbq1word where subid=$subid and level like 'mod' order by rand() limit $lmod");
echo mysqli_error($conn);
//$result=mysqli_query($conn,"insert into mcq Select * from tbqmcq where subid=$subid and level like 'high' order by rand() limit $mhard");
$result=mysqli_query($conn,"insert into longg Select * from tbq1word where subid=$subid and level like 'high' order by rand() limit $lhard");
echo mysqli_error($conn);
$result=mysqli_query($conn,"insert into longg Select * from tbq1word where subid=$subid and level like 'low' order by rand() limit $llow");
echo mysqli_error($conn);
$result=mysqli_query($conn,"select * from longg order by rand()");
echo "</table>";
echo"<table border='0' align='center' width='800'>";
echo "<tr>";
echo "<td>";
echo "<u><b>long questions</u></b>";
//echo"<td colspan='2'>&nbsp;</td>";
echo"<td align='right'><b>$unitlong X $long = $longmarks</b></td>";
echo "</tr>";
echo "</td>";
$i=0;
echo mysqli_error($conn);
while($row = mysqli_fetch_assoc($result))
{
$num = $row['wordid'];
$i=$i+1;
echo"<tr>";
echo"<td>";
//$val = $_REQUEST[$num];
echo $i.".".$row['wquestion']."    level:".$row['level'];
echo"</td>";
echo"</tr>";
/*if(isset($_REQUEST[$num]))
{
echo"<tr>";
echo"<td>";
$val = $_REQUEST[$num];
echo $val;
echo"</td>";
echo"</tr>";
}*/
}
echo "</table >";
}
//$result=mysqli_query($conn,"drop table longg");
//else if ($qtype=="tbqbrief")


//else if($qtype=="tbqqmcq")


$s="userdrop.php";


?>
<div style="text-align:center;">
<button  style="background-color:rgb(188, 176, 238)" onclick="myFunction()">Print this page</button><br><br>
<script>
function myFunction()
{
window.print();
}
</script>
<?php

$out=ob_get_contents();
//ob_end_clean();
$time=time();
$x='html';
$file=$subject.$time.'.'.$x;
$d=date("Y-m-d h:i:sa");
$_SESSION['out']=$out;
$_SESSION['file']=$file;
$_SESSION['subject']=$subject;
/*
//echo $file;
//echo $out;
file_put_contents($file,$out);
//include('connection.php');
$query ="SELECT max(id) FROM questions";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_row($result);
    $max= $row[0];
    
    $id=$max+1;
    $res=mysqli_query($conn,"INSERT INTO questions VALUES('$id','$subject','$d','$file')");
    echo mysqli_error($conn);*/

?>

<button  style="background-color:rgb(188, 176, 238)" onclick="javascript:window.open('set.php','_blank');">Create another set of same paper</button>&nbsp;&nbsp;&nbsp;

<button  style="background-color:rgb(188, 176, 238)" onclick="javascript:window.open('addpaper.php','_blank');">save the paper</button>&nbsp;&nbsp;&nbsp;
<button  style="background-color:rgb(188, 176, 238)" onclick="location.href='<?php echo $s;?>'">back</button>




    
    
    <!--<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ea97"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>-->
  </body>
</html>