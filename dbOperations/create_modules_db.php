<?php
$link = mysqli_connect("localhost", "root", "", "course_info");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$module_name =$_POST["module_name"] ;
$description =$_POST["description"] ;
$lecturer =$_POST["lecturer"] ;
session_start();
    $id = $_SESSION['id'] +1;

$sql = "INSERT INTO modules (module_name, description, lecturer, course_id) VALUES ('$module_name', '$description', '$lecturer', '$id' )";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

?>
