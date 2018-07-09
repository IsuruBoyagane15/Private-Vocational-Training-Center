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
$sql="SELECT tablename,deadline,late_allowed,no_of_attempts FROM config_createassignment where id='$ass_id'";
$result=$conn->query($sql);
$conn->close();
$row=mysqli_fetch_array($result);
$deadline=$row[1];
$attempts=$row[3];
$deadline=strtotime($deadline);
$today = date("Y-m-d H:i:s");
$today=strtotime($today);
$late_allowed=$row[2];
$ass_name=$row[0];
$dbname="assignment_did_log";
$conn=new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM $ass_name where student_id='$index'";
$result=$conn->query($sql);
$output="";
$row=mysqli_fetch_array($result);
$conn->close();
if(!empty($row)){
 $count=sizeof($row);

if($today<$deadline  and $count<$attempts){
  $output.='<br><br><button  style="width:40vw;margin-left:30vw;" onclick=window.location.href="addsubmission.php?module_id='.urlencode($module_id).'&&index='.urlencode($index).'&&ass_id='.urlencode($ass_id).'" >Add Submisson</button>';
}
else if($today>$deadline and $count<$attempts and $late_allowed){
    $output.='<br><br><button  style="width:40vw;margin-left:30vw;" onclick=window.location.href="addsubmission.php?module_id='.urlencode($module_id).'&&index='.urlencode($index).'&&ass_id='.urlencode($ass_id).'" >Add Submisson</button>';
}
else if($deadline==date("0000-00-00 00:00:00")){
    $output.='<br><br><button  style="width:40vw;margin-left:30vw;" onclick=window.location.href="addsubmission.php?module_id='.urlencode($module_id).'&&index='.urlencode($index).'&&ass_id='.urlencode($ass_id).'" >Add Submisson</button>';
}
else{
    ////
}
}
else if($deadline==date("0000-00-00 00:00:00") ){
    $output.='<br><br><button  style="width:40vw;margin-left:30vw;" onclick=window.location.href="addsubmission.php?module_id='.urlencode($module_id).'&&index='.urlencode($index).'&&ass_id='.urlencode($ass_id).'" >Add Submisson</button>';
}
else{
  $output.='<br><br><button  style="width:40vw;margin-left:30vw;" onclick=window.location.href="addsubmission.php?module_id='.urlencode($module_id).'&&index='.urlencode($index).'&&ass_id='.urlencode($ass_id).'" >Add Submisson</button>';
}


echo $output;
?>
