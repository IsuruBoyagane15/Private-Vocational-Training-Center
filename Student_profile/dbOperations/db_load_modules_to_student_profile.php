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
 ?>
