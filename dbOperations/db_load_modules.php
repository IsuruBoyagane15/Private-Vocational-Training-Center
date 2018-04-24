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
while($property=mysqli_fetch_field($result)){
   array_push($all_property,$property->name);
}
$output="";
$output .= '<div>';
foreach($all_property as $item){
   $sql="SELECT $item FROM $id";
   $result=$conn->query($sql);
   $output.='<div id='.$item.'>';
   $output.='<h3 class="head">'.$item.'</h3>';
   while($values=mysqli_fetch_array($result)){
     $mo_id=$values[0];
     $sql="SELECT module_name FROM module_details WHERE module_id='$mo_id'";
     $result2=$conn->query($sql);
     $row2=mysqli_fetch_array($result2);
     $output .= '<a class="mod_link" href="student_module.php?module_id='.$mo_id.'&&index='.$index.'">'.$row2[0].'</a><br><br>';

  }
  $output.="</div>";
}
$output .="</div>";
$conn->close();
echo $output;
?>
