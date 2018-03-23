<!-- delete a lecture note from ajax call -->

<?php
  include_once(dirname(__FILE__).'/dbOperations/db_lectureNote_log.php');

  $path = trim( $_POST['file_path'] );
  $name = trim( $_POST['file_name'] );

  //delete the file
  $result = unlink($path);
  if( $result ) {
    delLog($name);
    echo "File deleted successfully!";
  }else{
    echo "Error.. Unable to delete the file!";
  }

?>
