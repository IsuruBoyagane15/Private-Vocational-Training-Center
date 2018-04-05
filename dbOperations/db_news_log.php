<?php
// insert a log into temporary database about uploaded news
function addLog($name, $filename, $filepath, $description, $expireDate){
  $connection = mysqli_connect('localhost','root','','news');
  $query = "INSERT INTO temporary_news (id_key, name, file_name, file_path, description, remove_date) VALUES ('hr', '{$name}', '{$filename}', '{$filepath}', '{$description}', '{$expireDate}')";

  $result = mysqli_query($connection, $query);

  mysqli_close($connection);
}
?>
