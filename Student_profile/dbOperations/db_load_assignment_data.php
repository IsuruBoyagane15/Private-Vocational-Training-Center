<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="assignments";

// Create connection
$index=$_GET['index'];
$module_id=$_GET['module_id'];
$module_id=trim($module_id);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT assignment_name,assignment_id FROM {$module_id}";
$result=$conn->query($sql);
$output="";
while($row=mysqli_fetch_array($result)){
  $output.='<a href="assignment.php?assignment_id='.$row[1].'&&index='.$index.'&&module_id='.$module_id.'" class="mod_link" ;">'.$row[0].'</a>';
}
echo $output;
?>
