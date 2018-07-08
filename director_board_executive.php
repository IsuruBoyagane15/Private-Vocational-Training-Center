<?php                                     //access controlling
  session_start();
  if( !isset($_SESSION['signed_in']) ) {        //session not set
    header('location:index.php');
    exit();
  }else if( !$_SESSION['signed_in'] ){        //session set, but not signed_in
    header('location:index.php');
    exit();
  }else if( substr($_SESSION['username'], -1) != "D" ){        //session set, but not for HR
    header('location:index.php');
    exit();
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Director Board Executive</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_director_board_executive.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/navpannel.css">


    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/subnav.js" type="text/javascript"></script>


</head>
<body>

    <!--Including header file-->
    <?php
    include("inc/header.php");
    include_once("inc/navpannel.php");
    $index = trim($_SESSION['username']);
    include_once("inc/subnavstaff.php");
    ?>

    <input type = "hidden" name = "index" id = "index" value=<?php echo $index ?>>

    <nav class = "tasks">
    <a href="create_course.php">Create Course</a><br>
    </nav>



    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>

</body>
</html>
