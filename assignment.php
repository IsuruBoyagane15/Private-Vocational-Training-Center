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

     <div class="lightbox" style="padding:0px;margin-left:20vw;height:40vh;">

       <div class="lable" style="margin-left:2vw;margin-top:2vw;">Assignment name</div>
       <div id="assignment" ></div><br>
       <div class="lable" style="margin-left:2vw;margin-top:2vw;">Description</div>
       <div id="description" ></div>
     </div><br>
     <div class="lightbox" style="margin-left:20vw;">
         <table id="statustable" style="width:100%;"></table>
     </div><br><br>
     <div  id="butt"><br><br>

     </div>
<?php include_once("inc/footer.php"); ?><br>;
</body>
</html>
