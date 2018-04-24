<?php
$server="localhost";
$username="root";
$password="";
$dbname="COURSES_DETAILS";
$conn= new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
 die("conection failed:".$conn->connect_error);
}
$mo_id=(string)$_GET['module_id'];
$mo_id=trim($mo_id);
$sql="SELECT module_name FROM module_details WHERE module_id='$mo_id'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$output=$row[0];
$conn->close();
echo $output;








 ?>
