
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
   $courseid=$_POST['course_id'];
   $id=$_POST['id'];
   $nameini=$_POST['nameini'];
   $fullname=$_POST['fullname'];
   $medium=$_POST['medium'];
   $address=$_POST['address'];
   $gender=$_POST['gender'];
   $bday=$_POST['bday'];
   $age=$_POST['age'];
   $mobile=$_POST['mobile'];
   $home=$_POST['home'];
   $email=$_POST['email'];
   $olyear=$_POST['olyear'];
   $olindex=$_POST['indexol'];
   $maths=$_POST['maths'];
   $science=$_POST['science'];
   $english=$_POST['english'];
   $alyear=$_POST['alyear'];
   $alindex=$_POST['indexal'];
   $alstream=$_POST['stream'];
  $sql="INSERT INTO STUDENT_DETAILS(course,nic,name_with_initials,fullname,medium,address,gender,date_of_birth,age,mobile,home,email,year_of_ol,index_ol,maths,english,science,year_of_al,index_al,stream) VALUES ('$courseid','$id','$nameini','$fullname','$medium','$address','$gender','$bday','$age','$mobile','$home','$email','$olyear','$olindex','$maths','$english','$science','$alyear','$alindex','$alstream')";
  $conn->query($sql);
  $conn->close();
  $output='<div>';
  $output=$courseid;
  $output.=$id;
  $output='</div>';
  echo $output;
  ?>
