<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles_header.css">
  <link rel="stylesheet" href="css/styles_footer.css">
  <link rel="stylesheet" href="css/navpannel.css">
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/subnav.css">
  <link rel="stylesheet" href="css/modules.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/subnav.js" type="text/javascript"></script>
  <script src="js/load_student_profile.js"  type="text/javascript"></script>
  <script src="js/load_student_module.js" type="text/javascript"></script>
</head>
<body>
  <?php include_once("inc/header.php"); ?>
  <?php include_once("inc/navpannel.php");?>
  <?php
  $index=$_GET['index'];
  include_once("inc/subnav.php");
  ?>
  <input type="hidden" name="index" id="index" value=<?php echo $_GET['index']?>>
  <input type="hidden" name="mo_id" id="mo_id" value=<?php echo $_GET['module_id']?>>
  <div id="course" class="head"></div><br><br>

  <div id="module" class="head"><?php echo $_GET['module_id']?></div><br><br>

  <div id="lecture_notes" name="lecture_notes" class="card" style="width:60vw;">
     <div class="head" style="display:" >Lecture Notes</div>
     <div id="notes"></div>
  </div>
  <div id="assignments" name="assignments" class="card" style="width:60vw;">
    <div class="head" >Assignments</div>
    <div id="assign"></div>
  </div>


</body>
</head>
