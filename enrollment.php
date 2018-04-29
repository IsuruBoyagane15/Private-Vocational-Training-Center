<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles_header.css">
  <link rel="stylesheet" href="css/styles_footer.css">
  <link rel="stylesheet" href="css/navpannel.css">
  <link rel="stylesheet" href="css/subnav.css">
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/enrollment.css">

  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/subnav.js" type="text/javascript"></script>
  <script src="js/load_student_profile.js"  type="text/javascript"></script>
  <script src="js/load_enrollment.js" type="text/javascript"></script>
  <script src="js/load_modules_to_student_profile.js" type="text/javascript"></script>

</head>
<body>
  <?php include_once("inc/header.php"); ?>
  <?php include_once("inc/navpannel.php");?>
  <?php
  $index=$_GET['index'];
  include_once("inc/subnav.php");
  ?>
  <input type="hidden" name="index" id="index" value=<?php echo $_GET['index']?>>
  <div id="course" class="head"></div><br><br><br>

  <div id="enrollmenttable"></div>
  <?php include_once("inc/footer.php"); ?><br><br>




</body>
</html>
