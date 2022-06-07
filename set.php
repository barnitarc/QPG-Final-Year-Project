
<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>set</title>
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
/*$subid=$_POST['subid'];
$sql="select subname from `tbsub` where subid='$subid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($res);
$subject=$row[0];*/
//$qtype=$_POST["qtype"];
/*$noofquestions=$_POST["noofquestions"];
$totmarks=$_POST["totmarks"];*/

$subject=$_SESSION['subject'];
$mcq=$_SESSION['mcq'];

$mcqmarks=$_SESSION['mcqmarks'];

$unitmcq=$_SESSION['unitmcq'];

$brief=$_SESSION['brief'];

$briefmarks=$_SESSION['briefmarks'];

$unitbrief=$_SESSION['unitbrief'];

$long=$_SESSION['long'];

$longmarks=$_SESSION['longmarks'];

$unitlong=$_SESSION['unitlong'];

$date=$_SESSION['date'];

$total=$_SESSION['total'];
$i=$_SESSION['i'];
echo "<table  align='center' width='800'>";
echo"<tr>";
echo"<td><b>Set no :$i</b></td>";
$i++;
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

$result=mysqli_query($conn,"select * from longg order by rand()");
echo "</table>";
echo"<table border='0' align='center' width='800'>";
echo "<tr>";
echo "<td>";
echo "<u><b>long questions</u></b>";
echo"<td colspan='2'>&nbsp;</td>";
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





?>
<div style="text-align:center;">

<button  style="background-color:rgb(188, 176, 238)" onclick="myFunction()">Print this page</button><br>
<button  style="background-color:rgb(188, 176, 238)" onclick="javascript:window.close();">close the tab</button>
</div>


<script>
function myFunction()
{
window.print();
}
</script>

    
    
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