<?php

$link = mysqli_connect("localhost", "root", "", "course_info");
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
$c_description = $_POST["c_description"];


$sql = "INSERT INTO courses (course_name, student_count, duration, trade, course_type, type, accredit_level, medium,required_qualification, description) VALUES ('$course_name', '$student_count', '$duration','$trade','$course_type','$type','$accredit_level','$medium','$required_qualification', '$c_description' )";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

session_start();
    $idrow = mysqli_query($link, "SELECT * FROM courses ORDER BY id DESC LIMIT 1");
		$id = mysqli_fetch_row($idrow);
		$_SESSION['id'] = $id[10];

mysqli_close($link);


?>
