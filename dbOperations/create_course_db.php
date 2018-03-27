<?php

$link = mysqli_connect("localhost", "root", "", "courses");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST["course_name"]) && isset($_POST["student_count"]) && isset($_POST["duration"])){ //not working
    $course_name =$_POST["course_name"] ;
    $student_count = $_POST["student_count"];
    $duration = $_POST["duration"];


    $sql = "INSERT INTO courses (course_name, student_count, duration) VALUES ('$course_name', '$student_count', '$duration' )";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

mysqli_close($link);


$link = mysqli_connect("localhost", "root", "", "modules");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$module_name =$_POST["module_name"] ;
$module_code =$_POST["module_code"] ;
$semester =$_POST["semester"] ;
$lecturer =$_POST["lecturer"] ;
$credits =$_POST["credits"] ;

$sql = "INSERT INTO modules (module_name, module_code, semester, lecturer, credits) VALUES ('$module_name', '$module_code', '$semester', '$lecturer', '$credits' )";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);



?>