<!DOCTYPE html>
<html>
<head>
  <link  rel="stylesheet" href="css\studentappliaction.css">
  <link rel="stylesheet" href="css\styles_header.css">
  <link rel="stylesheet" href="css\styles_footer.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/load_student_application.js" type="text/javascript"></script>


  <title>Online Application</title>
</head>
<body style="margin:20px;">
  <?php include_once("inc/header.php"); ?>
  <h2>Online Application</h2>
  <p style="text-align:left;">"Fill this application to apply"</p><br>
  <button id="hide">Hide</button>
  <span class="error">*required field</span><br><br>

  <form  method="post"  id="student_form" action="dbOperations/db_student_applicant_details.php" >
    <label for="course_id">Course Id</label>
    <input type="text" id="course_id" name="course_id" value=<?php echo $_GET["courseid"] ?> style="width:25%"><br><br>

    <div id="details"></div>

    <label for="nic">NIC No</label>
    <input type="text" name="nic" id="nic"  style="width:10%" placeholder="Your id" required><br><br>

    <label for="medium">Medium</label>
    <input list="media" name="medium"  placeholder="prefered medium" required><br><br>
    <datalist id="media">
      <option value="English">
      <option value="Sinhala">
      <option value="Tamil">
    </datalist>

    <label for="nameini">Name With Initials</label>
    <input type="text" name="nameini" id="nameini" required><br><br>



    <label for="fullname">Fullname</label>
    <input type="text"  name="fullname" id="fullname" required><br><br>


    <label for="address">Address</label>
    <input type="textarea" name="address"  id="address" placeholder="Enter your permenent address" style="padding:0px 0px;" required><br><br>


    <label for="bday">Date of Birth</label>
    <input type="Date" name="bday" id="bday" required><br><br>

    <label for="age">Age</label>
    <input type="text" size="2" name="age" maxlenght="2"   style="width:4%;" required><br><br>



    <label for="gender">Gender</label><br>
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked";?> <?php if(!isset($gender)) echo "required";?>  value="Male">Male<br>
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female<br><br>


    <label for="mobile">Telephone(Mobile)</label>
    <input type="text" name="mobile" placeholder="(XXX)-XXX-XXXX" size="10" id="mobile"  style="width:10%;" required><br><br>


    <label for="home">Telephone(Home)</label>
    <input type="text" name="home" placeholder="(XXX)-XXX-XXXX" size="10" id="home"  style="width:10%;"><br><br>

    <label for="email">Email-Address</label>
    <input type="text" name="email"   style="width:50%;" required><br><br>


    <input class="btn" id="submit" type="submit" name="submit"   Value="Submit Application" >
 </form>






<?php include_once("inc/footer.php"); ?>

</body>
</html>
