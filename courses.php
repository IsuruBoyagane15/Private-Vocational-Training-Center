<!DOCTYPE html>
<html>
 <head>
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="css\courses.css">
   <link rel="stylesheet" href="css\styles_header.css">
   <link rel="stylesheet" href="css\styles_footer.css">

   <title>courses</title>

 </head>
 <body>

   <?php include_once("inc\header.php"); ?>
   <?php// include_once("inc\iconbar.php");?>



   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="COURSES_DETAILS";

   // Create connection
   $conn = new mysqli($servername, $username, $password,$dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   //echo "Connected successfully";
   $sql="SELECT TRADE,COURSE_NAME,COURSE_TYPE,TYPE,ACCREDIT_LEVEL,DURATION,MEDIUM,REQUIRED_QUALIFICATION FROM COURSE_DETAILS ";
   $result=$conn->query($sql);
   $all_property=array();

   echo '<table class="datatable">
          <tr>';
   while($property=mysqli_fetch_field($result)){
     echo '<td style="background-color:grey;color:white;">'.$property->name.'</td>';
     array_push($all_property,$property->name);
   }
   echo '</tr>';

   while($row=mysqli_fetch_array($result)){
     echo '<tr>';
     foreach($all_property as $item){
       echo '<td>' .$row[$item].'</td>';
     }
     echo '<td><button class="btn" onclick=window.location.href="studentapplication.php">Apply</td>';
   }
   $conn->close();
  ?>
  <div class="container" >
    <h2 style="color:white;font-family:sans-serif;">Find Your Course</h2>
    <form action="coursesaction.php" method="post">
      <label class="lable" for="field">Field</lablel>
      <select  id="field" name="field" >
         <option value="Automobile repair and maintainance">Automobile repair and maintainance</option>
         <option value="Building and construction">Building and construction</option>
         <option value="Agriculture plantation and livestock">Agriculture plantation and livestock</option>
         <option value="Electrical and Electronic and telecommunication">Electrical and Electronic and telecommunication</option>
         <option value="Jem and jwellery">Jem and jwellery</option>
      </select>
      <label class="lable" for="coursetype">Course Type</label><br>
      <select id="coursetype" name="coursetype" style="width:24%;">
        <option value="NVQ">NVQ</option>
        <option value="Non-NVQ">Non-NVQ</option>
      </select><br>
      <input class="btn" type="Submit" value="Submit">
    </form>
   </div>
   <div class="newsbox">
    <?php// include_once("inc\newsbox.php");?>
   </div>



 </body>
</html>
