<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="assignments";

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
$sql="SELECT assignment_name FROM {$module_id} where assignment_id={$ass_id}";
$result=$conn->query($sql);
$conn->close();
$row=mysqli_fetch_array($result);
$ass_name=$row[0];
$ass_name=trim("ass_name");
$dbname="assignment_did_log";
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM {$ass_name} where student_index={$index}";
$result=$conn->query($sql);
$output="";

if(!empty($result)){
  $output.='<tr><th>Submission Status</th><td>Submitted for Grading</td></tr>';
}
else{
  $output.='<tr><th>Submission Status</th><td>Not submitted</td></tr>';
}
$sql="SELECT marks FROM {$ass_name} WHERE student_index={$index}";
$result=$conn->query($sql);
if(!empty($result)){
  $row=mysqli_fetch_array();
  $output.='<tr><th>Grade</th><td>'.$row[0].'</td></tr>';
}
else{
  $output.='<tr><th>Grade</th><td>Not graded</td></tr>';
}
$conn->close();
$dbname="assignments";
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT due_date FROM $module_id WHERE assignment_name='$ass_name'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$due_date=date_create($row[0]);
$due_date=date_format($due_date,"r");
$output.='<tr><th>Due date</th><td>'.$due_date.'</td></tr>';
$today = date("Y-m-d H:i:s");
$today=date_create($today);
$today=date_format($today,"r");
if($today<$due_date){
  $output.='<tr><th>Time Remaining</th><td>Still time remaining</td></tr>';
}
else{
  $output.='<tr><th>Time Remaining</th><td>assignment is overdue</td></tr>';
}
$output.='<tr><th>Last modified</th><td></td></tr>';
$output.='<tr><th>File Submissions</th><td></td></tr>';
$output.='<tr><th>Comments</th><td></td></tr>';
$conn->close();
echo $output;

 ?>
