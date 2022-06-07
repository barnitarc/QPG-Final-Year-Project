<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>viewQuestion</title>
    <link rel="stylesheet" href="nicepage2.css" media="screen">
<link rel="stylesheet" href="viewQuestion1.css" media="screen">
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
    <meta property="og:title" content="viewQuestion">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><!--<header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">View Database</p><p class="u-align-right u-text u-text-2">Welcome name</p><a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="dashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></header>
-->
<header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">View Questions</p><p class="u-align-right u-text u-text-2"><a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="dashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></p></header><section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-9c81">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          
          <form action="viewAllQuestion.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-13 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 35px;" redirect="true">
            <div class="u-form-group u-form-select u-label-top u-form-group-1">
            <h3><b style="color:hsl(176, 72%, 33%)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view question by subject</h3> </b>
            <label for="select-821b" class="u-label u-spacing-100 u-label-1">department</label>
              <div class="u-form-select-wrapper">
                <select id="select-821b" name="dept" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white u-input-1">
                  <option value="CSE">CSE</option>
                  <option value="IT">IT</option>
                  <option value="ECE">ECE</option>
                  <option value="EE">EE</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-2">
              <label for="select-993f" class="u-label u-spacing-100 u-label-2">semester</label>
              <div class="u-form-select-wrapper">
                <select id="select-993f" name="sem" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white u-input-2">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-3">
              <label for="select-89e1" class="u-label u-spacing-100 u-label-3">question type</label>
              <div class="u-form-select-wrapper">
                <select id="select-89e1" name="qtype" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white u-input-3">
                  <option value="mcq">mcq</option>
                  <option value="brief">brief</option>
                  <option value="long">long</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-4">
              <label for="select-f6cf" class="u-label u-spacing-100 u-label-4">subject</label>
              <div class="u-form-select-wrapper">
                <select id="select-f6cf" name="subid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white u-input-4">
                  <?php
                $server="localhost";
                $user="root";
                $password="";
                $con=mysqli_connect($server,$user,$password);
                if($con){
                    //echo "<p> connected</p>";
                }
                else{
                    echo "no";
                }
				mysqli_select_db($con,"dbexam");
				$sql="select subname,subid from `tbsub` order by subname";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res))
                {
                    ?>
                    <option value="<?php echo $row['subid'];?>"><?php echo $row['subname'];?></option>
                    <?php
                }
                ?>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div style="align-items: center; display: flex;justify-content: center;">
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" value="view questions"  style="border-radius:15px;color:white; background-color:hsl(176, 72%, 33%); border-color:rgb(77, 141, 214) ;width: 200px; height: 42px;">
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
      <a class="u-link" href="" target="_blank">
        <span>....</span>
      </a>. 
    </section>
  </body>
</html>