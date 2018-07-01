<?php

$link = mysqli_connect("localhost", "root", "", "news");

$query = "select * from news";
$result = mysqli_query($link,$query);



if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
