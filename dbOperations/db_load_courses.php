<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="COURSES_DETAILS";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$sql="SELECT COURSE_ID,TRADE,COURSE_NAME,COURSE_TYPE,TYPE,ACCREDIT_LEVEL,DURATION,MEDIUM,REQUIRED_QUALIFICATION FROM COURSE_DETAILS ";
$result=$conn->query($sql);
$all_property=array();
$output="";
$output .= '<table class=datatable>
       <tr>';
while($property=mysqli_fetch_field($result)){
  $output .='<td style="background-color:grey;color:white;">'.$property->name.'</td>';
  array_push($all_property,$property->name);
}
$output .= '</tr>';

while($row=mysqli_fetch_array($result)){
  $output .= '<tr>';
  foreach($all_property as $item){
    $output .= '<td>' .$row[$item].'</td>';
  }
  $courseid=$row["COURSE_ID"];
  $output .='<td><button class="button" onclick=window.location.href="studentapplication.php?courseid='.urlencode($courseid).'">Apply</td>';
}
$output.='</table>';
$conn->close();
echo $output;

?>
