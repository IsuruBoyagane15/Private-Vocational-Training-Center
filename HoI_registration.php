<?php                                     //access controlling
  session_start();
  if( !isset($_SESSION['signed_in']) ) {        //session not set
    header('location:index.php');
    exit();
  }else if( !$_SESSION['signed_in'] ){        //session set, but not signed_in
    header('location:index.php');
    exit();
  }else if( substr($_SESSION['username'], -1) != "H" ){        //session set, but not for HR
    header('location:index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HoI - Approve Students</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_HoI_registration.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/navpannel.css">

	  <script src="js/jquery-3.3.1.js"></script>
    <script src="js/HoI_registration_buttons.js" type="text/javascript"></script>
    <script src="js/subnav.js" type="text/javascript"></script>

</head>
<body>

    <!--Including header file-->
<?php
    include_once("inc/header.php");
    include_once("inc/navpannel.php");
    $index = trim($_SESSION['username']);
    include_once("inc/subnavstaff.php");
    include_once("dbOperations/HoI_registration_load_db.php");

?>

  <input type = "hidden" name = "index" id = "index" value=<?php echo $index ?>>


	<div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>


	<div class="container">
		<ul class = "students">
			<div class = "student_container">
        <h5>Selected Students</h5>
				<li>
					<table align ="center"  class ="student_table"  >
						<tr>
							<th>ID</th>
							<th>Course</th>
              <th>course_id</th>
              <th>nic</th>
							<th>Name With Initials</th>
              <th>Fullname</th>
              <th>Medium</th>
							<th>Address</th>
							<th>Gender</th>
              <th>Date of Birth</th>
							<th>Age</th>
              <th>Mobile</th>
              <th>Home</th>
              <th>Email</th>
							<th>appplied Date</th>
							<th>Selected Date</th>
						</tr>
						<?php
							while($row = mysqli_fetch_assoc($result)){
						?>
						<tr class ="records">
							<td class = "id"><?php echo($row['id']);?></td>
							<td class = "course"><?php echo($row['course']);?></td>
              <td class = "course_id"><?php echo($row['course_id']);?></td>
              <td class = "nic"><?php echo($row['nic']);?></td>
							<td class = "name_with_initials"><?php echo($row['name_with_initials']);?></td>
              <td class = "fullname"><?php echo($row['fullname']);?></td>
              <td class = "medium"><?php echo($row['medium']);?></td>
							<td class = "address"><?php echo($row['address']);?></td>
							<td class = "gender"><?php echo($row['gender']);?></td>
              <td class = "date_of_birth"><?php echo($row['date_of_birth']);?></td>
							<td class = "age"><?php echo($row['age']);?></td>
              <td class = "mobile"><?php echo($row['mobile']);?></td>
              <td class = "home"><?php echo($row['home']);?></td>
              <td class = "email"><?php echo($row['email']);?></td>
							<td class = "applied_date"><?php echo($row['applied_date']);?></td>
							<td class = "selected_date"><?php echo($row['selected_date']);?></td>
						</tr>
						<tr>

						<?php
							}
						?>

					</table>


				</li>
			</div>

		</ul>

		<div class="def_buttons">
			<button class = "def" id = "approve">Approve</button>
			<button class = "def" id = "cancel">Cancel</button>
		</div>
	</div>

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>

</body>
</html>
