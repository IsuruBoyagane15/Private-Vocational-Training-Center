<?php

$link = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$course_id =  $_POST["student_id"];
$sql = "delete from modules where course_id = $student";


if(mysqli_query($link, $sql)){
	alert("Records deleted successfully.");
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
	

?>