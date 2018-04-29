<?php

$link = mysqli_connect("localhost", "root", "", "students");
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $student_index = $data['id'];
  $zeros = 4-strlen("$student_index");
  $year = substr(strval($data['selected_date']),2,2);

  $student_id =  $_POST["student_id"];
  $student_index = $year.str_repeat("0",$zeros)."$student_index";
  $course_id = $data['course_id'];
  $nic = $data['id'];
  $initial_name = $data['name_with_initials'];
  $fullname = $data['fullname'];
  $medium = $data['medium'];
  $address = $data['address'];
  $gender = $data['gender'];
  $birthday = $data['date_of_birth'];
  $age = $data['age'];
  $mobile = $data['mobile'];
  $home = $data['home'];
  $email = $data['email'];

  $sql = "select * from selected_student_details where id = 8";   //WRONG


  if(mysqli_query($link, $sql)){
  	echo "Records deleted successfully.";
  } else{
  	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }




mysqli_close($link);


?>
