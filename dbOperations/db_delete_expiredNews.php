<?php

  function checkExpired($id) {
    $connection = mysqli_connect("localhost", "root", "", "news");
    $query = "SELECT id,id_key,remove_date FROM news where id='{$id}'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $today = new DateTime( date("Y-m-d") );
    $today = $today->format('d-m-Y');      //convert to required format
    $expire = new DateTime( (string)$row[2] );
    $expire = $expire->format('d-m-Y');      //convert to required format

    if( strtotime($expire) <= strtotime($today) ) {      //remove expired news item
      $query2 = "DELETE FROM news WHERE id='{$id}'";
      $result2 = mysqli_query($connection, $query2);
      mysqli_close($connection);
      if($result2){
        return false;       //deleted
      }
    }else{
      mysqli_close($connection);
      return true;      //valid news
    }

  }

?>
