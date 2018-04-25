<!--load assignment details into the preview table-->

<?php
  $tablename = $_POST['tabname'];
  

  $connection = mysqli_connect("localhost", "root", "", "assignments");
  $query = "SELECT * FROM {$tablename}";
  $result = mysqli_query($connection, $query);

  $output = ' <tr><th>No</th><th>Question</th><th>Option1</th><th>Option2</th>
    <th>Option3</th><th>Option4</th><th>Correct Option</th></tr> ';

  while( $row = mysqli_fetch_array($result) ){
    $output .= ' <tr> ';
    $output .= ' <td> ';
    $output .= (string)$row[0];
    $output .= ' </td> ';
    $output .= ' <td> ';
    $output .= (string)$row[1];
    $output .= ' </td> ';
    $output .= ' <td> ';
    $output .= (string)$row[2];
    $output .= ' </td> ';
    $output .= ' <td> ';
    $output .= (string)$row[3];
    $output .= ' </td> ';
    $output .= ' <td> ';
    $output .= (string)$row[4];
    $output .= ' </td> ';
    $output .= ' <td> ';
    $output .= (string)$row[5];
    $output .= ' </td> ';
    $output .= ' <td> ';
    $output .= (string)$row[6];
    $output .= ' </td> ';
    $output .= ' </tr> ';
  }

  mysqli_close($connection);

  echo $output;
?>
