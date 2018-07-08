<?php                                     //access controlling
  session_start();
  if( !isset($_SESSION['signed_in']) ) {        //session not set
    header('location:index.php');
    exit();
  }else if( !$_SESSION['signed_in'] ){        //session set, but not signed_in
    header('location:index.php');
    exit();
  }else if( substr($_SESSION['username'], -1) != "D" ){        //session set, but not for HR
    header('location:index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Course</title>


    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_create_course.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/navpannel.css">

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/insert_module.js" type="text/javascript"></script>
    <script src="js/create_course_buttons.js" type="text/javascript"></script>
    <script src="js/subnav.js" type="text/javascript"></script>

</head>
<?php

    include_once("inc/header.php");
    include_once("inc/navpannel.php");
    $index = trim($_SESSION['username']);
    include_once("inc/subnavstaff.php");
?>
    <input type = "hidden" name = "index" id = "index" value=<?php echo $index ?>>


<body>


    <?php include_once("inc/header.php"); ?>
    <?php include_once("inc/navpannel.php"); ?>
    <?php include_once("dbOperations/create_course_trades_db.php"); ?>
    <div class = "added_php">
      <?php include_once("dbOperations/create_course_lecturers_db.php"); ?>
    </div>




	<div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>

    <div class = "basic_data">
      <h5>Create a New Course</h5>
      <form action="dbOperations/create_course_db.php " method = "post">

        <label>Course Name</label><br>
        <input type="text" id="name" name="name" placeholder="Enter Course Name"><br>



        <label>Number of Students</label><br>
        <input type="number" id="student_count" name="student_count" placeholder ="Enter Number of Students"><br>



        <label>Duration (Months)</label><br>
        <input type="number" id="duration" name="duration" placeholder = "Enter Number of Months"><br>



    		<label>Trade</label><br>
    		<input list="trades" placeholder="Enter Trade Field" id = "trade">
    		  <datalist id="trades">
            <?php
      				while($row = mysqli_fetch_assoc($trades)){
            ?>
    			     <option>
                  <?php echo($row['trade']); ?>
               </option>
            <?php
              }
            ?>
    		  </datalist>
    		<br>



    		<label>Course Type</label><br>
            <select id = "course_type" name="course_type" class = "values">
    		        <option  value = "" selected>Select Course Type</option>
                <option value="full" >Full</option>
                <option value="part">Part</option>
            </select>
    		<br>



    		<label>Type</label><br>
            <select id = "type" name="type" class = "values">
    			       <option  value = "" selected>Select Type</option>
            	   <option value="NVQ" >NVQ</option>
                 <option value="NON-NVQ">NON-NVQ</option>
    		    </select>
    		<br>



    		<label>Accredit Level</label><br>
        <select id = "accredit_level" name="accredit_level" class = "values">
             <option  value = "" selected>Select Accredit Level</option>
             <option value=1 >1</option>
             <option value=2 >2</option>
             <option value=3 >3</option>
             <option value=4 >4</option>
             <option value=5 >5</option>
             <option value="certificate">Certificate</option>
             <option value="diploma">Diploma</option>
        </select>
    		</form><br>



    		<label>Medium</label><br>
            <select id = "medium" name="medium" class = "values">
    		  		<option  value = "" selected>Select Medium</option>
              		<option value="english" >English</option>
              		<option value="sinhala">Sinhala</option>
    		</select><br>



    		<label>Required Qulification </label><br>
    		  <input type="text" id="required_qualification" name="required_qualification" placeholder="Enter Required Qualifications"><br>
        <br>
      </form>
	</div>

    <div class="container_modules">
      <nav class="modules">
        <ul id="que_list">

        </ul>
      </nav>
    </div>


    <div class="container_buttons">
      <button type="submit" name="cancel" class="assign_button" id="cancel">Cancel</button>
      <button type="submit" name="new-question" class="assign_button" id="new-question">Add New Module</button>
      <button type="submit" name="complete" class="assign_button" id="done">Create Course</button>
	</div>
	<div class = "footer">
    	<?php include_once("inc/footer.php"); ?>
	</div>
  </body>
</html>
