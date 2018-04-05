<?php

  //load approved news item to the popup page
  $id = $_POST['id'];

  $connection = mysqli_connect('localhost', 'root', '', 'news');
  $query = "SELECT * FROM news WHERE id=$id";
  $result = mysqli_query($connection, $query);
  mysqli_close($connection);
  $row = mysqli_fetch_array($result);

  $output = ' <div class="popup_data"><h5>Name : ';
  $output .= (string)$row[2];
  $output .= ' </h5><h5>Description : ';
  $output .= (string)$row[5];
  $output .= ' </h5><h5>Added Date : ';
  $output .= (string)$row[6];
  $output .= ' </h5><h5>Expire Date : ';
  $output .= (string)$row[7];
  $output .= ' </h5><a class="preview_source" href=" ';
  $output .= (string)$row[4];
  $output .= ' "> ';
  $output .= (string)$row[3];
  $output .= ' </a></div> ';
  $output .= ' <div class="pop_btn_container"> ';
  $output .= ' <button class="popup_btn" id="popup_back">Back</button> ';
  $output .= ' </div> ';

  echo $output;

?>
