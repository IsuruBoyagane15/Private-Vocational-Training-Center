<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles_header.css">
  <link rel="stylesheet" href="css/styles_footer.css">
  <link rel="stylesheet" href="css/navpannel.css">
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/subnav.css">
  <link rel="stylesheet" href="css/assignment.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/subnav.js" type="text/javascript"></script>
  <script src="js/load_student_profile.js"  type="text/javascript"></script>
  <script src="js/load_assignment.js" type="text/javascript"></script>
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
  <input type="hidden" name="assignment_id" id="assignment_id" value=<?php echo $_GET['assignment_id']?>>
  <div id="course" class="head"></div><br><br>
  <div id="module" class="head"></div><br><br>
  <div id="ass"  class="assignment">
     <div id="assignment" class="assignmenthead"></div><br>
     <div class="asscontainer" >
       <div class="head">Description</div>
       <div id="description"></div>
     </div><br>
     <div id="statushead" class="assignmenthead">Submission Status</div>
     <div class="asscontainer">
         <table id="statustable"></table>
     </div><br><br>
     <div class="asscontainer" id="butt"><br><br>

     </div>

  </div>
</body>
