<?php
  //load previous approved news items added by HR

  $connection = mysqli_connect('localhost', 'root', '', 'news');
  $query = "SELECT id,name FROM news WHERE id_key='hr'";
  $result = mysqli_query($connection, $query);
  mysqli_close($connection);
  $output = '';

  if($result){
    while( $row = mysqli_fetch_array($result) ) {
      $output .= ' <li><a href="#" name=" ';
      $output .= $row[0];
      $output .= ' "> ';
      $output .= $row[1];
      $output .= ' </a></li> ';
    }

    echo $output;
  }

  if( $output == '' ) {
    echo "<p class='no_data'>...currently no data...</p>";
  }

?>
