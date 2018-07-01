<?php

$link = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$staff_id =  $_POST["staff_id"];
echo $staff_id;
$name =  $_POST["name"];
echo $name;

$sql = "Insert into staff_details (staff_id, name) values ($staff_id,$name)";


if(mysqli_query($link, $sql)){
	alert("Records deleted successfully.");
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
