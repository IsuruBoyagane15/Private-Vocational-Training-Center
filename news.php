<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VTI-News</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/styles_footer.css">

</head>
<body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>

    <!--navigation panel-->
    <nav class="navigate">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="log-in.php" class="selected">Log In</a></li>
        </ul>
    </nav>

    <div id="news_vacancies">
      <h2 align="center" color="purple"><marquee direction="left"><font face="Algerian">! Welcome to News Page !</font></marquee></h2>
      <p >&emsp;&emsp;Vocational training, also known as Vocational Education and Training (VET) and Career and Technical Education (CTE),
      provides job-specific technical training for work in the trades. These programs generally focus on providing students
      with hands-on instruction, and can lead to certification, a diploma or certificate.</p><br>
      <p>&emsp;&emsp; The academic staff should be capable of paving path to the students through the modules. We are looking for qualified and
      trained academic staff members for our institute. </p>
      <div id="vacancies_link"><br><br>
        <a href="regapplication.php">Click here </a>to apply for the academic staff vacancies. <br><br>
        <a href="studentapplication.php">Click here </a>to apply for the courses. <br><br>
      </div>

    </div>


      <div class="slider">
        <marquee behavior="scroll" direction="up">
            <img src="img/slider/training_5.jpg" alt="Natural" />
            <img src="img/slider/training_1.jpg" alt="Natural" />
          </marquee>
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
