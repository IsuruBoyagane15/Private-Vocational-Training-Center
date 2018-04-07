<!DOCTYPE html>
<html>
 <head>
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="css\courses.css">
   <link rel="stylesheet" href="css\styles_header.css">
   <link rel="stylesheet" href="css\styles_footer.css">

   <script src="js/jquery-3.3.1.js"></script>
   <script src="js/load_trade.js" type="text/javascript"></script>
   <script src="js/load_courses.js" type="text/javascript"></script>

   <title>courses</title>

 </head>
 <body>

   <?php include_once("inc\header.php"); ?>
   <?php// include_once("inc\iconbar.php");?>




  <div class="container" >
    <h2 style="color:white;font-family:sans-serif;">Find Your Course</h2>
    <form action="coursesaction.php" method="post">
      <label class="lable" for="field">Field</lablel>
      <select  id="field" name="field" >
         <!-- <option value="Automobile repair and maintainance">Automobile repair and maintainance</option>
         <option value="Building and construction">Building and construction</option>
         <option value="Agriculture plantation and livestock">Agriculture plantation and livestock</option>
         <option value="Electrical and Electronic and telecommunication">Electrical and Electronic and telecommunication</option>
         <option value="Jem and jwellery">Jem and jwellery</option> -->

      </select>
      <label class="lable" for="coursetype">Course Type</label><br>
      <select id="coursetype" name="coursetype" style="width:24%;">
        <option value="NVQ">NVQ</option>
        <option value="NON-NVQ">Non-NVQ</option>
      </select><br>
      <input class="btn" type="Submit" value="Submit">
    </form>
   </div>
   <div class="newsbox">
    <?php// include_once("inc\newsbox.php");?>
   </div>
   <div id="coursetable"></div>


 </body>
</html>
