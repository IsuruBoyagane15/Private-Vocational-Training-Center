<?php

$link = mysqli_connect("localhost", "root", "", "active_course_info");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	
   
    $course_name =$_POST["course_name"] ;
    $student_count = $_POST["student_count"];
    $duration = $_POST["duration"];
    $trade = $_POST["trade"];
    $course_type = $_POST["course_type"];
    $type = $_POST["type"];
    $accredit_level = $_POST["accredit_level"];
    $medium = $_POST["medium"];
    $required_qualification = $_POST["required_qualification"];
    $id = $_POST["course_id"];

		
    $sql = "INSERT INTO courses (course_name, student_count, duration, trade, course_type, type, accredit_level, medium,required_qualification,id) VALUES ('$course_name', '$student_count', '$duration','$trade','$course_type','$type','$accredit_level','$medium','$required_qualification', '$id', )";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

mysqli_close($link);


?>