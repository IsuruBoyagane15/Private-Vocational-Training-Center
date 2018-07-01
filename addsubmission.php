<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles_header.css">
  <link rel="stylesheet" href="css/styles_footer.css">
  <link rel="stylesheet" href="css/navpannel.css">
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/addsubmission.css">
  <link rel="stylesheet" href="css/subnav.css">
  <link rel="stylesheet" href="css/popup-box.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/load_student_profile.js"  type="text/javascript"></script>
  <script src="js/subnav.js" type="text/javascript"></script>
  <script src="js/add_submission.js" type="text/javascript"></script>

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
  <input type="hidden" name="assignment_id" id="assignment_id" value=<?php echo $_GET['ass_id']?>>
  <input type="hidden" id="late" value=<?php echo true ?>>
  <div class="popupbox" id="confirmbox">
      <div id="messege"></div>
      <button class="popupbutton" id="buttoncancel">cancel</button>
      <button class="popupbutton" id="buttonconfirm" >confirm</button>
  </div>
  <div class="submission_window" id="assignment">
  </div>
  <br>
  <button class="butn" id="submit">Finsh attempt</button>
  <div id="res"></div>

  <?php include_once("inc/footer.php"); ?>
</body>
</html>
