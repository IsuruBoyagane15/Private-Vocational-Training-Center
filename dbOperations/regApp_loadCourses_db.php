<?php
  // load courses to the regapplication page from DB

  $connection = mysqli_connect("localhost", "root", "", "courses_details");
  $query = "SELECT COURSE_NAME,COURSE_TYPE FROM course_details";
  $result = mysqli_query($connection, $query);
  mysqli_close($connection);
  $output = '';

  while( $row = mysqli_fetch_array($result) ) {
    $output .= '<option value= "';
    $output .= (string)$row[0];
    $output .= '">';
    $output .= (string)$row[0];
    $output .= '</option>';
  }

  echo $output;

?>
