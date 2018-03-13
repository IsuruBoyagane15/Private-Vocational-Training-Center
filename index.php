<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_index.css">
    <link rel="stylesheet" href="css/styles_footer.css">

    <!--jquery 3.3.1-->
    <script src="js/jquery-3.3.1.js"></script>

    <!--jquery slider-->
    <script src="js/slider.js"></script>

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


    <!--image slider-->
    <div class="slider">
      <ul class="slides">
        <li class="slide"><img src="img/slider/img_institute.jfif"></li>
        <li class="slide"><img src="img/slider/training_1.jpg"></li>
        <li class="slide"><img src="img/slider/training_2.jpg"></li>
        <li class="slide"><img src="img/slider/training_4.jpg"></li>
        <li class="slide"><img src="img/slider/training_5.jpg"></li>
        <li class="slide"><img src="img/slider/img_group.jpg"></li>
        <li class="slide"><img src="img/slider/img_institute.jfif"></li>
      </ul>
    </div>

    <!--basic quote-->
    <div class="quote">
      <p>The youth needs to be empowered, and it can be done through good education and vocational training ...</p>
    </div>

    <!--Introduction block-->
    <div class="para_box">
      <h3>Welcome to Vocational Training Institute</h3>
      <p>&emsp;&emsp;Vocational training, also known as Vocational Education and Training (VET) and Career and Technical Education (CTE),
      provides job-specific technical training for work in the trades. These programs generally focus on providing students
      with hands-on instruction, and can lead to certification, a diploma or certificate. Students may prepare for jobs such as
      auto repair, plumbing, retail, etc.</p>
      <p>&emsp;&emsp;Vocational training can also give applicants an edge in job searches, since
      they already have the certifiable knowledge they need to enter the field. A student can receive vocational training
      either in high school, a community college or at trade schools for adults.</p>
    </div>

    <!--Second Para block-->
    <div class="para_box">
      <h3>Second Para Box</h3>
      <p>&emsp;&emsp;first paragraph.</p>
      <p>&emsp;&emsp;second paragraph.</p>
    </div>

    <!--Third Para block-->
    <div class="para_box">
      <h3>Third Para Box</h3>
      <p>&emsp;&emsp;first paragraph.</p>
      <p>&emsp;&emsp;second paragraph.</p>
    </div>

    <!--Body navigation Panel-->
    <div class="body_navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="log-in.php">Log In</a></li>
      </ul>
    </div>

    <!--Including footer file-->
    <?php include_once("inc/footer.php"); ?>

  </body>
</html>
