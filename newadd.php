
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
<header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">Add Questions</p><p class="u-align-right u-text u-text-2"><a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="dashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></p></header>
<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-41e4">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form action="add.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-26 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 32px;" redirect="true">
            <div class="u-form-group u-form-select u-label-top u-form-group-1">
              <label for="select-6611" class="u-label">subject</label>
              <div class="u-form-select-wrapper">
                <select id="select-6611" name="subid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
                
                <?php
                $server="localhost";
                $user="root";
                $password="";
                $sem=$_POST['sem'];
                $dept=$_POST['dept'];
                echo $sem;
                $con=mysqli_connect($server,$user,$password);
                if($con){
                    echo "<p> connected</p>";
                }
                else{
                    echo "no";
                }
				mysqli_select_db($con,"dbexam");
				$sql="select subname,subid from `tbsub` where sem='$sem' and dept like '$dept' order by subname";
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
            <?php
            if($_POST['qtype']=="mcq"){
              $q=$_POST['qtype'];
              $_SESSION['q']="mcq";
              
            ?>
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">enter new mcq question</label>
              <input type="text" placeholder="" id="name-e7b6" name="question" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-3">
              <label for="text-b1a4" class="u-label">option 1</label>
              <input type="text" placeholder="" id="text-b1a4" name="a1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-4">
              <label for="text-c2c1" class="u-label">option 2</label>
              <input type="text" placeholder="" id="text-c2c1" name="a2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-5">
              <label for="text-e939" class="u-label">option 3</label>
              <input type="text" placeholder="" id="text-e939" name="a3" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-6">
              <label for="text-2326" class="u-label">option 4</label>
              <input type="text" placeholder="" id="text-2326" name="a4" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
            </div>
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">enter module name</label>
              <input type="text" placeholder="Enter module" id="name-e7b6" name="module" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-7">
              <label for="select-5946" class="u-label">priority</label>
              <div class="u-form-select-wrapper">
                <select id="select-5946" name="priority" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-7">
              <label for="select-5946" class="u-label">level of question</label>
              <div class="u-form-select-wrapper">
                <select id="select-5946" name="level" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
                <option value="high">Hard</option>
                  <option value="mod">moderate</option>
                  <option value="low">Low</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <?php
            }
            if($_POST['qtype']=="long"){
              $q=$_POST['qtype'];
              $_SESSION['q']="long";
              

            ?>
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">enter new long question</label>
              <input type="text" placeholder="" id="name-e7b6" name="question" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">enter module name</label>
              <input type="text" placeholder="Enter module" id="name-e7b6" name="module" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-7">
              <label for="select-5946" class="u-label">priority</label>
              <div class="u-form-select-wrapper">
                <select id="select-5946" name="priority" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-7">
              <label for="select-5946" class="u-label">level of question</label>
              <div class="u-form-select-wrapper">
                <select id="select-5946" name="level" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
                <option value="high">Hard</option>
                  <option value="mod">moderate</option>
                  <option value="low">Low</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <?php
            }
            if($_POST['qtype']=="brief"){
              $q=$_POST['qtype'];
              $_SESSION['q']="brief";
              
            ?>
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">enter new brief question</label>
              <input type="text" placeholder="" id="name-e7b6" name="question" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-e7b6" class="u-label">enter module name</label>
              <input type="text" placeholder="Enter module" id="name-e7b6" name="module" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required="">
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-7">
              <label for="select-5946" class="u-label">priority</label>
              <div class="u-form-select-wrapper">
                <select id="select-5946" name="priority" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
	</div>
              <div class="u-form-group u-form-select u-label-top u-form-group-7">
              <label for="select-5946" class="u-label">level of question</label>
              <div class="u-form-select-wrapper">
                <select id="select-5946" name="level" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-18 u-white" required>
                <option value="high">Hard</option>
                  <option value="mod">moderate</option>
                  <option value="low">Low</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <?php
            }
            
            ?>
            <div style="align-items: center; display: flex;justify-content: center;">
              <br>

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<input type="submit" value="add question"  style="border-radius:15px;color: white;  background-color:rgb(77, 141, 214); border-color:rgb(77, 141, 214) ;width: 200px; height: 42px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="questions.html" data-page-id="66040615" style="border-radius:15px;background-color:rgb(77, 141, 214); border-color:rgb(77, 141, 214) ;width: 100px; height: 42px;" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">back</a>
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