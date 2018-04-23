<?php

$conn = mysqli_connect("localhost", "root", "", "applicantdetails");

$course = $_POST['course'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$nic = $_POST['nicno'];
$mobile = $_POST['mob'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$year_o/l = $_POST['year_ol'];
$index_o/l = $_POST['indexno_1'];
$maths = $_POST['mathematics'];
$english = $_POST['english'];
$science = $_POST['science'];
$ict = $_POST['ict'];
$year_a/l = $_POST['year_al'];
$index_a/l = $_POST['indexno_2'];
$stream = $_POST['stream'];


//////////////


$query = "INSERT INTO student_details (selected_course,name,address,nic,mob_no,dob,gender,yearof_ol,index_ol,
  maths,english,science,ict,yearof_al,index_al,stream,) VALUES
($course,$fullname,$address,$nic,$mobile,$dob,$gender,$year_ol,$indexno_1,$mathematics,$english,
  $science,$ict,$year_al,$indexno_2,$stream)";
$result = mysqli_query($conn, $query);

if(!$result) {
  echo "Registration successful!" ;
}

mysqli_close($conn);

?>
