<?php

$link = mysqli_connect("localhost", "root", "", "staff");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$staff_id =  $_POST["staff_id"];
echo $staff_id;
$name =  $_POST["name"];
echo $name;

$sql = "INSERT INTO staff_details (staff_id, name) values ('$staff_id','$name')";


if(mysqli_query($link, $sql)){

  $link2 = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");
  if($link2 === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $staff_id =  $_POST["staff_id"];
  $sql2 = "delete FROM selected_staff_details where staff_id = $staff_id";

  if(mysqli_query($link2, $sql2)){
    echo "Records deleted successfully.";
  }
  mysqli_close($link2);

} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
