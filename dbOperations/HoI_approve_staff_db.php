<?php

$link = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$student_index = $year.str_repeat("0",$zeros)."$id";



$id =  $_POST["id"];
$zeros = 6-strlen("$id");
$sid = str_repeat("0",$zeros)."$id"."L";


$query = "SELECT id, course, name_with_initials, address, nic, gender, date_of_birth, mobile, email, selected_date FROM selected_lecturer_details where id = '$id'";
$result = mysqli_query($link, $query);
$list = mysqli_fetch_array($result);

//echo (string)$list[4];

$course = $list[1];
$name = $list[2];
$address = $list[3];
$nic = $list[4];
$gender = $list[5];
$date_of_birth = $list[6];
$mobile = $list[7];
$email = $list[8];
$selected_date = $list[9];
echo $nic;
echo $course;
echo $mobile;
echo $email;
echo $selected_date ;


mysqli_close($link);

$link3 = mysqli_connect("localhost", "root", "", "staff");
if($link3 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO staff_details (staff_id, name, course, address, nic, gender, date_of_birth, mobile, email, selected_date) VALUES
('$sid','$name', '$course', '$address', '$nic','$gender', '$date_of_birth', '$mobile', '$email', '$selected_date')";


if(mysqli_query($link3, $sql)){

  $link2 = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");
  if($link2 === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $sql2 = "delete FROM selected_lecturer_details where id = '$id'";
  if(mysqli_query($link2, $sql2)){
    echo "Records deleted successfully.";
  }
  mysqli_close($link2);



  $link3 = mysqli_connect("localhost", "root", "", "authentication");
  if($link3 === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $password = sha1($sid);
  $sql3 = "INSERT INTO user (username, password)  VALUES ('$sid','$password')";
  if(mysqli_query($link3, $sql3)){
    echo "password was added";
  }
  else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link3);
  }
  mysqli_close($link3);


} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link3);
?>
