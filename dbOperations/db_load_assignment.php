<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="configdata";

// Create connection
$module_id=$_GET['module_id'];
$module_id=trim($module_id);
$ass_id=$_GET["ass_id"];
$ass_id=trim($ass_id);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT assignment_name FROM config_createassignment WHERE id='$ass_id'  AND is_deleted=0";
$result=$conn->query($sql);
$conn->close();
$output="";
$row=mysqli_fetch_array($result);
$output.='<div class="lightbox" style="width:90%;margin-left:2vw;height:1vh;">'.$row[0].'</div>';
echo $output;
?>
