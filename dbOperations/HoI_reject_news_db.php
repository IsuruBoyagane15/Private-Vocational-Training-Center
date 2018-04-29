<?php

$link = mysqli_connect("localhost", "root", "", "news");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id =  $_POST['id'];
$sql = "delete from temporary_news where id = $id";


if(mysqli_query($link, $sql)){
	alert("Records deleted successfully.");
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
