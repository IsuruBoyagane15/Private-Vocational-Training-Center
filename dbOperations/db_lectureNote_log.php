<?php

  // insert a log into database about uploaded file
  function addLog($filename, $module, $filepath){
    $connection = mysqli_connect('localhost','root','','configdata');
    $query = "INSERT INTO config_lectureuploads (filename, module, file_path) VALUES ('{$filename}', '{$module}', '{$filepath}')";

    $result = mysqli_query($connection, $query);

    mysqli_close($connection);
  }


  //delete the log of deleted file
  function delLog($filename){
    $connection = mysqli_connect('localhost','root','','configdata');
    $query = "DELETE FROM config_lectureuploads WHERE filename='{$filename}'";

    $result = mysqli_query($connection, $query);
    if( !$result ){
      echo "error occured while deleting log!";
    }

    mysqli_close($connection);
  }


  //load data into lecture note area (append to a string $outAppend)
  function loadLecNoteData($modname){

    //load file names & paths of all relevent lecture notes
    $connection = mysqli_connect('localhost','root','','configdata');
    $query = "SELECT filename,module,file_path FROM config_lectureuploads";
    $result_set = mysqli_query($connection, $query);
    mysqli_close($connection);
    $output = '';

    //load actual file and insert into display
    if($result_set) {
      while( $record = mysqli_fetch_array($result_set) ) {
        if( strcmp( trim( (string)$record[1] ), $modname ) == 0 ) {
          $output .= ' <li><div class="lecN_name"><a href=" ';
          $output .= (string)$record[2];
          $output .= ' "class="note_path"> ';
          $output .= (string)$record[0];
          $output .= ' </a><a href="#" class="del_lecNote"><img src="icons/icon_cancel.png"></a></div></li> ';
        }
      }
    }

    return $output;
  }

?>
