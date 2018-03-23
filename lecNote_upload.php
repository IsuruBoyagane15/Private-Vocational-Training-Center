<?php
  //to insert a log into database
  include_once(dirname(__FILE__).'/dbOperations/db_lectureNote_log.php');

  //upload a lecture note (maximum 10MB)

  $mod_name = $_POST['mod_name'];
  $target_dir = "File Upload/Lecture Notes/" . trim($mod_name);

  //create a folder for module if not exists
  if( !file_exists($target_dir) ){
    mkdir( "{$target_dir}" );
  }

  $target_dir .= "/";
  $target_file = $target_dir . basename( $_FILES["fileToUpload"]["name"] );
  basename($_FILES["fileToUpload"]["name"]);

  $uploadOk = 1;

  // Check if file already exists
  if ( file_exists($target_file) ) {
      echo "Sorry, the selected file already exists!";
      $uploadOk = 0;
      return;
  }

  // Check file size
  if ( $_FILES["fileToUpload"]["size"] > 10000000 ) {
      echo "Sorry, your file is larger than 10MB!";
      $uploadOk = 0;
      return;
  }

  // try to upload the file
  if ($uploadOk == 1) {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          addLog( $_FILES["fileToUpload"]["name"], $mod_name, $target_dir.basename( $_FILES["fileToUpload"]["name"]) );
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

?>
