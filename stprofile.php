<!DOCTYPE html>
<html>
<head>
    <script src="js/load_stprofile.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/navpannel.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/profile.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/subnav.js" type="text/javascript"></script>
    <script src="js/load_stprofile.js" type="text/javascript"></script>

</head>
<body>
  <?php session_start();?>
  <?php include_once("inc/header.php"); ?>
  <?php include_once("inc/navpannel.php");?>
  <?php
        include_once("inc/subnav.php");
  ?>
  <div class="popupbox" id="popupbox1" style="display:none;">
    <form action="dbOperations/db_change_profilepicture.php" method="POST" id="changer" enctype="multipart/form-data">
      <input id="chooser" name="chooser" type="file"></input>
      <button class="button" id="back1" style="display:inline-block;width:40%;">Cancel</button>
      <button type="submit" class="button" style="display:inline-block;width:40%;">Upload</button>
   </form>
 </div>
   <div class="popupbox" id="popupbox2" style="display:none;height:55vh;top:10vh;">
     <form action="dbOperations/db_change_password.php" method="POST" id="pass_change" enctype="multipart/form-data">
       <label class="lable" for="password" style="color:white">Current Password</label>
       <input id="current_password" name="password" type="password" style="margin-bottom:0vh;padding:0px;height:6vh;">
       <label class="lable" for="password" style="color:white;">New Password</label>
       <input  id="new_password" name="newpassword" type="password" style="margin-bottom:0vh;padding:0px;height:6vh;">
       <span class="error" style="margin-top:0vh;margin-left:0.3vw;">include 8 charactors,at lest one highercase letter,at least onelowercase letter and at least one special charactor</span><br>
       <label class="lable" for="confirmpassword" style="color:white;">Confirm Password</label>
       <input  id="reent_new_password" name="confirmpassword" type="password"  style="margin-bottom:0vh;padding:0px;height:6vh;">
       <span class="error" style="margin-top:0vh;margin-left:0.3vw;";>Confirm password does not match with password</span><br><br>
       <button class="button" id="back2" style="display:inline-block;width:40%;float:left;">Cancel</button>
       <button  id="change_pass" class="button" style="display:inline-block;width:40%;float:right">Confirm</button>
    </form>
   </div>

  <div id="test"></div>
  <div class="row">
    <div class="column">
      <div class="card">
        <div id="image"></div>
        <div class="container">
          <p id="name"></p>
           <button class="button"  id="picchange">change profile picture</button>
           <button class="button" id="butt"><img src="icons/password.svg" style="width:6%;color:white;padding:0px;">Change Password</button>
        </div>
      </div>
    </div>
  </div>
  <div id="profdata" class="lightbox" style="margin-left:10.5vw;margin-right:20vw;overflow:hidden">

  </div>
</div id="output"></div>

  <?php include_once("inc/footer.php"); ?><br><br>
</body>
</html>
