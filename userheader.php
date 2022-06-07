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
    <title>dashboard</title>
    <!--<link rel="stylesheet" href="nicepage1.css" media="screen">-->
<link rel="stylesheet" href="userdashboard.css" media="screen">
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
    <meta property="og:title" content="dashboard">
    <meta property="og:type" content="website">
  </head>
  <body><header class="u-clearfix u-header u-header" id="sec-167a"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
          <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <h3 class="u-align-right u-headline u-text u-text-palette-5-dark-2 u-text-1">
          <a href="/" style="font-size:20px">Welcome <?php
          echo $_SESSION['currentuser'];?>
              <span style="font-weight: 700;"></span>
          </a>
        </h3>
        <h1 class="u-headline u-text u-text-grey-70 u-text-2">
          <a href="#" style="font-size:35px">Question Paper Generator<br>
          </a>
        </h1>
        <p class="u-align-right u-text u-text-grey-75 u-text-3">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="home.html">Log out<span style="font-weight: 700;"></span>
          </a>
        </p>
        <p class="u-align-right u-text u-text-default u-text-4">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="userDashboard.html" data-page-id="66040615">Dashboard<span style="font-weight: 700;"></span>
          </a>
        </p>
      </div></header>
</body>
</html>