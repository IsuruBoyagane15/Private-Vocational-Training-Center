<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="courses_details";

// Create connection
$index=trim($_GET['index']);
$module_id=$_GET['module_id'];
$module_id=(string)$module_id;
$time_taken=$_GET['time_taken'];
$ass_id=$_GET["ass_id"];
$ass_id=trim($ass_id);
$total=trim($_GET["total"]);
$correct=trim($_GET["correct"]);
$marks=trim($_GET["marks"]);
$is_late=$_GET['is_late'];
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT module_name FROM module_details WHERE module_id='$module_id'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$module_name=$row[0];
$module_name=trim($module_name);
$module_name=(string)$module_name;
$conn->close();
$dbname="configdata";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT tablename FROM config_createassignment WHERE id='$ass_id' AND module='$module_name'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$ass_name=$row[0];
$ass_name=trim($ass_name);
$conn->close();
$dbname="students";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT initial_name FROM student_info WHERE student_index='$index'";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$name=$row[0];
$conn->close();

$dbname="assignment_did_log";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO {$ass_name}(student_index,student_name,total_questions,correct_answers,marks,time_taken,is_late) VALUES ('$index','$name','$total','$correct','$marks','$time_taken','$is_late')";
$result=$conn->query($sql);
$conn->close();
$output="Success";
echo $output;
?>
