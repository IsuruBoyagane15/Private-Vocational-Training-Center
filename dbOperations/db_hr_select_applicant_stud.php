<?php
  //select a qualified student applicant

  $id = $_POST['id'];

  //get the selected applicant details
  $conn1 = mysqli_connect('localhost', 'root', '', 'applicantdetails');
  $query1 = "SELECT * FROM student_details WHERE id='{$id}'";
  $result1 = mysqli_query($conn1, $query1);
  if(!$result1){
    echo "Error loading data from not selected table!";
    mysqli_close($conn1);
    return;
  }
  $row = mysqli_fetch_array($result1);

  //insert data into new database (selected db)
  $conn2 = mysqli_connect('localhost', 'root', '', 'applicantdetails_hrselected');
  $query2 = "INSERT INTO selected_student_details
  (course, name_with_initials, fullname, medium, address, nic, gender, date_of_birth, age, mobile, home, email, year_of_ol, index_ol, maths, english, science, year_of_al, index_al, stream, applied_date)
  VALUES ('$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]', '$row[12]', '$row[14]', '$row[15]', '$row[16]', '$row[17]', '$row[18]', '$row[19]', '$row[20]', '$row[21]', '$row[13]')";
  $result2 = mysqli_query($conn2, $query2);
  mysqli_close($conn2);
  if(!$result2){
    echo "Error inserting data into qualified table!";
    return;
  }

  //delete the selected applicant from the previous table
  $query3 = "DELETE FROM student_details WHERE id='{$id}'";
  $result3 = mysqli_query($conn1, $query3);
  mysqli_close($conn1);
  if(!$result3){
    echo "Error deleting from not selected table!";
    return;
  }

  if($result2) {
    echo "1 student selected";
  }else{
    echo "unable to select this student..";
  }

?>
