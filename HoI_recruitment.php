<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_HoI_recruitment.css">

	<script src="js/jquery-3.3.1.js"></script>
    <script src="js/HoI_recruitment_buttons.js" type="text/javascript"></script>


</head>
<body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>
    <?php include_once("dbOperations/HoI_recruitment_db.php"); ?>

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
		<ul class = "staff">
			<?php
				while($row = mysqli_fetch_assoc($result)){
			?>

			<div class = "staff_container">
				<li>
					<table align ="center"  class ="stable"  >
						<tr>
							<th>ID</th>
							<th>Staff Name</th>
              <th>address</th>
              <th>nic</th>
              <th>Gender</th>
              <th>Date of Birth</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Applied Date</th>
              <th>Selected Date</th>
              <th>Approve</th>
              <th>Reject</th>

						</tr>
						<tr class ="records">
							<td class = "staff_id"><?php echo($row['id']);?></td>
							<td class = "name"><?php echo($row['fullname']);?></td>
              <td class = "address"><?php echo($row['address']);?></td>
              <td class = "nic"><?php echo($row['nic']);?></td>
              <td class = "gender"><?php echo($row['gender']);?></td>
              <td class = "date_of_birth"><?php echo($row['date_of_birth']);?></td>
              <td class = "mobile"><?php echo($row['mobile']);?></td>
              <td class = "email"><?php echo($row['email']);?></td>
              <td class = "applied_date"><?php echo($row['applied_date']);?></td>
              <td class = "selected_date"><?php echo($row['selected_date']);?></td>
              <td class = "approval"><button>Approve</button></td>
              <td class = "rejection"><button>Reject</button></td>
						<tr>
					</table>

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
