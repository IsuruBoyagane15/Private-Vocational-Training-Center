<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "staff_nonlec";
  session_start();
  $conn = new mysqli($servername, $username, $password,$dbname);
  $index = $_SESSION['username'];
  $sql = "SELECT name,course,address,nic,gender,date_of_birth,mobile,email FROM staff_details WHERE staff_id='$index'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $conn->close();
  $output = "";

  $output.='<label class="lable">Index No</label>';
  $output.='<input  disabled  name="fullname" value="'.$index.'"></input>';

  $output.='<label class="lable" name="fullname">Full Name</label><br>';
  $output.='<input  disabled  name="fullname" value="'.$row[0].'"></input>';

  $output.='<label class="lable">Address</label>';
  $output.='<input  disabled  name="address" value="'.$row[2].'"></input>';

  $output.='<label class="lable">Date of Birth</label>';
  $output.='<input  disabled  name="bday" value="'.$row[5].'"></input>';

  $output.='<label class="lable">NIC</label>';
  $output.='<input  disabled  name="nic" value="'.$row[3].'"></input>';

  $output.='<label class="lable">Mobile No</label>';
  $output.='<input  disabled  name="mobile" value="'.$row[6].'"></input>';

  $output.='<label class="lable">Email</label>';
  $output.='<input  disabled  name="email" value="'.$row[7].'"></input>';

  $output2='<p>'.$row[0].'</p>';

  $output3="";
  $connection = mysqli_connect('localhost','root','','staff_nonlec');
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
