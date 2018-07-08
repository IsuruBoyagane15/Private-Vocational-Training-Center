<!DOCTYPE html>
<html>
<head>
  <link  rel="stylesheet" href="css\studentappliaction.css">
  <link rel="stylesheet" href="css\styles_header.css">
  <link rel="stylesheet" href="css\styles_footer.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/load_student_application.js" type="text/javascript"></script>
  <script src="js/validate_form_data.js" type="text/javascript"></script>


  <title>Online Application</title>
</head>
<body>
  <?php include_once("inc/header.php"); ?>
  <div class="lightbox" style="width:70%;margin-top:2vh;margin-left:17vw;">
  <h2>Online Application</h2>
  <span class="error">*required field</span><br><br>

  <form  method="POST"  id="student_form" action="dbOperations/db_student_applicant_details.php" >
    <label for="course_id">Course Id</label>
    <input disabled type="text" id="course_id" name="course_id" value=<?php echo $_GET["courseid"] ?>></input>

    <div id="details"></div>

    <label for="nic">NIC No</label>
    <input  type="text" class="contact" name="nic" id="id"  placeholder="Your id" required></input>
    <span class="error">Enter a valid NIC number</span>

    <label  for="medium">Medium</label>
    <input  type="text" list="media" name="medium" placeholder="prefered medium" required>
    <datalist id="media">
      <option value="English">
      <option value="Sinhala">
      <option value="Tamil">
    </datalist>
  </input>

    <label  for="nameini">Name With Initials</label>
    <input  type="text" class="contact" name="nameini" id="nameini" required></input>
    <span class="error">Enter a valid name</span><br>


    <label for="fullname">Fullname</label>
    <input  type="text"  class="contact" name="fullname" id="fullname" required></input>
    <span class="error">Enter a valid name</span><br>

    <label for="address">Address</label>
    <input  type="text" class="contact" name="address"  id="address" placeholder="Enter your permenent address" style="padding:0px 0px;" required></input>
    <span class="error">Enter a valid address</span><br>

    <label for="bday">Date of Birth</label>
    <input  type="Date" class="contact" name="bday" id="bday" required></input>
    <span class="error">Enter a valid birthday</span><br>

    <label for="age">Age</label>
    <input  type="text"  class="contact" name="age" id="age" required></input>
    <span class="error">Birthday and age does not match</span><br>



      <label for="gender">Gender</label><br>
      <div class="lightbox" style="width:90%;margin-left:2vw;height:7vh;padding:0.1vw 0.1vh;background-color:white;margin-left:2vw;margin-bottom:2vh;">
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked";?> <?php if(!isset($gender)) echo "requird";?>  value="Male">Male</input><br>
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female</input>
      </div><br>

    <label for="mobile">Telephone(Mobile)</label>
    <input type="text" class="contact" name="mobile" id="mobile" placeholder="(XXX)-XXX-XXXX" size="10" id="mobile"   required></input>
    <span class="error">Enter a valid mobile No</span><br>


    <label for="home">Telephone(Home)</label>
    <input  type="text" class="contact" name="home" id="home" placeholder="(XXX)-XXX-XXXX" size="10" ></input>
    <span class="error">Enter a valid phone No</span><br>

    <label for="email">Email-Address</label>
    <input  type="text" class="contact" name="email" id="email"  required></input>
    <span class="error">Enter a valid email</span><br>

    <label for="ol-year">Year of O/L</label>
    <input  type="year" class="contact" name="ol-year" id="ol-year" required></input>
    <span class="error">Enter a valid year</span><br>

    <label for="index-ol">O/L index number</label>
    <input  size=6 type="text" class="contact" name="index-ol" id="index-ol" required></input>
    <span class="error">Enter a valid index number</span><br>
    <div class="lightbox" style="width:90%;margin-left:2vw;margin-bottom:2vh;">
      <label for="maths">Mathematics</label>
      <input type="text" name="maths" list="grades" style="width:30%;margin-left:2vw;padding:0.3vw 0.1vh;height:4vh;" required>
      <datalist id="grades">
        <option value="A">
        <option value="B">
        <option value="C">
        <option value="S">
        <option value="F">
      </datalist>
    </input>
    <label for="science">Science</label>
    <input type="text" name="science" list="grades" style="width:30%;margin-left:2vw;padding:0.3vw 0.1vh;height:4vh;" required>
    <datalist id="grades">
      <option value="A">
      <option value="B">
      <option value="C">
      <option value="S">
      <option value="F">
    </datalist>
    <label for="english">English</label>
    <input type="text" name="english" list="grades" style="width:30%;margin-left:2vw;padding:0.3vw 0.1vh;height:4vh;" required>
    <datalist id="grades">
      <option value="A">
      <option value="B">
      <option value="C">
      <option value="S">
      <option value="F">
    </datalist>
  </input>
  </input>
</div>
    <label for="al-year">Year of A/L</label>
    <input  type="year" class="contact" name="al-year" id="al-year"></input>
    <span class="error">Enter a valid year</span><br>

    <label for="index-al">A/L index number</label>
    <input type="year" size=6 class="contact" name="index-al" id="index-al" ></input>
    <span class="error">Enter a valid index number</span><br>

    <label for="stream">A/L stream</label>
    <input type="text" list="streams" name="stream">
    <datalist id="streams">
      <option value="Art">
      <option value="Commerce">
      <option value="Physical">
      <option value="Biology">
      <option value="Other">
    </datalist>
  </input>
    <input class="btn" id="submit" type="submit" name="Submit"  style="float:right"></input>
 </form>
</div>





<?php include_once("inc/footer.php"); ?>

</body>
</html>
