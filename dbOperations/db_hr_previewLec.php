<?php
  //load selected lecturer applicant details to the popup

  $id = $_POST['id'];

  $connection = mysqli_connect('localhost', 'root', '', 'applicantdetails');
  $query = "SELECT * FROM lecturer_details WHERE id=$id";
  $result = mysqli_query($connection, $query);
  mysqli_close($connection);
  $row = mysqli_fetch_array($result);

  $output = ' <div class="popup_data"> ';
  $output .= ' <div class="pop_heading"><h3>Applicant Details</h3></div> ';

  $output .= ' <dt>&emsp; No</dt><dd id="no"> :&emsp; ';
  $output .= (string)$row[0];
  $output .= ' <dt>&emsp; Name with Initials</dt><dd> :&emsp; ';
  $output .= (string)$row[2];
  $output .= ' </dd><dt>&emsp; Full name</dt><dd> :&emsp; ';
  $output .= (string)$row[3];
  $output .= ' </dd><dt>&emsp; Gender</dt><dd> :&emsp; ';
  $output .= (string)$row[11];
  $output .= ' </dd><dt>&emsp; NIC</dt><dd> :&emsp; ';
  $output .= (string)$row[5];
  $output .= ' </dd><dt>&emsp; Date of birth</dt><dd> :&emsp; ';
  $output .= (string)$row[9];
  $output .= ' </dd><dt>&emsp; Age</dt><dd> :&emsp; ';
  $output .= (string)$row[10];
  $output .= ' </dd><dt>&emsp; Home address</dt><dd> :&emsp; ';
  $output .= (string)$row[4];
  $output .= ' </dd><dt>&emsp; Contact No (mobile)</dt><dd> :&emsp; ';
  $output .= (string)$row[6];
  $output .= ' </dd><dt>&emsp; Contact No (home)</dt><dd> :&emsp; ';
  $output .= (string)$row[7];
  $output .= ' </dd><dt>&emsp; Email</dt><dd> :&emsp; ';
  $output .= (string)$row[8];
  $output .= ' </dd><dt>&emsp; Year of O/L</dt><dd> :&emsp; ';
  $output .= (string)$row[12];
  $output .= ' </dd><dt>&emsp; Year of A/L</dt><dd> :&emsp; ';
  $output .= (string)$row[13];
  $output .= ' </dd><dt>&emsp; Index of A/L</dt><dd> :&emsp; ';
  $output .= (string)$row[14];
  $output .= ' </dd><dt>&emsp; Stream</dt><dd> :&emsp; ';
  $output .= (string)$row[15];
  $output .= ' </dd><dt>&emsp; Degree</dt><dd> :&emsp; ';
  $output .= (string)$row[16];
  $output .= ' </dd><dt>&emsp; Elected Course</dt><dd> :&emsp; ';
  $output .= (string)$row[1];
  $output .= ' </dd><dt>&emsp; Medium</dt><dd> :&emsp; ';
  $output .= (string)$row[18];
  $output .= ' </dd><dt>&emsp; Applied Date</dt><dd> :&emsp; ';
  $output .= (string)$row[17];

  $output .= ' </dd></div> ';
  $output .= ' <div class="pop_btn_container"> ';
  $output .= ' <button class="popup_btn" id="popup_back">Back</button> ';
  $output .= ' <button class="popup_btn" id="lec_dismiss">Dismiss</button> ';
  $output .= ' <button class="popup_btn" id="lec_select">Select</button> ';
  $output .= ' </div> ';

  echo $output;

?>
