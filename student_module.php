<?php
  session_start();
  if(!isset($_SESSION['signed_in'])){
    if(!$_SESSION['signed_in']){
      header('location:index.php');
      exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles_header.css">
  <link rel="stylesheet" href="css/styles_footer.css">
  <link rel="stylesheet" href="css/navpannel.css">
  <link rel="stylesheet" href="css/subnav.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/modules.css">
  <link rel="stylesheet"  href="css/nestedcard.css">
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
  <input type="hidden" name="index" id="index" value=<?php echo $_SESSION['username']?>>
  <input type="hidden" name="mo_id" id="mo_id" value=<?php echo $_GET['module_id']?>>
  <div id="course" class="header"></div><br><br>
  <div style="overflow:hidden;">
  <div class="lightbox" style="width:40vw;padding:0px;float:left;margin-left:5vw;height:20vh;">
  <div id="module" class="header"></div>
  <div id="description"></div>
</div>

  <div id="lecture_notes" name="lecture_notes" class="lightbox" style="width:40vw;padding:0px;float:left;margin-left:5vw;">
     <div class="header" >Lecture Notes</div>
     <div id="notes"></div>
  </div>
  <div id="assignments" name="assignments" class="lightbox" style="width:40vw;padding:0px;float:right;margin-left:5vw;margin-right:8vw;margin-top:2vw;">
    <div class="header" >Assignments</div>
    <div id="assign"></div>
  </div>
</div>
  <?php include_once("inc/footer.php"); ?><br>

</body>
</head>
