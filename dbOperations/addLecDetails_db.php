<!-- enter user entered prospective lecturer details to the DB -->

<?php

$conn = mysqli_connect("localhost", "root", "", "applicantdetails");

$course = $_POST['course'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$nic = $_POST['nic'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$year_ol = $_POST['year_ol'];
$index_ol = $_POST['index_ol'];
$maths = $_POST['maths'];
$english = $_POST['english'];
$science = $_POST['science'];
$ict = $_POST['ict'];
$year_al = $_POST['year_al'];
$index_al = $_POST['index_al'];
$stream = $_POST['stream'];
$degree = $_POST['degree'];

$query = "INSERT INTO lecturer_details (course,fullname,address,nic,mobile,date_of_birth,gender,year_of_ol,index_ol,
  maths,english,science,ict,year_of_al,index_al,stream,degree) VALUES
('$course','$fullname','$address','$nic','$mobile','$dob','$gender','$year_ol','$index_ol','$maths','$english',
  '$science','$ict','$year_al','$index_al','$stream','$degree')";

$result = mysqli_query($conn, $query);

if(!$result) {
  echo "Registration successful!" ;
}

mysqli_close($conn);

?>
