<?php

$link = mysqli_connect("localhost", "root", "", "news");

$id = $_POST["id"];
echo $id;

$query = "SELECT id, id_key, name, file_name, file_path, description, added_date, remove_date FROM temporary_news WHERE id = '$id'";
$result = mysqli_query($link,$query);
$data = mysqli_fetch_array($result);
$id_key = $data[1];
$name = $data[2];
$file_name = $data[3];
$file_path = $data[4];
$description = $data[5];
$added_date = $data[6];
$remove_date = $data[7];


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO news (id,id_key,name,file_name, file_path, description, added_date,   remove_date) VALUES
('$id', '$id_key', '$name', '$file_name', '$file_path', '$description', '$added_date', '$remove_date')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.sdfsfd";


    $sql2 = "delete from temporary_news where id = $id";

    if(mysqli_query($link, $sql2)){
      echo "deleted";
    }
    else{
      echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
    }

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>
