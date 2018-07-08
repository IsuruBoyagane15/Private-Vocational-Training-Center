<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="students";
  session_start();
  $conn = new mysqli($servername, $username, $password,$dbname);
  $index=$_SESSION['username'];
  $sql="SELECT course_id,nic,initial_name,fullname,medium,address,birthday,mobile,email FROM student_info WHERE student_index='$index'";
  $result=$conn->query($sql);
  $row=mysqli_fetch_array($result);
  $conn->close();
  $dbname="courses_details";
  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql="SELECT COURSE_NAME FROM course_details WHERE course_id='$row[0]'";
  $result=$conn->query($sql);
  $row2=mysqli_fetch_array($result);
  $conn->close();
  $output='';

  $output.='<label class="lable" name="course">Course Name</label><br>';
  $output.='<input  disabled  name="course" value="'.$row2[0].'"></input>';


  $output.='<label class="lable" name="fullname">Full Name</label><br>';
  $output.='<input  disabled  name="fullname" value="'.$row[3].'"></input>';

  $output.='<label class="lable">Address</label>';
  $output.='<input  disabled  name="address" value="'.$row[5].'"></input>';

  $output.='<label class="lable">Birthday</label>';
  $output.='<input  disabled  name="bday" value="'.$row[6].'"></input>';

  $output.='<label class="lable">NIC</label>';
  $output.='<input  disabled  name="nic" value="'.$row[1].'"></input>';

  $output.='<label class="lable">Mobile No</label>';
  $output.='<input  disabled  name="mobile" value="'.$row[7].'"></input>';

  $output.='<label class="lable">Index No</label>';
  $output.='<input  disabled  name="fullname" value="'.$index.'"></input>';
  $output2='<p>'.$row[2].'</p>';
  $output3="";
  $connection = mysqli_connect('localhost','root','','students');
  $query = "SELECT filepath FROM profile_pics where index_number='$index'";
  $result_set = mysqli_query($connection, $query);
  mysqli_close($connection);
  $output3 ='';
  $record = mysqli_fetch_array($result_set);
  $filepath=$record[0];
  $output3.= '<img src="'.$filepath.'" alt="'.$index.'" style="width:100%;">';
  $array = json_encode(array($output2,$output,$output3));
  echo $array;


 ?>
