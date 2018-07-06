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
  <div class="popupbox" id="popupbox" style="display:none;">
    <form action="dbOperations/db_change_profilepicture.php" method="POST" id="changer" enctype="multipart/form-data">
      <input id="chooser" name="chooser" type="file"></input>
      <button class="button" id="back" style="display:inline-block;width:40%;">Cancel</button>
      <button type="submit" class="button" style="display:inline-block;width:40%;">Upload</button>
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
        </div>
      </div>
    </div>
  </div>
  <div id="profdata" class="lightbox">

  </div>

  <?php include_once("inc/footer.php"); ?><br><br>
</body>
</html>
