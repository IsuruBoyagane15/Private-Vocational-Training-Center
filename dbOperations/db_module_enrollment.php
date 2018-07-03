<?php
 $server="localhost";
 $username="root";
 $password="";
 $dbname="students";
 $conn= new mysqli($server,$username,$password,$dbname);
 if($conn->connect_error){
  die("conection failed:".$conn->connect_error);
 }
 $index=(string)$_GET['index'];
 $index=trim($index);
 $sql="SELECT course_id FROM student_info WHERE student_index='$index' ";
 $result=$conn->query($sql);
 $row=mysqli_fetch_array($result);
 $id=$row[0];
 $id=(string)$id;
 $id=trim($id);
 $conn->close();
 $dbname="COURSES_DETAILS";
 $conn= new mysqli($server,$username,$password,$dbname);
 if($conn->connect_error){
  die("conection failed:".$conn->connect_error);
 }
$sql="SELECT * FROM $id";
$result=$conn->query($sql);
$all_property=array();
$output="";
$output .= '<table id="datatable">
       <tr>';
while($property=mysqli_fetch_field($result)){
   $output.='<td style="background-color:grey;color:white;">'.$property->name.'</td>';
   $output.='<td></td>';
   array_push($all_property,$property->name);
}
$output .= '</tr>';
while($row=mysqli_fetch_array($result)){
  $output .= '<tr>';
  foreach($all_property as $item){
    $output .= '<td>' .$row[$item].'</td>';
    $output.='<td><button class="btn" onclick="#">Enroll</td>';
  }

 }
     //$output .= '<button class="btn" onclick="#">'.$row2[0].'</a><br><br>'
$conn->close();
echo $output;
?>
