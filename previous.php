<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>view database</title>
    <link rel="stylesheet" href="nicepage2.css" media="screen">
<link rel="stylesheet" href="view-database.css" media="screen">

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
    <meta property="og:title" content="view database">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><!--<header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">View Database<a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="dashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></p></header>
    
    <header class="u-clearfix u-header u-header" id="sec-167a"><div class="u-clearfix u-sheet u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a>
      <h3 class="u-align-right u-headline u-text u-text-palette-5-dark-2 u-text-1">
      
        
      
      <a class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1" href="dashboard.html" data-page-id="66040615">Dashboard<span style="font-weight: 700;"></span>
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a e.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out<span style="font-weight: 700;"></span>
        </a>
      
      </h3>
      <h3 class="u-headline u-text u-text-grey-70 u-text-2">
        <a href="#" style="font-size:35px;">Generate Question Paper<br>
        </a>
      </h3>
      
    </div></header>-->
    <header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
      <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
    </a><p class="u-text u-text-1" style="font-size:35px">Previous Question papers</p><p class="u-align-right u-text u-text-2"><a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="dashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></p></header>
    <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-3851">
      <div class="u-clearfix u-sheet u-sheet-1">
      <h2  style="font-size:40px text-align:center">find previous questions here</h2>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
          <table class="u-table-entity u-table-entity-1" >
            <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
            </colgroup>
            <thead class="u-custom-font u-font-courier-new u-palette-4-base u-table-header u-table-header-1">
              <tr style="height: 59px;">
              <th class="u-table-cell">Serial no</th>
                <th class="u-table-cell">subject</th>
                <th class="u-table-cell">Time</th>
                <th class="u-table-cell">file link</th>
                
              </tr>
            </thead>
            <?php

            include ('connection.php');
            mysqli_select_db($conn,"dbexam");
            $result=mysqli_query($conn,"Select * from questions");
            $rows = mysqli_num_rows($result);
            // "<table border='1'><tr> <th>Fname</th> <th>Lname</th> <th>Contact</th><th>Collg</th><th>Email</th><th>Paswd</th><th>Address</th><th>Country</th></tr>";
            echo "<tbody class='u-table-body'>";
            for ($j = 0 ; $j < $rows ; ++$j)
            {
            $row = mysqli_fetch_row($result); 
            echo "<tr style='height: 54px;'>";   
            for ($k = 0 ; $k < 4 ; ++$k) 
            {
            if($k<3){
            echo "<td class='u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell'>$row[$k]</td>";
             }
            else{
            echo "<td class='u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell'><a href='$row[$k]' target='_blank'>click</a></td>";
            
             
            }
            }
            echo "</tr>";
            }
            
            ?>
            <!--<tbody class="u-table-body">
              <tr style="height: 54px;">
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Item #1</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Discount:</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$1.00</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$ 0.10</td>
              </tr>
              <tr style="height: 53px;">
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Item #2</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Discount:</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$2.00</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$ 0.20</td>
              </tr>
              <tr style="height: 54px;">
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Item #3</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Discount:</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$3.00</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$ 0.30</td>
              </tr>
              <tr style="height: 54px;">
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Item #4</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Description</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">Discount:</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$4.00</td>
                <td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">$ 0.40</td>
              </tr>-->
            </tbody>
            
          </table>
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