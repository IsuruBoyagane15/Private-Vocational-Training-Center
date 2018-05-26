<?php

    $link = mysqli_connect("localhost", "root", "", "courses_details");


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
    $course_id = $_POST["course_id"];

    $zeros = 3-strlen("$course_id");
    $id = "C".str_repeat("0",$zeros)."$course_id";
    echo $id;


    $sql = "INSERT INTO course_details (id,trade,course_name,course_type, type, accredit_level, duration,   medium,required_qualification,student_count,) VALUES ('$id', '$trade', '$course_name', '$course_type', '$type', '$accredit_level', '$duration', '$medium', '$required_qualification', '$student_count')";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);


?>
