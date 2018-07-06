<?php

$link = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");

$query = "select * from selected_lecturer_details";
$result = mysqli_query($link,$query);



if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
