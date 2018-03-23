<!-- load module names to the create assignment page -->
<!-- load module names to the note_upload popup -->

<?php
  $connection = mysqli_connect("localhost", "root", "", "test");
  $query = "SELECT modname FROM module_names";
  $result = mysqli_query($connection, $query);
  $output = '<select class="label" id="module_name">';

  while( $row = mysqli_fetch_array($result) ){
    $output .= ' <option value=" ';
    $output .= (string)$row[0];
    $output .= ' "> ';
    $output .= (string)$row[0];
    $output .= ' </option> ';
  }

  mysqli_close($connection);

  echo $output;
?>
