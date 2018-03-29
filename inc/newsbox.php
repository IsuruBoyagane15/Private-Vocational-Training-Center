<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/newsbox.css">
</head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="News";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="SELECT id,date,description FROM newsitems ";
    $result=$conn->query($sql);
    $all_property=array();

    echo '<table>
           <tr>';
    while($property=mysqli_fetch_field($result)){
      echo '<td style="background-color:grey;color:white;">'.$property->name.'</td>';
      array_push($all_property,$property->name);
    }
    echo '</tr>';

    while($row=mysqli_fetch_array($result)){
      echo '<tr>';
      foreach($all_property as $item){
        echo '<td>' .$row[$item].'</td>';
      }
      
    }
    $conn->close();
    ?>

  </body>
  </html>
