<?php
   $server="localhost";
   $username="root";
   $password="";
   $dbname="authentication";
   $conn= new mysqli($server,$username,$password,$dbname);
   if($conn->connect_error){
     die("conection failed:".$conn->connect_error);
   }
   $username=(string)$_POST["username"];

   $password_sha1=(string)$_POST["password"];
   $username=trim($username);
   $password_sha1=trim($password_sha1);
   $password_sha1=sha1($password_sha1);
   echo $username;
   echo $password_sha1;
   $sql="SELECT username FROM user WHERE username='$username' AND password_sha1='$password_sha1'";
   $result=$conn->query($sql);
   session_start();
   session_destroy();
   session_start();
   if($row=mysqli_fetch_array($result)){
     $_SESSION['signed_in']=true;
     $_SESSION['username']=$username;
     $conn->close();
     header("Location:/GitHub/Private-Vocational-Training-Center/student_profile.php?index=$username");
   }
   else{
     $conn->close();
     $_SESSION['flash_error']="invalid user name or password";
     $_SESSION['signed_in']=false;
     $_SESSION['username']=null;
     header("Location:/GitHub/Private-Vocational-Training-Center/log-in.php");
   }
   ?>
