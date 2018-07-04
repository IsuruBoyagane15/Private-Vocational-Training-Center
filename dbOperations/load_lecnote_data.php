

<?php
//load file names & paths of all relevent lecture notes
$module_code=$_GET['module_id'];
$module_code=(string)$module_code;
$module_code=trim($module_code);
$connection = mysqli_connect('localhost','root','','courses_details');
$query="SELECT module_name FROM module_details WHERE module_id='$module_code'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_array($result);
$module=trim($row[0]);
$connection->close();
$connection = mysqli_connect('localhost','root','','configdata');
$query = "SELECT filename,file_path FROM config_lectureuploads WHERE module='$module'";
$result_set = mysqli_query($connection, $query);
mysqli_close($connection);
$output = '';

//load actual file and insert into display
while( $record = mysqli_fetch_array($result_set) ) {
      $output .= ' <div style="padding:10px;"><a href=" ';
      $output .= (string)$record[1];
      $output .= ' "class="mod_link"> ';
      $output .= (string)$record[0];
      $output .='</a></div>';

}


echo $output;

?>
