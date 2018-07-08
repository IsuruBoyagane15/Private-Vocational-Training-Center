<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="courses_details";
$conn = new mysqli($servername, $username, $password,$dbname);

// Create connection
$index=$_GET['index'];
$module_id=$_GET['module_id'];
$module_id=trim($module_id);
$sql="SELECT module_name FROM module_details WHERE module_id='$module_id'";
$result=$conn->query($sql);
$conn->close();
$row=mysqli_fetch_array($result);
$module_name=trim($row[0]);
$dbname="configdata";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT assignment_name,tableName,id FROM config_createassignment WHERE module='Introduction to plumbing' AND is_deleted=0";
$result=$conn->query($sql);
$output="";
$conn->close();
while($row=mysqli_fetch_array($result)){
  $output.='<div class="lightbox" style="margin-left:3%;width:90%;height:5vh;margin-top:1vh;margin-bottom:1vh;"><a href="assignment.php?assignment_id='.$row[2].'&&index='.$index.'&&module_id='.$module_id.'" class="mod_link" ;">'.$row[0].'</a></div>';
}
echo $output;
?>
