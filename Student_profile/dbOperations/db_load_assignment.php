<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="assignments";

// Create connection
$module_id=$_GET['module_id'];
$module_id=trim($module_id);
$ass_id=$_GET["ass_id"];
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT assignment_name FROM {$module_id} where assignment_id={$ass_id}";
$result=$conn->query($sql);
$conn->close();
$output="";
$row=mysqli_fetch_array($result);
$output.=$row[0];
echo $output;
?>
