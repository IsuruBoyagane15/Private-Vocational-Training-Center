<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="authentication";
  session_start();
  $user_name=trim($_SESSION['username']);


  $current_pass = $_POST['current_pass'];
  $new_pass = $_POST['new_pass'];

  if( isset($_SESSION['signed_in']) ) {     //signed in
    $id = $_SESSION['username'];

    $connection = mysqli_connect('localhost','root','','authentication');
    $query = "SELECT * FROM user WHERE username='{$id}'";
    $result = mysqli_query($connection, $query);
    $record = mysqli_fetch_array($result);
    $pass_fromDB = $record[1];
    $current_pass_sha1 = sha1($current_pass);
    $new_pass_sha1 = sha1($new_pass);
    if( $pass_fromDB == $current_pass_sha1 ){     //change the password
      $query2 = "UPDATE user SET password_sha1='{$new_pass_sha1}' WHERE username='{$id}'";
      $result2 = mysqli_query($connection, $query2);
      mysqli_close($connection);
      if($result2){         //updated successfully
        echo "Password updated successfully!";
      }else{      //query failed
        echo "Error updating password!!!";
      }
    }else{        //password miss match
      mysqli_close($connection);
      echo "Invalid current password!!!";
    }

  }else{        //not signed in
    echo "You don't have access to this page!";
  }


?>
