
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
   $array=$_POST["data_array"];
   $courseid=$array[0];
   $id=$array[5];
   $nameini=$array[7];
   $fullname=$array[8];
   $medium=$array[6];
   $address=$array[9];
   $gender=$array[12];
   $bday=$array[10];
   $age=$array[11];
   $mobile=$array[13];
   $home=$array[14];
   $email=$array[15];
   $olyear=$array[16];
   $olindex=$array[17];
   $maths=$array[18];
   $science=$array[19];
   $english=$array[20];
   $alyear=$array[21];
   $alindex=$array[22];
   $alstream=$array[23];
  $appdate=date("Y-m-d");
  $sql="INSERT INTO STUDENT_DETAILS(course,id,name_with_initials,fullname,medium,address,gender,date_of_birth,age,mobile,home,email,applied_date,year_of_ol,index_of_ol,maths,english,science,year_of_al,index_al,stream) VALUES ('$courseid','$id','$nameini','$fullname','$medium','$address','$gender','$bday','$age','$mobile','$home','$email','$appdate','$olyear','$olinex','$maths','$enslish','$science','$alyear','$alindex','$alstream')";
  $conn->query($sql);
  $conn->close();
  $output='';
  echo $output;
  ?>
