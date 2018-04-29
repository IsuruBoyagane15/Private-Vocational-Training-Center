<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Vocational Training Institute</title>

     <!--css styles-->
     <link rel="stylesheet" href="css/styles_header.css">
     <link rel="stylesheet" href="css/styles_footer.css">
     <link rel="stylesheet" href="css/styles_HoI_approve_news.css">

 	<script src="js/jquery-3.3.1.js"></script>
     <script src="js/HoI_approve_news_buttons.js" type="text/javascript"></script>


 </head>
 <body>

     <!--Including header file-->
     <?php include_once("inc/header.php"); ?>
     <?php include_once("dbOperations/HoI_approve_news_db.php"); ?>

     <nav class="navigate">
       <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="news.php">News</a></li>
         <li><a href="courses.php">Courses</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="HoI.php">#to profile</a></li>
       </ul>
     </nav>

 	<div class="confirmBox">
       <div class="message"></div>
       <span class="button yes">Yes</span>
       <span class="button no">No</span>
     </div>

 	<div class="container">
 		<ul class = "news">
 			<?php
 				while($row = mysqli_fetch_assoc($result)){
 			?>

 			<div class = "news_container">
 				<li>
          <div class="news_items" style="display: block;">
            <div class="basic_data">
              <label class = "title">ID</label>
              <br>
              <div class = "value_box">
                <label class = "ids"><?php echo $row["id"] ?></label>
              </div>
              <label class = "title">Name</label>
              <br>
              <div class = "value_box">
                <label class = "values"><?php echo $row["name"] ?></label>
              </div>
              <br>
              <label class = "title">Description</label>
              <br>
              <div class = "value_box">
                <label class = "values"><?php echo $row["description"] ?></label>
              </div>
              <br>
              <label class = "title">Added Date</label>
              <br>
              <div class = "value_box">
                <label class = "values"><?php echo $row["added_date"] ?></label>
              </div>
              <br>
              <label class = "title">Expire Date</label>
              <br>
              <div class = "value_box">
                <label class = "values"><?php echo $row["remove_date"] ?></label>
              </div>
              <br>

              <form>
                <input type="button" value="View Media" class = "news_source" onclick="window.location.href='<?php echo $row["file_path"] ?>'" />
              </form>
            </div>

            <div class="button_container">
              <button class="approve">Approve</button>
              <button class="reject">Reject</button>
            </div>
           </div>
 				</li>
 			</div>
 			<?php
 				}
 			?>
 		</ul>

 		<div class="def_buttons">
 			<button class = "def" id = "finish">Finish Now</button>
 		</div>
 	</div>


     <!--Include footer file-->
     <?php include_once("inc/footer.php"); ?>

 </body>
 </html>
