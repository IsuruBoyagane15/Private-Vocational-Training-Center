<?php
  // get provided username and encrypted password
  $provided_username = trim( $_POST['username'] );
  $provided_password = sha1( trim( $_POST['password'] ) );

  // get data from authentication DB
  $connection = mysqli_connect("localhost", "root", "", "authentication");
  $query = "SELECT * FROM user_staff WHERE username='$provided_username' AND password='$provided_password' ";
  $result = mysqli_query($connection, $query);
  mysqli_close($connection);

  session_start();

  //identify which type of staff member
  $type = substr($provided_username, -1);
  $redirect = "log-in.php";

  if($type == "L") {
    $redirect = "lecturer-profile.php";
  }else if($type == "H") {
    $redirect = "HoI.php";
  }else if($type == "R") {
    $redirect = "hr-page.php";
  }else if($type == "D") {
    $redirect = "director_board_executive.php";
  }

  //try to login
  if($row=mysqli_fetch_array($result)){
    $_SESSION['signed_in'] = true;
    $_SESSION['username'] = $provided_username;
    $connection->close();
    echo "Location:../".$redirect;
  }
  else{
    $_SESSION['flash_error']="invalid user name or password";
    $_SESSION['signed_in']=false;
    $_SESSION['username']=null;
    echo "invalid_usr/pass";
  }

?>
