<?php

$link = mysqli_connect("localhost", "root", "", "courses");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT trade FROM trades";
$trades = mysqli_query($link,$sql);


mysqli_close($link);


?>
