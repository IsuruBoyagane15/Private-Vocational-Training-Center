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
while($property=mysqli_fetch_field($result)){
   array_push($all_property,$property->name);
}
foreach($all_property as $item){
     $item=(string)$item;
     $output.='<a onclick="return hideterms();">'.$item.'</a>';
}
$conn->close();
echo $output;
?>
