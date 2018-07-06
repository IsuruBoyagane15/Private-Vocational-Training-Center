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
$sql="SELECT tablename FROM config_createassignment WHERE  id='$ass_id'";
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
$dbname="configdata";
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT deadline FROM config_createassignment WHERE assignment_name='$ass_name'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$due_date=date_create($row[0]);
$due_date=date_format($due_date,"Y/m/d H:i:s");
$output.='<tr><th>Due date</th><td>'.$due_date.'</td></tr>';
$today = date("Y-m-d H:i:s");
$today=date_create($today);
$today=date_format($today,"Y/m/d H:i:s");
if($today<$due_date){
  $timeleft=date_diff($today,$due_date);
  $timeleft->format("%R%a days");
  $daysleft=round((($timeleft/24)/60)/60);
  $minutesleft=round($timeleft-$daysleft*24*60);
  $output.='<tr><th>Time Remaining</th><td>'.$time_left.'minutes  </td></tr>';
}
else{
  $due_date=date_create($row[0]);
  $today=date_create($today);
  $timeleft=date_diff($due_date,$today);

  $output.='<tr><th>Time Remaining</th><td> Assignment is overdue by  '.$timeleft->format("%d Days").'</td></tr>';
}
$output.='<tr><th>No of attempts remaining</th><td></td></tr>';
$output.='<tr><th>File Submissions</th><td></td></tr>';
$output.='<tr><th>Comments</th><td></td></tr>';
$conn->close();
echo $output;

 ?>
