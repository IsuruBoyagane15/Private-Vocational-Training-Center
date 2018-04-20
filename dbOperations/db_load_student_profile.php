<?php
   $server="localhost";
   $username="root";
   $password="";
   $dbname="students";
   $conn= new mysqli($server,$username,$password,$dbname);
   if($conn->connect_error){
     die("conection failed:".$conn->connect_error);
   }
   $index=(string)$_GET['index'];
   $index=trim($index);
   $sql="SELECT course_id FROM student_info WHERE student_index='$index'";
   $result=$conn->query($sql);
   $row=mysqli_fetch_array($result);
   $courseid=$row[0];
   $conn->close();
   $dbname="COURSES_DETAILS";
   $conn= new mysqli($server,$username,$password,$dbname);
   $sql="SELECT COURSE_NAME FROM COURSE_DETAILS WHERE COURSE_ID='$courseid'";
   $result=$conn->query($sql);
   $row=mysqli_fetch_array($result);
   $output='';
   $output.="<p>";
   $output .=$row[0];
   $output .="</p>";
   $conn->close();




   echo $output;


?>
