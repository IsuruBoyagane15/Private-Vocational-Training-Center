<?
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="authentication";
  session_start();
  $user_name=trim($_SESSION['username']);

  $password=trim($_POST["pwd"]);
  $password=sha1($password);
  $newpwd=trim($_POST["newpwd"]);
  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql="SELECT password_sha1 from user where username='$username'";
  $result=$conn->query($sql);
  $row=mysqli_fetch_array();
  $pwd=$row[0];
  $output="false";
  if($password==$pwd){
       $newpwd=sha1($newpwd);
       $sql="UPDATE user SET password_sha1='$newpwd' where username='$username'";
       $conn->query($sql);
       $outtput="Sucess";
  }
  else{
      $output="Error"
  }

  else{
    $output="Error";
  }
  $conn-close();
  echo $output;

?>
