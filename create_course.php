<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_create_courses.css">

</head>
<body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>
    
    <!--navigation panel-->
    <nav class="navigate">
      <ul>
        <li><a href="index.php" class="selected">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="log-in.php">Log In</a></li>
      </ul>
    </nav>
    <div>
  <form action="add_modules.php" method = "post">
    <label for="fname">Course Name</label><br>
    <input type="text" id="fname" name="name" placeholder="Enter Course Name"><br>

    <label for="student_count">Number of Students</label>
    <input type="number" id="student_count" name="student_count" placeholder ="Enter Number of Students">

    <label for="duration">Duration (Semesters)</label><br>
    <input type="number" id="duration" name="duration" placeholder = "Enter Number of semesters"><br>
  
    <input type="submit" value="Submit">
  </form>
</div>
    
   
    <div class="body_navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="log-in.php">Log In</a></li>
      </ul>
    </div>
        

    <?php include_once("inc/footer.php"); ?>

</body>
</html>
