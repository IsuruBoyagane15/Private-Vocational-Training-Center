<?php
$server="localhost";
$username="root";
$password="";
$dbname="students";
$conn= new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
  die("conection failed:".$conn->connect_error);
}

$index=(string)$_GET['index'];
$index=trim($index);
$sql="SELECT course_id FROM student_info WHERE student_index='$index'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$courseid=$row[0];
$conn->close();
$sql="SELECT description FROM course_details WHERE COURSE_ID='$courseid'";
$dbname="COURSES_DETAILS";
$conn= new mysqli($server,$username,$password,$dbname);
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$description = $row[0];
echo $description;
?>
