<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles_header.css">
  <link rel="stylesheet" href="css/styles_footer.css">
  <link rel="stylesheet" href="css/user_account.css">
  <link rel="stylesheet" href="css/navpannel.css">
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/subnav.css">
  <link rel="stylesheet" href="css/modules.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/load_modules.js" type="text/javascript"></script>
  <script src="js/load_student_profile.js"  type="text/javascript"></script>
  <script src="js/subnav.js" type="text/javascript"></script>
  <script src="js/load_terms.js" type="text/javascript"></script>

</head>
<body>
      <?php session_start();?>
      <?php include_once("inc/header.php"); ?>
      <?php include_once("inc/navpannel.php");?>
      <?php
      $index=trim($_GET['index']);
      include_once("inc/subnav.php");
      ?>
      <input type="hidden" name="index" id="index" value=<?php echo $_GET['index']?>>
      <div id="course" class="head"></div><br><br>
      <div class="card" width="60%">
       <div class="head" >
          Course Modules
       </div>

       <div id="modules" class="container">

          <div id="modulelist"></div>
       </div>
     </div>

     <?php include_once("inc/footer.php"); ?><br><br>


</body>
</html>
