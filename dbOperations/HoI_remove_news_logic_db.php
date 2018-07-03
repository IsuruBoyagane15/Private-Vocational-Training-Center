<?php

$link = mysqli_connect("localhost", "root", "", "news");

$id = $_POST["id"];
echo $id;

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "delete from news where id = $id";

if(mysqli_query($link, $sql)){
    echo "Records deleted successfully,fdgb";


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>
