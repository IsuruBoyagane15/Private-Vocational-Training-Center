<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="css\courses.css">
   <link rel="stylesheet" href="css\styles_header.css">
   <link rel="stylesheet" href="css\styles_footer.css">
   <link rel="stylesheet" href="css/navpannel.css">
   <link rel="stylesheet" href="css/card.css">

   <script src="js/jquery-3.3.1.js"></script>
   <script src="js/load_trade.js" type="text/javascript"></script>
   <script src="js/load_courses.js" type="text/javascript"></script>
   <script src="js/navpannel.js" type="text/javascript"></script>



   <title>courses</title>

 </head>
 <body>

   <?php include_once("inc\header.php"); ?>
   <?php include_once("inc/navpannel.php"); ?>


  <div class="lightbox" style="margin-top:3vh;width:20vw;padding:0px;" >
    <p class="header" style="font-family:sans-serif;text-align:center;margin-top:0px;padding-top:1vh;color:white;">Find Your Course</p>
    <form action="coursesaction.php" method="post">
      <label style="margin-left:2vw;" class="lable" for="field">Field</lablel>
      <select style="width:80%;margin-left:2vw;height:4vh;" id="field" name="field">
         <!-- <option value="Automobile repair and maintainance">Automobile repair and maintainance</option>
         <option value="Building and construction">Building and construction</option>
         <option value="Agriculture plantation and livestock">Agriculture plantation and livestock</option>
         <option value="Electrical and Electronic and telecommunication">Electrical and Electronic and telecommunication</option>
         <option value="Jem and jwellery">Jem and jwellery</option> -->

      </select>
      <label class="lable" style="margin-left:2vw;" for="coursetype">Course Type</label>
      <select style="width:80%;margin-left:2vw;height:4vh;" id="coursetype" name="coursetype" >
        <option value="NVQ">NVQ</option>
        <option value="NON-NVQ">Non-NVQ</option>
      </select><br>
      <input class="button" style="width:30%;margin-left:4vw;" type="Submit" value="Submit">
    </form>
   </div>
   <div class="newsbox">
    <?php// include_once("inc\newsbox.php");?>
   </div>

   <div id="coursetable" class="lightbox" style="width:90%"</div>


<?php include_once("inc/footer.php"); ?><br>;

 </body>
</html>
