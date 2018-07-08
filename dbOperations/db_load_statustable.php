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
$sql="SELECT tableName,no_of_attempts,late_allowed FROM config_createassignment WHERE  id='$ass_id'";
$result=$conn->query($sql);
$conn->close();
$row=mysqli_fetch_array($result);
$ass_name=trim($row[0]);
$attempts=$row[1];
$late_allowed=$row[2];

$dbname="assignment_did_log";
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM $ass_name where student_id='$index'";
$result=$conn->query($sql);
$output="";
$row4=mysqli_fetch_array($result);
$attempted=sizeof($row4);
if($attempted>0){
  $output.='<tr><th>Submission Status</th><td style="background-color:lightgreen">Submitted</td></tr>';
}
else{
  $output.='<tr><th>Submission Status</th><td>No attempt</td></tr>';
}
$sql="SELECT marks FROM $ass_name WHERE student_index='$index'";
$result=$conn->query($sql);

if(!empty($result)){
  $row=mysqli_fetch_array($result);
  $marks=max($row);
  $output.='<tr><th>Grade(Highest)</th><td>'.$marks.'%</td></tr>';
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
$sql="SELECT deadline FROM config_createassignment WHERE tablename='$ass_name'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$due_date=$row[0];
if($due_date!=0){
 $output.='<tr><th>Due date</th><td>'.$due_date.'</td></tr>';
}
else{
  $output.='<tr><th>Due date</th><td>No deadline</td></tr>';
}
$today = date("Y-m-d H:i:s");
$today=strtotime($today);
$due_date=strtotime($due_date);
//difference calculation----
if($due_date!=0){
 if($today<$due_date){
  $diff=$due_date-$today;
 }
 else{
  $diff=$today-$due_date;
 }
   $diff=$diff/86400;
   $days=floor($diff);
   $diff=24*($diff-$days);
   $hours=floor($diff);
   $diff=60*($diff-$hours);
   $minutes=floor($diff);
   $diff=60*($diff-$minutes);
   $seconds=floor($diff);
   $remaining='';
   if($days!=0){
     $remaining.=$days.' days,';
   }
   if($hours!=0){
     $remaining.=$hours.' hours,';
   }
   if($minutes!=0){
     $remaining.=$minutes.' minutes,';
   }
   if($seconds!=0){
       $remaining.=$seconds.' seconds ';
   }



 if($today<$due_date){

    $output.='<tr><th>Time Remaining</th><td>'.$remaining.' remaining </td></tr>';
 }
 else{
  if($attempted==0 and $late_allowed==1){
     $output.='<tr><th>Time Remaining</th><td style="background-color:#F08080;"> Assignment is overdue by '.$remaining.'</td></tr>';

  }
  else{
      $output.='<tr><th>Time Remaining</th><td > Assignment is overdue by '.$remaining.'</td></tr>';
  }
 }
}
else{
  $output.='<tr><th>Time Remaining</th><td>No deadline</td></tr>';
}
if($today<$due_date){
if($attempts>$attempted){
   $rem=$attempts-$attempted;
   $output.='<tr><th>No of attempts remaining</th><td>'.$rem.'</td></tr>';
 }
 else{
    $output.='<tr><th>No of attempts remaining</th><td>No attempts remaining</td></tr>';
 }
}
else{
    $output.='<tr><th>No of attempts remaining</th><td>This assignment no longer accepts submissions</td></tr>';
}
 $dbname="assignment_did_log";
 $conn=new mysqli($servername, $username, $password,$dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $sql="SELECT comments FROM $ass_name where student_id='$index'";
 $result=$conn->query($sql);
 $output1='';
 $i=1;
 while( $row=mysqli_fetch_array($result)){
  if(!empty($row[0])){
   $output1.='<p>Attempt '.$i.':'.$row[0].'</p>';
  }
   $i=$i+1;
 }
 $output.='<tr><th>Comments</th><td>'.$output1.'</td></tr>';
$conn->close();
echo $output;

 ?>
