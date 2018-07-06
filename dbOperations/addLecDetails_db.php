<?php

// enter user entered prospective lecturer details to the DB

$conn = mysqli_connect("localhost", "root", "", "applicantdetails");

$course = $_POST['course'];
$name_ini = $_POST['name_ini'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$nic = $_POST['nic'];
$email = $_POST['email'];           //****************
$mobile = $_POST['mobile'];
$home = $_POST['home'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$year_ol = $_POST['year_ol'];
$year_al = $_POST['year_al'];
$index_al = $_POST['index_al'];
$stream = $_POST['stream'];
$degree = $_POST['degree'];
$medium = $_POST['medium'];

$query = "INSERT INTO lecturer_details (course,name_with_initials,fullname,address,nic,mobile,home,email,date_of_birth,age,gender,year_of_ol,year_of_al,index_al,stream,degree,medium) VALUES
('$course','$name_ini','$fullname','$address','$nic','$mobile','$home','$email','$dob','$age','$gender','$year_ol','$year_al','$index_al','$stream','$degree','$medium')";

$result = mysqli_query($conn, $query);

mysqli_close($conn);

if($result) {
  echo "Registration successful!. Please wait until further notice." ;
}else{
  echo "Problem updating database!!";
}

?>
