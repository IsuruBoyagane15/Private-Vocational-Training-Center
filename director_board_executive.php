<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_director_board_executive.css">

</head>
<body>

    <!--Including header file-->
    <?php
    include("inc/header.php");

    ?>
    <nav class="navigate">
      <ul>
        <li><a href="index.php" class="selected">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="">#to profile</a></li>
      </ul>
    </nav>

    <nav class = "tasks">
    <a href="create_course.php">Create Course</a><br>
    </nav>
    <!--Include footer file-->



    <?php include_once("inc/footer.php"); ?>

</body>
</html>
