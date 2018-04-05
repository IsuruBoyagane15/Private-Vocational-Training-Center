<?php
  //load student applicants

  $conn = mysqli_connect('localhost', 'root', '', 'applicantdetails');
  $query = "SELECT id,course,name_with_initials FROM student_details";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  $output = '';

  if($result) {
    while( $row = mysqli_fetch_array($result) ) {
      $output .= ' <li><a href="#" name=" ';
      $output .= $row[0];
      $output .= ' "> ';
      $output .= $row[1];
      $output .= ' | ';
      $output .= $row[2];
      $output .= ' </a></li> ';
    }
    echo $output;
  }

  if( $output == '' ) {
    echo "<p class='no_data'>...currently no applicants...</p>";
  }

?>
