<!-- load valid news to the news page -->

<?php
  include_once(dirname(__FILE__).'/db_delete_expiredNews.php');

  $connection = mysqli_connect("localhost", "root", "", "news");
  $query = "SELECT * FROM news";
  $result = mysqli_query($connection, $query);
  $output = '';

  while( $row = mysqli_fetch_array($result) ){
    if( checkExpired((string)$row[0]) ){            //get only valid news items and remove expired news
      $output .= '<div class="news_box"><h3>';
      $output .= (string)$row[2];
      $output .= '';

      $file_parts = pathinfo( $row[4] );

      switch( $file_parts['extension'] ) {
        case "jpg":
          $output .= '</h3><img class="news_image_box" src="';
          $output .= (string)$row[4];
          break;
        case "jpeg":
          $output .= '</h3><img class="news_image_box" src="';
          $output .= (string)$row[4];
          break;
        case "jfif":
          $output .= '</h3><img class="news_image_box" src="';
          $output .= (string)$row[4];
          break;
        case "gif":
          $output .= '</h3><img class="news_image_box" src="';
          $output .= (string)$row[4];
          break;
        case "png":
          $output .= '</h3><img class="news_image_box" src="';
          $output .= (string)$row[4];
          break;
        default:
          $output .= '</h3><img class="news_image_box" src="';
          $output .= 'icons/icon_document.png';
      }

      $output .= '"><br><a class="news_image_link" href="';
      $output .= (string)$row[4];
      $output .= '">';
      $output .= (string)$row[3];
      $output .= '</a><p>';
      $output .= (string)$row[5];
      $output .= '</p>';
      $output .= '</div>';
    }
  }

  mysqli_close($connection);
  echo $output;

?>
