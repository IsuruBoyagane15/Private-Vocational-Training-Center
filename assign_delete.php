<!-- delete a assignment from ajax call -->

<?php
  include_once(dirname(__FILE__).'/dbOperations/db_createAssign_functions.php');

  $tablename = trim( $_POST['tabname'] );

  //delete the table
  $conn = createConnection('localhost', 'root', '', 'assignments');
  deleteTable( $conn, $tablename );
  closeConnection($conn);

?>
