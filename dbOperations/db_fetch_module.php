<!-- Adding relevent module codes to the left panel -->

<?php

  //select relavent course
  $connection = mysqli_connect("localhost", "root", "", "staff");
  $id = $_POST["id"];
  $query = "SELECT staff_id,course FROM staff_details WHERE staff_id='$id'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);
  $course = (string)$row[1];
  mysqli_close($connection);

  //get course id
  $connection = mysqli_connect("localhost", "root", "", "courses_details");
  $query = "SELECT COURSE_NAME,COURSE_ID FROM course_details WHERE COURSE_NAME='$course'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);
  $course_id = $row[1];
  mysqli_close($connection);

  //select module id's from relevent course table
  $connection = mysqli_connect("localhost", "root", "", "courses_details");
  $query = "SELECT * FROM {$course_id}";
  $result = mysqli_query($connection, $query);
  $output = '';
  if( !empty($course_id) ){
    while( $row = mysqli_fetch_array($result) ){
      $output .= ' <li><a href="#" data-id=" ';
      $output .= (string)$row[0];
      $output .= ' " class="mod_link"> ';
      $output .= (string)$row[0];
      $output .= ' </a></li> ';
    }
  }
  mysqli_close($connection);

  echo $output;

?>
