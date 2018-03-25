<?php

  //connect to the mysql database
  function createConnection($servername, $username, $password, $dbname) {
    $connection = mysqli_connect($servername, $username, $password='', $dbname);

    if( mysqli_connect_errno() ) {
      die( 'Database connection failed ' . mysqli_connect_error() . "<br>" );
    }
    return $connection;
  }

  //close the connection
  function closeConnection($connection) {
    mysqli_close($connection);
  }


  //get a available id to create a table
  function getAvailableID($module_name, $assign_name, $deadline="0000-00-00 00:00:00") {
    $conn = createConnection('localhost','root','','configdata');

    $query = "SELECT * FROM config_createassignment";
    $result_set = mysqli_query($conn, $query);
    $availableId = 0;

    if($result_set) {
      while( $record = mysqli_fetch_assoc($result_set) ) {
        if( $record['is_deleted'] == 1 ) {

          //update the config_createassignment table
          $query = "UPDATE config_createassignment SET tableName='assignment{$availableId}', module='{$module_name}', assignment_name='{$assign_name}', deadline='{$deadline}', is_deleted=0 WHERE id={$availableId}";
          $result = mysqli_query($conn, $query);
          if(!$result) {
            echo "configdata database query failed! " . mysqli_error($conn) . "<br>" ;
          }

          closeConnection($conn);
          return $availableId;
        }
        $availableId++;
      }
    }

    //add about new table to the config_createassignment table
    $query = "INSERT INTO config_createassignment (id, tableName, module, assignment_name, deadline, is_deleted) VALUES ('{$availableId}', 'assignment{$availableId}', '{$module_name}', '{$assign_name}', '{$deadline}', 0)";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      echo "configdata database query failed! " . mysqli_error($conn) . "<br>" ;
    }

    closeConnection($conn);
    return $availableId;
  }

  //create a new table for a assignment
  function createTable($conn, $module_name, $assign_name, $deadline="NULL") {
    $avaiId = getAvailableID($module_name, $assign_name, $deadline, $deadline);

    //create a table to add questions
    $query = "CREATE TABLE assignment{$avaiId} (
      question_no INT(5) AUTO_INCREMENT PRIMARY KEY,
      question VARCHAR(7000),
      option1 VARCHAR(500),
      option2 VARCHAR(500),
      option3 VARCHAR(500),
      option4 VARCHAR(500),
      correct_option VARCHAR(10)
    )";

    $result = mysqli_query($conn, $query);

    if(!$result) {
      echo "creating table failed! " . mysqli_error($conn) . "<br>" ;
    }
    return "assignment{$avaiId}";
  }


  //delete a table(assignment)
  function deleteTable( $conn, $tablename ) {
    $query = "DROP TABLE {$tablename}";

    $result = mysqli_query($conn, $query);
    if(!$result) {
      echo "deleting table failed!" . mysqli_error($conn) . "<br>" ;
    }else{
      //mark assignment as deleted in config table
      $con1 = mysqli_connect('localhost', 'root', '', 'configdata');
      $que1 = "UPDATE config_createassignment SET is_deleted=1 WHERE tableName='{$tablename}'";
      $res = mysqli_query($con1, $que1);
      if(!$res){
        echo "Error deleting the config record!";
      }
      mysqli_close($con1);
    }
  }


  //add a question to the database (table should be created first)
  function addQuestion($conn, $tablename, $question, $opt1, $opt2, $opt3, $opt4, $correct_opt) {

    $query = "INSERT INTO {$tablename} (question, option1, option2, option3, option4, correct_option)
              VALUES ('{$question}', '{$opt1}', '{$opt2}', '{$opt3}', '{$opt4}', '{$correct_opt}')";

    $result = mysqli_query($conn, $query);
    if(!$result) {
      echo "adding question failed!" . mysqli_error($conn) . "<br>" ;
    }

  }

?>
