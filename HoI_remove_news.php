<?php                                     //access controlling
  session_start();
  if( !isset($_SESSION['signed_in']) ) {        //session not set
    header('location:index.php');
    exit();
  }else if( !$_SESSION['signed_in'] ){        //session set, but not signed_in
    header('location:index.php');
    exit();
  }else if( substr($_SESSION['username'], -1) != "H" ){        //session set, but not for HR
    header('location:index.php');
    exit();
  }
?>

<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>HoI - Remove News</title>

     <!--css styles-->
     <link rel="stylesheet" href="css/styles_header.css">
     <link rel="stylesheet" href="css/styles_footer.css">
     <link rel="stylesheet" href="css/styles_HoI_remove_news.css">
     <link rel="stylesheet" href="css/subnav.css">
     <link rel="stylesheet" href="css/navpannel.css">

 	   <script src="js/jquery-3.3.1.js"></script>
     <script src="js/HoI_remove_news_buttons.js" type="text/javascript"></script>
     <script src="js/subnav.js" type="text/javascript"></script>


 </head>
 <body>

     <!--Including header file-->
<?php include_once("inc/header.php");
     include_once("inc/navpannel.php");
     $index = trim($_SESSION['username']);
     include_once("inc/subnavstaff.php");
     include_once("dbOperations/HoI_remove_news_db.php");
?>

  <input type = "hidden" name = "index" id = "index" value=<?php echo $index ?>>



 	<div class="confirmBox">
       <div class="message"></div>
       <span class="button yes">Yes</span>
       <span class="button no">No</span>
     </div>

 	<div class="container">
    <h5>News Items</h5>
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
              <label class = "title">Added Date & Time</label>
              <br>
              <div class = "value_box">
                <label class = "values"><?php echo $row["added_date"] ?></label>
              </div>
              <br>
              <label class = "title">Expire Date & Time</label>
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
              <button class="remove">Remove News Item</button>

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
