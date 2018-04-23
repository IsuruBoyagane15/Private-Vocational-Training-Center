<?php
$link = mysqli_connect("localhost", "root", "", "course_info");



if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$module_name =$_POST["module_name"] ;
$module_code =$_POST["module_code"] ;
$term =$_POST["term"] ;
$lecturer =$_POST["lecturer"] ;
session_start();
    $id = $_SESSION['id'] +1;


$sql = "INSERT INTO modules (module_name, module_code, term, lecturer, course_id) VALUES ('$module_name', '$module_code', '$term', '$lecturer', '$id' )";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



mysqli_close($link);

?>