<?php

session_start();
if( !isset($_SESSION['signed_in'])){
  if(!$_SESSION['signed_in']){
    header('location:index.php');
    exit();
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_HoI.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/navpannel.css">

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/subnav.js" type="text/javascript"></script>

</head>
<body>


<?php

    include_once("inc/header.php");
    include_once("inc/navpannel.php");
    $index = trim($_SESSION['username']);
    include_once("inc/subnavstaff.php");
?>
    <input type = "hidden" name = "index" id = "index" value=<?php echo $index ?>>

    <div class = "tasks">
        <ul>
            <li><a href="HoI_new_courses.php">New Courses</a></li>
            <li><a href="HoI_registration.php">Student Registration</a></li>
            <li><a href="HoI_recruitment.php">Staff Recruitment</a></li>
            <li><a href="HoI_approve_news.php">Approve News</a></li>
            <li><a href="HoI_remove_news.php">Remove News</a></li>
        </ul>
    </div>



    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>

</body>
</html>
