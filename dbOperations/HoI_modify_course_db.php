<?php

$link = mysqli_connect("localhost", "root", "", "course_info");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$comment =$_POST["comment"];
$course_id = $_POST["course_id"];

$sql = "UPDATE 'courses' SET 'HoI_comments' = $comment WHERE id = $course_id";
if(mysqli_query($link, $sql)){
	echo "Records inserted successfully.";
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


?>