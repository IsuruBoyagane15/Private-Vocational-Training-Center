<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="configdata";
$index=$_POST['index'];
$ass_id=$_POST['ass_id'];
$module_id=$_POST['module_id'];
$index=trim($index);
$ass_id=trim($ass_id);
$module_id=trim($module_id);
$total_questions=trim($_POST['total_questions']);
$correct_answers=trim($_POST['correct_answers']);
$marks=trim($_POST['marks']);
$timetaken=trim($_POST['time_taken']);
$is_late=trim($_POST['is_late']);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT tablename FROM config_createassignment WHERE id={$ass_id}";
$result=$conn->query($sql);
$row=mysqli_fetch_array($result);
$ass_name=$row[0];
$conn->close();
$dbname="assignment_did_log";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO {$ass_name}(student_index,student_name,total_questions,correct_answers,marks,timetaken,is_late) VALUES($index,$student_name,$total_questions,$correct_answers,$marks,$timetaken,$islate)";
$conn->query($sql);
$output='<div class="messege">Submission Sucessful"</div>';
echo $output;
?>
