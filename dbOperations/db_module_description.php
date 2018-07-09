<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="courses_details";
  $conn = new mysqli($servername, $username, $password,$dbname);

  // Create connection
  $module_id=$_GET['module_id'];
  $module_id=trim($module_id);
  $sql="SELECT module_description FROM module_details WHERE module_id='$module_id'";
  $result=$conn->query($sql);
  $conn->close();
  $row=mysqli_fetch_array($result);
  $output='';
  $output.=$row[0];
  echo $output;
?>
