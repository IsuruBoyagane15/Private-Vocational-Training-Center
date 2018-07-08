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
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_HoI_new_courses.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/navpannel.css">

	   <script src="js/jquery-3.3.1.js"></script>
    <script src="js/HoI_new_courses_buttons.js" type="text/javascript"></script>
    <script src="js/subnav.js" type="text/javascript"></script>

</head>
<body>

    <!--Including header file-->
<?php
    include_once("inc/header.php");
    include_once("inc/navpannel.php");
    $index = trim($_SESSION['username']);
    include_once("inc/subnavstaff.php");
    include_once("dbOperations/HoI_new_courses_db.php");
?>

    <input type = "hidden" name = "index" id = "index" value=<?php echo $index ?>>



	<div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>

	<div class="container">
    <h5>Pending Courses</h5>
		<ul class = "courses">
			<?php
				while($row = mysqli_fetch_assoc($result)){
			?>

			<div class = "course_container">
				<li><h4><?php echo($row['course_name']);?></h4>
					<table align ="center"  class ="ctable"  >
						<tr>
							<th>Course name</th>
							<th>Number of students</th>
							<th>Course Duration</th>
							<th>Trade</th>
							<th>Course Type</th>
							<th>Type</th>
							<th>Accredit Level</th>
							<th>Medium</th>
							<th>Required Qualification</th>
              <th class = "desc_h">Description</th>
							<th>ID</th>

						</tr>
						<tr class ="records">
							<td class = "course_name"><?php echo($row['course_name']);?></td>
							<td class = "student_count"><?php echo($row['student_count']);?></td>
							<td class = "duration"><?php echo($row['duration']);?></td>
							<td class = "trade"><?php echo($row['trade']);?></td>
							<td class = "course_type"><?php echo($row['course_type']);?></td>
							<td class = "type"><?php echo($row['type']);?></td>
							<td class = "accredit_level"><?php echo($row['accredit_level']);?></td>
							<td class = "medium"><?php echo($row['medium']);?></td>
							<td class = "required_qualification"> <?php echo($row['required_qualification']);?></td>
              <td class = "descrip"><?php echo($row['description']);?></td>
              <td class = "course_id"><?php echo($row['id']);?></td>


						<tr>
					</table>

					<?php
          $cid = mysqli_real_escape_string($link,$row['id']);
          $query2 = "SELECT modules.* FROM modules where course_id = $cid";
          $result2 = mysqli_query($link,$query2);

          ?>

					<table align = "center" id = "modules">
							<tr>
								<th>Module Name</th>
								<th>Lecturer</th>
								<th>Description</th>

							</tr>
						<?php
							while($row2 = mysqli_fetch_assoc($result2)){
						?>
							<tr>
								<td><?php echo($row2['module_name']);?></td>
								<td><?php echo($row2['lecturer']);?></td>
								<td><?php echo($row2['description']);?></td>

							<tr>
						<?php
							}
						?>
					</table>

					<div class = "buttons">
						<button class = "reject">Reject</button>
						<button class = "approve">Approve</button>

					</div>

				</li>
			</div>

			<?php
				}
			?>
		</ul>

		<div class="def_buttons">
			<button class = "def" id = "finish">Finish Now</button>
		</div>
	</div>


    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>

</body>
</html>
