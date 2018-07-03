<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="courses_details";

// Create connection
$module_id=$_GET['module_id'];
$module_id=(string)$module_id;
$ass_id=$_GET["ass_id"];
$ass_id=trim($ass_id);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT module_name FROM module_details WHERE module_id='$module_id'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$module_name=$row[0];
$module_name=trim($module_name);
$module_name=(string)$module_name;
$conn->close();
$dbname="configdata";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT tablename FROM config_createassignment WHERE id='$ass_id'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$ass_name=$row[0];
$ass_name=trim($ass_name);
$conn->close();
$dbname="assignments";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT question FROM  {$ass_name}";
$result=$conn->query($sql);
$sql="SELECT option1 FROM {$ass_name}";
$option1=$conn->query($sql);
$opt1=array();
while($row=mysqli_fetch_array($option1)){
  array_push($opt1,$row[0]);
}
$sql="SELECT option2 FROM {$ass_name}";
$option2=$conn->query($sql);
$opt2=array();
while($row=mysqli_fetch_array($option2)){
   array_push($opt2,$row[0]);
}
$sql="SELECT option3 FROM {$ass_name}";
$option3=$conn->query($sql);
$opt3=array();
while($row=mysqli_fetch_array($option3)){
   array_push($opt3,$row[0]);
}
$sql="SELECT option4 FROM {$ass_name}";
$opt4=array();
$option4=$conn->query($sql);
while($row=mysqli_fetch_array($option4)){
   array_push($opt4,$row[0]);
}
$sql="SELECT correct_option FROM {$ass_name}";
$cor_opt=array();
$correctoption=$conn->query($sql);
while($row=mysqli_fetch_array($correctoption)){
  array_push($cor_opt,$row[0]);
}
$output="";
$count=1;
$output.='<table class="dtable">';
while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
    $i=$count-1;
    $output.='<tr>';
    $output.='<td>';
    $output.='<div class="question" >'.$count.'.'.$row[0].'</div>'.'<br><br>';
    $output.='<input type="hidden" id="'.$i.'" value="'.$cor_opt[$i].'">';
    $output.='<input type="radio" name="'.$i.'" class="option" value="option1">'.$opt1[$i].'<br>';
    $output.='<input type="radio" name="'.$i.'" class="option" value="option2">'.$opt2[$i].'<br>';
    $output.='<input type="radio" name="'.$i.'" class="option" value="option3">'.$opt3[$i].'<br>';
    $output.='<input type="radio" name="'.$i.'" class="option" value="option4">'.$opt4[$i].'<br><br>';
    $output.='</td></tr>';
    $count=$count+1;
}
$output.='</table>';
$conn->close();
echo $output;


?>
