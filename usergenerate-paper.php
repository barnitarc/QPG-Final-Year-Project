<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>generate paper</title>
    <link rel="stylesheet" href="nicepage1.css" media="screen">
<link rel="stylesheet" href="generate.css" media="screen">
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
    <meta property="og:title" content="generate paper">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-167a"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
          <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <h3 class="u-align-right u-headline u-text u-text-palette-5-dark-2 u-text-1">
        
          
        
        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="userDashboard.html" data-page-id="66040615">Dashboard<span style="font-weight: 700;"></span>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="home.html">Log out<span style="font-weight: 700;"></span>
          </a>
        
        </h3>
        <h3 class="u-headline u-text u-text-grey-70 u-text-2">
          <a href="#" style="font-size:35px;">Generate Question Paper<br>
          </a>
        </h3>
        
      </div></header>
    <section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-adb3">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form action="userfinalpaper.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-0 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 17px;" redirect="true">
            
            
            <div class="u-form-group u-form-select u-label-top u-form-group-1">
              <label for="select-24f5" class="u-label u-spacing-7 u-label-1">department</label>
              <div class="u-form-select-wrapper">
                <select id="select-24f5" name="dept" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-1">
                  <option value="CSE">CSE</option>
                  <option value="IT">IT</option>
                  <option value="ECE">ECE</option>
                  <option value="EE">EE</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-2">
              <label for="select-ef12" class="u-label u-spacing-7 u-label-2">semester</label>
              <div class="u-form-select-wrapper">
                <select id="select-ef12" name="sem" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-2">
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
              <label for="select-e1e1" class="u-label u-spacing-7 u-label-3">subject</label>
              <div class="u-form-select-wrapper">
                <select id="select-e1e1" name="subid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-3">
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
            <div class="u-form-group u-label-top u-form-group-4">
              <label for="text-919a" class="u-label u-spacing-7 u-label-4">no of mcq</label>
              <input type="text" placeholder="" id="text-919a" name="mcq" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-4" required>
            </div>

            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-3">
              <label for="text-b1a4" class="u-label">hard</label>
              <input type="text" placeholder="" id="text-b1a4" name="mcqhard" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-4">
              <label for="text-c2c1" class="u-label">moderate</label>
              <input type="text" placeholder="" id="text-c2c1" name="mcqmod" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-5">
              <label for="text-b1a4" class="u-label">low</label>
              <input type="text" placeholder="" id="text-b1a4" name="mcqlow" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            

            <div class="u-form-group u-label-top u-form-group-5">
              <label for="text-f506" class="u-label u-spacing-7 u-label-5">total marks for mcq</label>
              <input type="text" placeholder="" id="text-f506" name="mcqmarks" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-5" required>
            </div>
            <div class="u-form-group u-label-top u-form-group-6">
              <label for="text-7bec" class="u-label u-spacing-7 u-label-6">no of brief question</label>
              <input type="text" placeholder="" id="text-7bec" name="brief" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-6" required>
            </div>

            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-3">
              <label for="text-b1a4" class="u-label">hard</label>
              <input type="text" placeholder="" id="text-b1a4" name="briefhard" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-4">
              <label for="text-c2c1" class="u-label">moderate</label>
              <input type="text" placeholder="" id="text-c2c1" name="briefmod" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-5">
              <label for="text-b1a4" class="u-label">low</label>
              <input type="text" placeholder="" id="text-b1a4" name="brieflow" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>

            <div class="u-form-group u-label-top u-form-group-7">
              <label for="text-70ac" class="u-label u-spacing-7 u-label-7">total marks for brief questions</label>
              <input type="text" placeholder="" id="text-70ac" name="briefmarks" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-7" required>
            </div>
            <div class="u-form-group u-label-top u-form-group-8">
              <label for="text-eea4" class="u-label u-spacing-7 u-label-8">no of long questions</label>
              <input type="text" placeholder="" id="text-eea4" name="long" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-8" required>
            </div>

            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-3">
              <label for="text-b1a4" class="u-label">hard</label>
              <input type="text" placeholder="" id="text-b1a4" name="longhard" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-4">
              <label for="text-c2c1" class="u-label">moderate</label>
              <input type="text" placeholder="" id="text-c2c1" name="longmod" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-label-top u-form-group-5">
              <label for="text-b1a4" class="u-label">low</label>
              <input type="text" placeholder="" id="text-b1a4" name="longlow" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>

            <div class="u-form-group u-label-top u-form-group-9">
              <label for="text-b7d1" class="u-label u-spacing-7 u-label-9">total marks for long question</label>
              <input type="text" placeholder="" id="text-b7d1" name="longmarks" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-9" required>
              
            </div>
            <div class="u-form-group u-label-top u-form-group-8">
              <label for="text-eea4" class="u-label u-spacing-7 u-label-8">date of exam</label>
              <input type="date" placeholder="" id="text-eea4" name="edate" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-16 u-white u-input-8" required>
            <br>
            </div>
            <!--
            <div class="u-align-left u-form-group u-form-submit u-label-top">
              <input type="submit" value="submit" class="u-form-control-hidden">
              <a href="#" class="u-btn u-btn-submit u-button-style">Submit</a>
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">-->
            <div style="align-items: center; display: flex;justify-content: center;">
                  <br>

                  <input type="submit" value="create paper"  style="border-radius:15px; background-color:rgb(77, 141, 214); border-color:rgb(77, 141, 214) ;width: 200px; height: 42px;">
                </div>
          </form>
        </div>
        
        <a href="userDashboard.html" data-page-id="66040615" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">back</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3c4b"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"><br>DESIGNED & DEVELOPED BY BASS</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      
      <p class="u-text">
        <span>COPYRIGHT 2022</span>
      </p>
      
    </section>
  </body>
</html>