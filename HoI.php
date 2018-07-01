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

</head>
<body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>

    <nav class="navigate">
      <ul>
        <li><a href="index.php" class="selected">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="HoI.php">#to profile</a></li>
      </ul>
    </nav>

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
