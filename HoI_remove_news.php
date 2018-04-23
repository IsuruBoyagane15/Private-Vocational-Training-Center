<?php

$link = mysqli_connect("localhost", "root", "", "news");

$query = "select * from news";
$result = mysqli_query($link,$query);
					 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
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
    <link rel="stylesheet" href="css/styles_HoI_remove_news.css">
	  
	<script src="js/jquery-3.3.1.js"></script>
    <script src="js/HoI_remove_news_buttons.js" type="text/javascript"></script>


</head> 
<body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>
	
    <nav class="navigate">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="HoI.php">HoI</a></li>
      </ul>
    </nav>
    
	<div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>
	
	
	<div class="container">
		<ul class = "news">
			<div class = "student_container">
				<li><h4>News</h4>
						<?php
							while($row = mysqli_fetch_assoc($result)){
						?>	
							//<td><?php echo($row['id']);?></td>
							

						<?php
							}
						?>

									
				</li>
			</div>
			
		</ul>
		
		<div class="def_buttons">
			<button class = "def" id = "approve">Approve</button>
			<button class = "def" id = "cancel">Cancel</button>
		</div>
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

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>

</body>
</html>