
<?php
session_start();
include("connection.php");
$email=$_SESSION['currentuser'];
//echo $email;
$query ="SELECT * FROM tbuser where uemail = '$email'";

$result = mysqli_query($conn,$query);
echo mysqli_error($conn);
$row = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>newadd</title>
    <link rel="stylesheet" href="nicepage2.css" media="screen">
<link rel="stylesheet" href="newadd.css" media="screen">
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
    <meta property="og:title" content="newadd">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
  
   <!-- <header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">add new question</p><p class="u-align-right u-text u-text-2">Welcome name</p><a href="https://nicepage.com/c/art-design-website-templates" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="https://nicepage.com/joomla-templates" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></header>
-->
<header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="/" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">My Account</p><p class="u-align-right u-text u-text-2"><a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="userDashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></p></header>
<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-41e4">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form action="userupdate.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-26 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 32px;" redirect="true">
            <div class="u-form-group u-form-select u-label-top u-form-group-1">
              
            </div>
            
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">email</label>
              <input type="text"  value="<?php echo $email;?>" placeholder="Enter your Name" id="name-e7b6" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" readonly>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-3">
              <label for="text-b1a4" class="u-label">First name</label>
              <input type="text" value="<?php echo $row[0];?>" placeholder="" id="text-b1a4" name="fname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white"required>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-4">
              <label for="text-c2c1" class="u-label">Last name</label>
              <input type="text" value="<?php echo $row[1];?>" placeholder="" id="text-c2c1" name="lname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white"required>
            </div>
            
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">Contact</label>
              <input type="text" value ="<?php echo $row[2];?>"placeholder="Enter module" id="name-e7b6" name="contact" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">Address</label>
              <input type="text" value ="<?php echo $row[6];?>"placeholder="Enter module" id="name-e7b6" name="address" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div><div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">Country</label>
              <input type="text" value ="<?php echo $row[7];?>"placeholder="Enter module" id="name-e7b6" name="country" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            
            <?php
            
            ?>
            <div style="align-items: center; display: flex;justify-content: center;">
              <br>

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<input type="submit" value="update"  style="border-radius:15px;color: white;  background-color:rgb(77, 141, 214); border-color:rgb(77, 141, 214) ;width: 200px; height: 42px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="userdashboard.html" data-page-id="66040615" style="border-radius:15px;background-color:rgb(77, 141, 214); border-color:rgb(77, 141, 214) ;width: 100px; height: 42px;" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">back</a>
            </div>
            </div>
      </form>
    </div>
    
    
          </form>
        </div>
      </div>
    </section>
    
    
     <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3c4b"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">DESIGNED & DEVELOPED BY BASS</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      
      <p class="u-text">
        <span>COPYRIGHT 2022</span>
      </p>
      
    </section>
  </body>
</html>