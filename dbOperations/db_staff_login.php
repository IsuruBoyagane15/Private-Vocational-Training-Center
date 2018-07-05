<?php
  // get provided username and encrypted password
  $provided_username = trim( $_POST['username'] );
  $provided_password = sha1( trim( $_POST['password'] ) );

  // get data from authentication DB
  $connection = mysqli_connect("localhost", "root", "", "authentication");
  $query = "SELECT * FROM table WHERE username_lec='{$provided_username}'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);
  mysqli_close($connection);



  $output .= (string)$row[0];

?>
