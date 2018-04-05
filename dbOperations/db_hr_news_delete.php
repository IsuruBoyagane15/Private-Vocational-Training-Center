<?php
  $path = trim( $_POST['file_path'] );
  $realpath = "../" . $path;

  //delete the file
  $result = unlink($realpath);

  //delete the log in temporary DB
  if( $result ) {
    $conn = mysqli_connect('localhost','root','','news');
    $query = "DELETE FROM temporary_news WHERE file_path='{$path}'";

    $res = mysqli_query($conn, $query);
    if( !$res ){
      echo "error occured while deleting log!";
    }else{
      echo "News deleted successfully!";
    }
    mysqli_close($conn);
  }else{
    echo "Error.. Unable to delete the file!";
  }

?>
