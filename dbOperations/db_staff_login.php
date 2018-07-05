<?php
  // get provided username and encrypted password
  $provided_username = trim( $_POST['username'] );
  $provided_password = sha1( trim( $_POST['password'] ) );

  // get data from authentication DB
  $connection = mysqli_connect("localhost", "root", "", "authentication");
  $query = "SELECT * FROM user_staff WHERE username='$provided_username' AND password='$provided_password' ";
  $result = mysqli_query($connection, $query);
  mysqli_close($connection);
  if($row=mysqli_fetch_array($result)){
    $_SESSION['signed_in']=true;
    $_SESSION['username']=$provied_username;
    $connection->close();
    header("Location:../lecturer-profile.php?index=$provided_username");
  }
  else{
    $connection->close();
    $_SESSION['flash_error']="invalid user name or password";
    $_SESSION['signed_in']=false;
    $_SESSION['username']=null;
    header("Location:../log-in.php");
}
?>
