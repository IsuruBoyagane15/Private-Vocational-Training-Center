<?php

$link = mysqli_connect("localhost", "root", "", "applicantdetails_hrselected");

$query = "select * from selected_student_details";
$result = mysqli_query($link,$query);


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_HoI_registration.css">

	<script src="js/jquery-3.3.1.js"></script>
    <script src="js/HoI_registration_buttons.js" type="text/javascript"></script>


</head>
<body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>

    <nav class="navigate">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="HoI.php">#to profile</a></li>
      </ul>
    </nav>

	<div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>


	<div class="container">
		<ul class = "students">
			<div class = "student_container">
				<li><h4>Selected Students</h4>
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

    <div class="body_navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="log-in.php">Log In</a></li>
      </ul>
    </div>

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>

</body>
</html>
