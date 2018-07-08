<?php

    $course_name =$_POST["course_name"] ;
    $student_count = $_POST["student_count"];
    $duration = $_POST["duration"];
    $trade = $_POST["trade"];
    $course_type = $_POST["course_type"];
    $type = $_POST["type"];
    $accredit_level = $_POST["accredit_level"];
    $medium = $_POST["medium"];
    $required_qualification = $_POST["required_qualification"];
    $course_id = $_POST["course_id"];
    $c_descrip = $_POST["c_descrip"];

    $id = "C"."$course_id";



    $link = mysqli_connect("localhost", "root", "", "courses_details");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = "INSERT INTO course_details (course_id,trade,course_name,course_type, type, accredit_level, duration,   medium,required_qualification,student_count, description) VALUES
    ('$id', '$trade', '$course_name', '$course_type', '$type', '$accredit_level', '$duration', '$medium', '$required_qualification', '$student_count', '$c_descrip')";
    $sql5 = "CREATE TABLE $id (modules VARCHAR(10))" ;
    if(mysqli_query($link, $sql5)){
      echo "course modules added";
    } else{
         echo "ERROR: Could not able to execute $sql5. " . mysqli_error($link);
    }

    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";


        $link2 = mysqli_connect("localhost", "root", "", "course_info");
        if($link2 === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql4 = "SELECT module_name, description, lecturer FROM modules where course_id = '$course_id'";

        $resultset = mysqli_query($link2, $sql4);
        mysqli_close($link2);





        if($resultset){
          $count = 1;
          while($row = mysqli_fetch_array($resultset)){
              $module_name= $row[0];
              echo $module_name;
              $description = $row[1];
              echo $description;
              $lecturer = $row[2];
              echo $lecturer;
              $module_id = "$course_id"."m"."$count";
              $sql4 = "INSERT INTO module_details (module_id,module_name,no_of_students, lecturer_id  , module_description) VALUES ('$module_id', '$module_name', '$student_count', '$lecturer', '$description')";
              if(mysqli_query($link, $sql4)){
                echo "module approved";
              } else{
                   echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
              }

              $sql6 = "INSERT INTO $id (modules) VALUES ('$module_id')";
              if(mysqli_query($link, $sql6)){
                echo "module approved";
              } else{
                   echo "ERROR: Could not able to execute $sql6. " . mysqli_error($link);
              }
              $count = $count +1;

          }

        $link2 = mysqli_connect("localhost", "root", "", "course_info");
        if($link2 === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql2 = "delete from modules where course_id = $course_id";
        if(mysqli_query($link2, $sql2)){
            $sql3 = "delete from courses where id = $course_id";
            if(mysqli_query($link2, $sql3)){
              echo "temporary modules deleted ";
            } else{
            	   echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link2);
            }

        } else{
        	echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link2);
        }

        mysqli_close($link2);

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
  }

?>
