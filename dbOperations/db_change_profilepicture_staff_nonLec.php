<?php
  session_start();
  $index=$_SESSION['username'];
  include_once(dirname(__FILE__).'/db_changeprofilepicture_staff_log_nonLec.php');
  $target_dir = "../File Upload/profile_pics/".trim($index);
  if( !file_exists($target_dir) ){
    mkdir( "{$target_dir}" );
  }
  $target_dir .= "/";
  $target_file = $target_dir . basename( $_FILES["chooser"]["name"] );
  basename($_FILES["chooser"]["name"]);
  $uploadOk = 1;
  $target_dir = "File Upload/profile_pics/".trim($index)."/";
  if ($uploadOk == 1) {
      if (move_uploaded_file($_FILES["chooser"]["tmp_name"], $target_file)) {
         delLog($index);
          addLog( $_FILES["chooser"]["name"], $index, $target_dir.basename( $_FILES["chooser"]["name"]) );
          $output="success";
      } else {
          $output="Sorry, there was an error uploading your file!";
      }
  }
  echo $output;
?>
