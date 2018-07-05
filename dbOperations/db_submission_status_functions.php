<?php
//functions to load submission status//

//get module name
function getModName($tablename){
  $conn = mysqli_connect("localhost", "root", "", "configdata");
  $query = "SELECT * FROM config_createassignment WHERE tableName='{$tablename}'";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  $row = mysqli_fetch_array($result);
  $modname = (string)$row[2];
  return $modname;
}


//get total assigned students
function getTotal($modname){
  $conn1 = mysqli_connect("localhost", "root", "", "courses_details");
  $query1 = "SELECT * FROM module_details WHERE module_name='$modname'";
  $result1 = mysqli_query($conn1, $query1);
  mysqli_close($conn1);
  $row1 = mysqli_fetch_array($result1);
  $total = (string)$row1[3];
  return $total;
}


//get no of submitted students
function getSubmitted($tablename){
  $conn = mysqli_connect("localhost", "root", "", "assignment_did_log");
  $query = "SELECT COUNT(*) FROM $tablename";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  $row = mysqli_fetch_array($result);
  return $row[0];
}


//get no of submitted students
function getLate($tablename){
  $conn = mysqli_connect("localhost", "root", "", "assignment_did_log");
  $query = "SELECT * FROM $tablename";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);

  $late = 0;
  while( $row = mysqli_fetch_array($result) ){
    if( $row[6]=='1' ){
      $late++;
    }
  }

  return $late;
}

?>
