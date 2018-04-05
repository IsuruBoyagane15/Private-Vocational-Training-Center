<?php
  //deselect a not qualified student applicant

  $id = $_POST['id'];

  $conn = mysqli_connect('localhost', 'root', '', 'applicantdetails');
  $query = "DELETE FROM student_details WHERE id='{$id}'";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);

  if($result) {
    echo "student dismissed successfully!";
  }else{
    echo "unable to dismiss this student..";
  }

?>
