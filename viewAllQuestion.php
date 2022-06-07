<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>viewAllQuestion</title>
    <link rel="stylesheet" href="nicepage2.css" media="screen">
<link rel="stylesheet" href="viewAllQuestion.css" media="screen">
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
    <meta property="og:title" content="viewAllQuestion">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><!--<header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">View Database</p><p class="u-align-right u-text u-text-2">Welcome name</p><a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="dashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></header>
--><header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-header" id="sec-b8fc"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="612">
<img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><p class="u-text u-text-1">View Questions</p><p class="u-align-right u-text u-text-2"><a href="home.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-1">Log out</a><a href="dashboard.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-2">Dashboard</a></p></header>
<section class="u-align-center u-clearfix u-section-1" id="sec-9795">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1">subject :<?php 
        include ('connection.php');
        $s=$_POST['subid'];
        mysqli_select_db($conn,"dbexam");
        $result=mysqli_query($conn,"Select subname from tbsub where subid=$s");
        $rows = mysqli_num_rows($result);
        for ($j = 1 ; $j <= $rows ; ++$j)
            {
            $row = mysqli_fetch_row($result); 
        echo $row[0];
            }?><span style="font-weight: 700;"></span>
        </p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="5%">
              <col width="80%">
              <col width="15%%">
            </colgroup>
            
            <?php
            $sub=$_POST['subid'];
            $qtype=$_POST['qtype'];
            
            if($qtype=="mcq")
            {
                ?>
                <thead class="u-palette-1-base u-table-header u-table-header-1">
              <tr style="height: 45px;">
                <th class="u-table-cell">Sl.No </th>
                <th class="u-table-cell">Question</th>
                <th class="u-table-cell">option 1</th>
                <th class="u-table-cell">option 2</th>
                <th class="u-table-cell">option 3</th>
                <th class="u-table-cell">option 4</th>
                <th class="u-table-cell">module</th>
              </tr>
            </thead>
            <?php
            include ('connection.php');
            mysqli_select_db($conn,"dbexam");
            $result=mysqli_query($conn,"Select mcqquestion,a1,a2,a3,a4,module from tbqmcq where subid=$sub");
            $rows = mysqli_num_rows($result);
            // "<table border='1'><tr> <th>Fname</th> <th>Lname</th> <th>Contact</th><th>Collg</th><th>Email</th><th>Paswd</th><th>Address</th><th>Country</th></tr>";
            echo '<tbody class="u-table-alt-palette-1-light-3 u-table-body">';
            for ($j = 1 ; $j <= $rows ; ++$j)
            {
            $row = mysqli_fetch_row($result); 
            echo "<tr style='height: 65px;'>";  
            echo " <td class='u-table-cell'>$j</td>";  
            for ($k = 0 ; $k < 6 ; ++$k) 
            echo " <td class='u-table-cell'>$row[$k]</td>"; 
            echo "</tr>"; 
            }
          }
            if($qtype=="long")
            {
              ?>
                <thead class="u-palette-1-base u-table-header u-table-header-1">
              <tr style="height: 45px;">
                <th class="u-table-cell">Sl.No </th>
                <th class="u-table-cell">Question</th>

                <th class="u-table-cell">module</th>
              </tr>
            </thead>
            <?php
            include ('connection.php');
            mysqli_select_db($conn,"dbexam");
            $result=mysqli_query($conn,"Select wquestion,module from tbq1word where subid=$sub");
            $rows = mysqli_num_rows($result);
            // "<table border='1'><tr> <th>Fname</th> <th>Lname</th> <th>Contact</th><th>Collg</th><th>Email</th><th>Paswd</th><th>Address</th><th>Country</th></tr>";
            echo '<tbody class="u-table-alt-palette-1-light-3 u-table-body">';
            for ($j = 1 ; $j <= $rows ; ++$j)
            {
            $row = mysqli_fetch_row($result); 
            echo "<tr style='height: 65px;'>";  
            echo " <td class='u-table-cell' style='width:10px'>$j</td>";  
            for ($k = 0 ; $k < 2 ; ++$k) 
            echo " <td class='u-table-cell'>$row[$k]</td>"; 
            echo "</tr>"; 
            }
          }
          if($qtype=="brief")
            {
              ?>
                <thead class="u-palette-1-base u-table-header u-table-header-1">
              <tr style="height: 45px;">
                <th class="u-table-cell">Sl.No </th>
                <th class="u-table-cell">Question</th>

                <th class="u-table-cell">module</th>
              </tr>
            </thead>
            <?php
            include ('connection.php');
            mysqli_select_db($conn,"dbexam");
            $result=mysqli_query($conn,"Select bquestion,module from tbqbrief where subid=$sub");
            $rows = mysqli_num_rows($result);
            // "<table border='1'><tr> <th>Fname</th> <th>Lname</th> <th>Contact</th><th>Collg</th><th>Email</th><th>Paswd</th><th>Address</th><th>Country</th></tr>";
            echo '<tbody class="u-table-alt-palette-1-light-3 u-table-body">';
            for ($j = 1 ; $j <= $rows ; ++$j)
            {
            $row = mysqli_fetch_row($result); 
            echo "<tr style='height: 65px;'>";  
            echo " <td class='u-table-cell' style='width:10px'>$j</td>";  
            for ($k = 0 ; $k < 2 ; ++$k) 
            echo " <td class='u-table-cell'>$row[$k]</td>"; 
            echo "</tr>"; 
            }
          }
            
            ?>
            <!--
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
              <tr style="height: 65px;">
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
                <td class="u-table-cell">Description</td>
              </tr>-->
            </tbody>
          </table>
          <a href="viewQuestion.php" data-page-id="66040615" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">back</a>
      
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