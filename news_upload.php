<?php
  //to insert a log into database (temporary)
  include_once(dirname(__FILE__).'/dbOperations/db_news_log.php');

  //upload a news item (maximum 20MB)
  $target_dir = "File Upload/News/";

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
  if ( $_FILES["fileToUpload"]["size"] > 20000000 ) {
      echo "Sorry, your file is larger than 20MB!";
      $uploadOk = 0;
      return;
  }

  // try to upload the file
  if ($uploadOk == 1) {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

          //insert data into temporary table in database
          $name = $_POST['name'];
          $description = $_POST['description'];
          $expireDate = $_POST['ex_date'];
          addLog( $name, $_FILES["fileToUpload"]["name"], $target_dir.basename( $_FILES["fileToUpload"]["name"]), $description, $expireDate );

      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

?>
