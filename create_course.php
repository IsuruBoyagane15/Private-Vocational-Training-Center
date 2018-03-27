<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>


    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_create_course.css">
      
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/insert_module.js" type="text/javascript"></script>
    <script src="js/create_course_buttons.js" type="text/javascript"></script>

</head>
<body>


    <?php include_once("inc/header.php"); ?>


    <nav class="navigate">
      <ul>
          <li><a href="index.php" class="selected">Home</a></li>
          <li><a href="news.php">News</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="director_board_executive.php">#to profile</a></li>
          
      </ul>
    </nav>
    
    <div class = "basic_data">
      <form action="dbOperations/create_course_db.php " method = "post">
        <label>Course Name</label><br>
        <input type="text" id="name" name="name" placeholder="Enter Course Name"><br>

        <label>Number of Students</label><br>
        <input type="number" id="student_count" name="student_count" placeholder ="Enter Number of Students"><br>

        <label>Duration (Semesters)</label><br>
        <input type="number" id="duration" name="duration" placeholder = "Enter Number of semesters"><br>
          
      </form>
    </div>
    
    
    

    <div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>
     
    <div class="container_modules">
      <nav class="questions">
        <ul id="que_list">

        </ul>
      </nav>
    </div>
    

    <div class="container_buttons">
      <button type="submit" name="cancel" class="assign_button" id="cancel">Cancel</button>
      <button type="submit" name="new-question" class="assign_button" id="new-question">Add New Module</button>
      <button type="submit" name="complete" class="assign_button" id="done">Create Course</button>
    </div>


    <?php include_once("inc/footer.php"); ?>
  </body>
</html>
