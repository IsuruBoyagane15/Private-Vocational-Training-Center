<?php

$link = mysqli_connect("localhost", "root", "", "course_info");

$query = "select * from courses";
$result = mysqli_query($link,$query);



if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
