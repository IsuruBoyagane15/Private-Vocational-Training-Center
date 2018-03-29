<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css\coursesaction.css">
  <link rel="stylesheet" href="css\styles_header.css">
  <link rel="stylesheet" href="css\styles_footer.css">
</head>

<body>
<?php include_once("inc/header.php"); ?>
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
$Field=$_POST["field"];
$Type=$_POST["coursetype"];
echo $Field;
echo $Type;
//echo "Connected successfully";
$sql="SELECT TRADE,COURSE_NAME,COURSE_TYPE,TYPE,ACCREDIT_LEVEL,DURATION,MEDIUM,REQUIRED_QUALIFICATION FROM COURSE_DETAILS  WHERE TRADE='$Field'";
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

?>


</body>
</html>
