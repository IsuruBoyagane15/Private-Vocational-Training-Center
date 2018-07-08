<?php

$link = mysqli_connect("localhost", "root", "", "students");
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $id = $_POST['id'];
  $zeros = 4-strlen("$id");
  $year = substr(strval($_POST['selected_date']),2,2);

  $student_index = $year.str_repeat("0",$zeros)."$id";
  $course_id = $_POST['course_id'];
  $nic = $_POST['nic'];
  $initial_name = $_POST['name_with_initials'];
  $fullname = $_POST['fullname'];
  $medium = $_POST['medium'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $birthday = $_POST['date_of_birth'];
  $age = $_POST['age'];
  $mobile = $_POST['mobile'];
  $home = $_POST['home'];
  $email = $_POST['email'];

  $sql = "INSERT INTO student_info (student_index, course_id, nic, initial_name, fullname, medium, address, gender, birthday, age, mobile, home, email)
   VALUES ('$student_index', '$course_id', '$nic', '$initial_name', '$fullname', '$medium', '$address', '$gender', '$birthday', '$age', '$mobile', '$home', '$email' )";


  if(mysqli_query($link, $sql)){
  	echo "Records inserted successfully.";

    $link3 = mysqli_connect("localhost", "root", "", "authentication");
    if($link3 === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $password = sha1($student_index);
    $sql3 = "INSERT INTO user (username, password_sha1)  VALUES ('$student_index','$password')";
    if(mysqli_query($link3, $sql3)){

      echo "password was added";

    } else{
      echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link2);
    }

    mysqli_close($link3);



    $link2 = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");
    if($link2 === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql2 = "DELETE FROM selected_student_details where id = $id";

    if(mysqli_query($link2, $sql2)){

      echo "record delelted successfully";

    } else{
      echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link2);
    }

    mysqli_close($link2);




  } else{
  	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }




mysqli_close($link);


?>
