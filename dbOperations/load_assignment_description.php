<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="configdata";

// Create connection
$index=$_GET['index'];
$module_id=$_GET['module_id'];
$module_id=trim($module_id);
$ass_id=$_GET['ass_id'];
$ass_id=trim($ass_id);

$module_id=trim($module_id);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT description FROM config_createassignment WHERE  id='$ass_id'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$output='<div>'.$row[0].'</div>';
$conn->close();
echo $output;

 ?>
