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
   $sql="SELECT username FROM user WHERE username='$username' AND password_sha1='$password_sha1'";
   $result=$conn->query($sql);
   session_start();

   //login successful
   if($row=mysqli_fetch_array($result)){
     $_SESSION['signed_in']=true;
     $_SESSION['username']=$username;
     $conn->close();
     echo $username;
   }
   //login failure
   else{
     $conn->close();
     $_SESSION['flash_error']="invalid user name or password";
     $_SESSION['signed_in']=false;
     $_SESSION['username']=null;

     echo "invalid_usr/pass";
   }

?>
