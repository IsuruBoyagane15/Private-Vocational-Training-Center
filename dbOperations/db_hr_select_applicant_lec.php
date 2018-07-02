<?php
  //select a qualified lecture post applicant

  $id = $_POST['id'];

  //get the selected applicant details
  $conn1 = mysqli_connect('localhost', 'root', '', 'applicantdetails');
  $query1 = "SELECT * FROM lecturer_details WHERE id='{$id}'";
  $result1 = mysqli_query($conn1, $query1);
  if(!$result1){
    echo "Error loading data from not selected table!";
    mysqli_close($conn1);
    return;
  }
  $row = mysqli_fetch_array($result1);

  //insert data into new database (selected db)
  $conn2 = mysqli_connect('localhost', 'root', '', 'applicantdetails_hrselected');
  $query2 = "INSERT INTO selected_lecturer_details
  (course, medium, name_with_initials, fullname, address, nic, mobile, home, email, date_of_birth, age, gender, year_of_ol, year_of_al, index_al, stream, degree, applied_date)
  VALUES ('$row[1]', '$row[18]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]', '$row[12]', '$row[13]', '$row[14]', '$row[15]', '$row[16]', '$row[17]')";
  $result2 = mysqli_query($conn2, $query2);
  mysqli_close($conn2);
  if(!$result2){
    echo "Error inserting data into qualified table!";
    return;
  }

  //delete the selected applicant from the previous table
  $query3 = "DELETE FROM lecturer_details WHERE id='{$id}'";
  $result3 = mysqli_query($conn1, $query3);
  mysqli_close($conn1);
  if(!$result3){
    echo "Error deleting from not selected table!";
    return;
  }

  if($result2) {
    echo "1 lecture applicant selected";
  }else{
    echo "unable to select this applicant..";
  }

?>
