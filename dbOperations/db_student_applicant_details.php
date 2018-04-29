<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

   $servername="localhost";
   $username="root";
   $password="";
   $database="applicantDetails";

   $conn=new mysqli($servername,$username,$password,$database);
   if($conn->connect_error){
     die("connection failed: ".$conn->connect_error);
   }
   else{
     echo "connected successfully<br>";
   }
   $courseid=$_POST["course_id"];
   $id=$_POST["nic"];
   $nameini=$_POST["nameini"];
   $fullname=$_POST["fullname"];
   $medium=$_POST["medium"];
   $address=$_POST["address"];
   $gender=$_POST["gender"];
   $bday=$_POST["bday"];
   $age=$_POST["age"];
   $mobile=$_POST["mobile"];
   $home=$_POST["home"];
   $email=$_POST["email"];
   //creating data base
   /*$sql="CREATE DATABASE applicantDetails";
   if($conn->query($sql)===TRUE){
     echo "DATABASE applicantDetails created successfully";
   }
   else{
     echo "Error creating database: ".$conn->error;
   }*/
   //creating student_details table
   /*$sql="CREATE TABLE STUDENT_DETAILS(id INT(9) UNSIGNED,course VARCHAR(30) NOT NULL,name_with_initials VARCHAR(30) NOT NULL,fullname VARCHAR(30) NOT NULL,medium VARCHAR(15) NOT NULL,
        address VARCHAR(50) NOT NULL,gender VARCHAR(10) NOT NULL,date_of_birth DATE NOT NULL,age DATE NOT NULL,mobile VARCHAR(12) NOT NULL,home VARCHAR(12),email VARCHAR(50) NOT NULL,applied_date TIMESTAMP)";

  if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  $conn->close();
  */
  $appdate=date("Y-m-d");
  $sql="INSERT INTO STUDENT_DETAILS(course_id,id,name_with_initials,fullname,medium,address,gender,date_of_birth,age,mobile,home,email,applied_date) VALUES ('$courseid','$id','$nameini','$fullname','$medium','$address','$gender','$bday','$age','$mobile','$home','$email','$appdate')";
  $conn->query($sql);
  echo "new record created sucessfully";
  $conn->close();
  ?>
</body>
</html>
