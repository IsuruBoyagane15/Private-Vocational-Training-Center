<?php
  //deselect a not qualified lecture post applicant

  $id = $_POST['id'];

  $conn = mysqli_connect('localhost', 'root', '', 'applicantdetails');
  $query = "DELETE FROM lecturer_details WHERE id='{$id}'";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);

  if($result) {
    echo "lecture applicant dismissed successfully!";
  }else{
    echo "unable to dismiss this lecture applicant..";
  }

?>
