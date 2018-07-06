<?php

 // insert a log into database about uploaded fi
 $index=$_SESSION['username'];
 function addLog($filename, $index, $filepath){
   $connection = mysqli_connect('localhost','root','','students');
   $query = "INSERT INTO profile_pics (filename,index_number, filepath) VALUES ('{$filename}', '{$index}', '{$filepath}')";

   $result = mysqli_query($connection, $query);

   mysqli_close($connection);
 }


 //delete the log of deleted file
 function delLog($index){
   $connection = mysqli_connect('localhost','root','','students');
   $query = "DELETE FROM profile_pics WHERE index_number='{$index}'";

   $result = mysqli_query($connection, $query);
   if( !$result ){
     echo "error occured while deleting log!";
   }

   mysqli_close($connection);
 }


 //load notes into lecture note area (return as a string)
 function loadPicture($index){

   //load file names & paths of all relevent lecture notes
   $connection = mysqli_connect('localhost','root','','students');
   $query = "SELECT filename,file_path FROM profile_pics where index_number='$index'";
   $result_set = mysqli_query($connection, $query);
   mysqli_close($connection);
   $output = '';

   //load actual file and insert into display

     while( $record = mysqli_fetch_array($result_set) ) {
        $output.= '<img src="'.$record[0].'" alt="'.$index.'" style="width:100%;">';
     }

   return $output;
 }

?>
