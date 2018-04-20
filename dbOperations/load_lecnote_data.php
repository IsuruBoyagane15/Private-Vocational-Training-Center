

<?php
//load file names & paths of all relevent lecture notes
$module_code=$_GET['module_id'];
$module_code=(string)$module_code;
$module_code=trim($module_code);
$connection = mysqli_connect('localhost','root','','configdata');
$query = "SELECT filename,module_code,module,file_path FROM config_lectureuploads";
$result_set = mysqli_query($connection, $query);
mysqli_close($connection);
$output = '';

//load actual file and insert into display
if($result_set) {
  while( $record = mysqli_fetch_array($result_set) ) {
    if( strcmp( trim( (string)$record[1] ), $module_code) == 0 ) {
      $output .= ' <li><div class="lecN_name"><a href=" ';
      $output .= (string)$record[2];
      $output .= ' "class="note_path"> ';
      $output .= (string)$record[0];
      $output .= ' </a><a href="#" class="del_lecNote"><img src="icons/icon_cancel.png"></a></div></li> ';
    }
  }
}

echo $output;

?>
