<?php

    $link = mysqli_connect("localhost", "root", "", "courses_details");


    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

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

    $id = "C"."$course_id";


    $sql = "INSERT INTO course_details (course_id,trade,course_name,course_type, type, accredit_level, duration,   medium,required_qualification,student_count) VALUES ('$id', '$trade', '$course_name', '$course_type', '$type', '$accredit_level', '$duration', '$medium', '$required_qualification', '$student_count')";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";


        $link2 = mysqli_connect("localhost", "root", "", "course_info");


        if($link2 === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $course_id =  $_POST["course_id"];
        $sql2 = "delete from modules where course_id = $course_id";

        $query = "SELECT id, id_key, name, file_name, file_path, description, added_date, remove_date FROM temporary_news WHERE id = '$id'";
        $result = mysqli_query($link,$query);
        $data = mysqli_fetch_array($result);
        $id_key = $data[1];
        $name = $data[2];
        $file_name = $data[3];
        $file_path = $data[4];
        $description = $data[5];
        $added_date = $data[6];
        $remove_date = $data[7];

        if(mysqli_query($link2, $sql2)){

            $sql3 = "delete from courses where id = $course_id";

            if(mysqli_query($link2, $sql3)){

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


?>
