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
  <link rel="stylesheet" href="css/user_account.css">
  <link rel="stylesheet" href="css/navpannel.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/subnav.css">
  <link rel="stylesheet" href="css/modules.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/load_modules.js" type="text/javascript"></script>
  <script src="js/load_student_profile.js"  type="text/javascript"></script>
  <script src="js/subnav.js" type="text/javascript"></script>
  <script src="js/load_terms.js" type="text/javascript"></script>

</head>
<body>
      <?php include_once("inc/header.php"); ?>
      <?php include_once("inc/navpannel.php");?>
      <?php
      include_once("inc/subnav.php");
      ?>
    <input type="hidden" name="index" id="index" value=<?php echo $_SESSION['username']?>></input>
    <div style='float:none;overflow:hidden'>
      <div class="lightbox" style="width:30%;margin-left:5vw;float:left;padding:0px;">
       <div  class="header" style="padding-top:2vh;">
          Course Modules</div>
       <div id="modulelist"></div>
     </div>
     <div class="lightbox" style="width:50%;float:left;margin-left:5vw;height:30vh;padding:0px;">
         <div class="header" id="course" style="padding-top:0.1vh;"></div>
         <div id="description"></div>
      </div>

   </div>
  <?php include_once("inc/footer.php"); ?><br>


</body>
</html>
