<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="configdata";

// Create connection
$index=$_GET['index'];
$module_id=$_GET['module_id'];
$module_id=trim($module_id);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT assignment_name,tablename,id FROM config_createassignment WHERE module_code='$module_id' AND is_deleted=0";
$result=$conn->query($sql);
$output="";
$conn->close();
while($row=mysqli_fetch_array($result)){
  $output.='<li><a href="assignment.php?assignment_id='.$row[2].'&&index='.$index.'&&module_id='.$module_id.'" class="mod_link" ;">'.$row[0].'</a></div><br>';
}
echo $output;
?>
