<?php

echo $_POST["course_id"];
echo $_POST["course_id"];
$link = mysqli_connect("localhost", "root", "", "course_info");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$course_id =  $_POST["course_id"];
$sql = "delete from modules where course_id = $course_id";


if(mysqli_query($link, $sql)){
	alert("Records deleted successfully.");
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
