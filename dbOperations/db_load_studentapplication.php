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
$courseid=$_GET["courseid"];
$courseid=(string)$courseid;
$courseid=trim($courseid);
$sql="SELECT TRADE,COURSE_NAME,COURSE_TYPE,TYPE FROM COURSE_DETAILS WHERE COURSE_ID='$courseid'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$trade=$row[0];
$coursename=$row[1];
$coursetype=$row[2];
$nvqtype=$row[3];
$output="";
$output .='<label for="trade" >Trade</label>';
$output .='<input type="text" name="trade" id="trade" value="';
$output .=$trade;
$output .='" style="width:75%"><br><br>';

$output .='<label for="course_name" >Course Name</label>';
$output .='<input type="text" name="course_name" id="course_name" value="';
$output .=$coursename;
$output.='"style="width:75%"><br><br>';

$output .='<label for="course_type" >Course Type</label>';
$output .='<input type="text" name="course_type" id="course_type" value="';
$output .=$coursetype;
$output.='"style="width:75%"><br><br>';



$output .='<label for="nvq_type" >Nvq Type</label>';
$output .='<input type="text" name="nvq_type" id="nvq_type" value="';
$output .=$nvqtype;
$output.='"style="width:75%"><br><br>';


echo $output;
$conn->close();
?>
