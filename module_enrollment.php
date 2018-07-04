<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Module Enrollment</title>
    <meta name="viewport"  charset="utf-8" content="width=device-width,initial-scale=1">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/load_student_profile.js"  type="text/javascript"></script>
    <script src="js/load_module_enrollment.js" type="text/javascript"></script>
    <script src="js/navpannel.js" type="text/javascript"></script>
    <script src="js/subnav.js" type="text/javascript"></script>

    <link rel="stylesheet" href="css\courses.css">
    <link rel="stylesheet" href="css\styles_header.css">
    <link rel="stylesheet" href="css\styles_footer.css">
    <link rel="stylesheet" href="css/navpannel.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/courses.css">
  </head>
  <body>

    <?php include_once("inc\header.php"); ?>
    <?php include_once("inc/navpannel.php"); ?>
    <?php   $index=$_GET['index'];
      include_once("inc/subnav.php");
    ?>
    <input type="hidden" name="index" id="index" value=<?php echo $_GET['index']?>>
    <div id="course" class="head"></div><br><br>
    <div id="modules"></div>



  </body>
</html>
<html>
