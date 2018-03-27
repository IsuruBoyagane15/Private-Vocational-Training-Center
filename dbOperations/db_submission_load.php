<?php
  $tablename = trim( $_POST['tabname'] );

  $connection = mysqli_connect("localhost", "root", "", "assignment_did_log");
  $query = "SELECT * FROM {$tablename}";
  $result = mysqli_query($connection, $query);
  mysqli_close($connection);

  $output = ' <tr><th>Student ID</th><th>Student Name</th><th>Total Questions</th>
              <th>Correct Answers</th><th>Marks</th><th>Time Taken</th>
              </tr> ';

  while( $row = mysqli_fetch_array($result) ) {

    //late submissions in red color
    if( $row[6] == 1 ) {
      $output .= ' <tr><td class="td_late"> ';
      $output .= (string)$row[0];
      $output .= ' </td><td class="td_late"> ';
      $output .= (string)$row[1];
      $output .= ' </td><td class="td_late"> ';
      $output .= (string)$row[2];
      $output .= ' </td><td class="td_late"> ';
      $output .= (string)$row[3];
      $output .= ' </td><td class="td_late"> ';
      $output .= (string)$row[4];
      $output .= ' </td><td class="td_late"> ';
      $output .= (string)$row[5];
      $output .= ' </td></tr> ';
    }else {        //if not late
      $output .= ' <tr><td> ';
      $output .= (string)$row[0];
      $output .= ' </td><td> ';
      $output .= (string)$row[1];
      $output .= ' </td><td> ';
      $output .= (string)$row[2];
      $output .= ' </td><td> ';
      $output .= (string)$row[3];
      $output .= ' </td><td> ';
      $output .= (string)$row[4];
      $output .= ' </td><td> ';
      $output .= (string)$row[5];
      $output .= ' </td></tr> ';
    }
  }

  echo $output;
?>
