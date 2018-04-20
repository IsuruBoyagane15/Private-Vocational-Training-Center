<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="COURSES";

// Create connection
$conn2 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
$sql="SELECT TRADE FROM trades";
$result=$conn2->query($sql);
$output="";

while($row=mysqli_fetch_array($result)){
   $output .= " <option value=' ";
   $output .= (string)$row[0];
   $output .= " '> ";
   $output .= (string)$row[0];
   $output .= " </option> ";
   //$output .= "<option>opt1</option>";
}



echo $output;

 ?>
