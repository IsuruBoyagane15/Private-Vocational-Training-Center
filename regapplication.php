<!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>VTI-RegAppLecturer</title>

      <!--css styles-->
      <link rel="stylesheet" href="css/styles_header.css">
      <link rel="stylesheet" href="css/Student_registration_appl.css">
      <link rel="stylesheet" href="css/styles_footer.css">
    <style>
    .error{
    	display: none;
    	margin-left: 10px;
    }

    .error_show{
    	color: red;
      font-size: 105%;
      margin-right: 5vw;

    }
    input.invalid{
    	border: 2px solid red;
    }
    input.valid, textarea.valid{
    	border: 2px solid green;
    }
    span{
      display:none;
      margin-right:2vw;
      float:right;
    }

    input[type=text]{
      width:70%;
      padding:6px 10px;
      margin:8px 0;
      box-sizing: border-box;
      resize: vertical;

    }
    input[type=textarea]{
      width:400px;
      height: 100px;
      padding:3px 3px;
      margin:0 0;
      box-sizing: border-box;
      resize: none;
    }
    input[type="text"],select{
      width:90%;
      display:block;
      height:6vh;
      border-color: lightgrey;
      box-sizing: border-box;
      border-style: solid;
      border-width: thin;
      padding:0.1vw 0.1vh;
      margin-bottom: 2vw;
      font-size: 105%;
      color:solid black;
      margin-left:2vw;
      padding-left: 0.5vw;
    }
    input[type="date"]{
      width:90%;
      display:block;
      height:6vh;
      border-color: lightgrey;
      box-sizing: border-box;
      border-style: solid;
      border-width: thin;
      padding:1vw 0.1vh;
      margin-bottom: 2vw;
      font-size: 105%;
      color:solid black;
      margin-left:2vw;
    }
    input[type="year"]{
      width:90%;
      display:block;
      height:6vh;
      border-color: lightgrey;
      box-sizing: border-box;
      border-style: solid;
      border-width: thin;
      padding:1vw 0.1vh;
      margin-bottom: 1vw;
      font-size: 105%;
      color:solid black;
      margin-left:2vw;
    }
    input:focus{
       background-color:lightblue;
    }
    input[type=submit]{

      text-align:center;
      font-size: 120%;
      cursor: pointer;
    }
    input[type=radio]{
      cursor:pointer;
      display: run-in;
      height:2vh;

    }
 </style>

<script src="js/jquery-3.3.1.js"></script>
<script src="js/addLecDetails.js" type="text/javascript"></script>
<script src="js/validate_lecturer_form.js" type="text/javascript"></script>
</head>

<body>
    <?php include_once("inc/header.php"); ?>
<div class ="regapplication">
<div class ="headerpart">
<br><h1 align="center"><marquee direction="left"><font face="Algerian">Vocational Training Institute</h1></font></marquee>

</div>
<div class="linkbar">
<center>
<a href="index.php">Home</a>&nbsp&nbsp&nbsp&nbsp
<a href="news.php">News</a>&nbsp&nbsp&nbsp&nbsp
<a href="courses.php">Courses</a>&nbsp&nbsp&nbsp&nbsp
<a href="about.php">About</a>&nbsp&nbsp&nbsp&nbsp
<a href="log-in.php">Login</a>
</center>
</div>
<div class="bodypart">
<div class="application">


<h2 align="center"> <font face="Agency Fb" color="black">Registration Appication </font></h2>
<span class="error">*required field</span><br><br>
<p color="purple"><b>Fill this and submit</b></p>
<form action="dbOperations/addLecDetails_db.php" id="lecturer_form" method="POST"><font face ="Andalus">
<ol>
<li>Course :<select name="course">
<option value= "Automobile Repair and Maintainance">Automobile Repair and Maintainance </option>
<option value= "Building and Constructions">Building and Constructions</option>
<option value= "Agriculture Plantation and Livestock">Agriculture Plantation and Livestock</option>
<option value= "Electrical and Electronic Telecommunication" selected >Electrical and Electronic Telecommunication</option>
<option value= "Fisheries & Aquaculture" >Fisheries & Aquaculture</option>
<option value= "Food Technology" >Food Technology</option>
<option value= "Hotel and Tourism" >Hotel and Tourism</option>
<option value= "Information Communication and Multimedia Technology" >Information Communication and Multimedia Technology</option>
<option value= "Metal and Light Engineering" >Metal and Light Engineering</option>
<option value= "Wood Related" >Wood Related</option>
<option value= "Textile and Garments" >Textile and Garments</option>
<option value= "Other" >Other</option>
</select></li><br><br>

<li>Name with Initials:<input  type="text" name="name_ini" id="nameini" required></input>
<span class="error">Enter a valid name</span>
</li><br>
<li>Full Name :<input  type="text"  name="fullname" id="fullname" required></input>
<span class="error">Enter a valid name</span>
</li><br>
<li>Personal Address :<input  type="text" name="address"  id="address" placeholder="Enter your permenent address" style="padding:0px 0px;" required></input>
<span class="error">Enter a valid address</span>
</li><br>
<li>NIC Number :<input  type="text" name="nic" id="id"  placeholder="Your id" required></input>
  <span class="error">Enter a valid NIC number</span>
</li><br>
<li>Email :<input  type="text" name="email" id="email"  required></input>
  <span class="error">Enter a valid email address</span>
</li><br>
<li>Mobile Number :<input type="text" name="mob" id="mobile" placeholder="(XXX)-XXX-XXXX" size="10" required></input>
  <span class="error">Enter a valid mobile number</span>
</li><br>
<li>Telephone Number(Home) :<input  type="text" name="home" id="home" placeholder="(XXX)-XXX-XXXX" size="10" ></input>
  <span class="error">Enter a valid telephone number</span>
</li><br>
<li>Date of Birth :<input  type="Date"  name="dob" id="bday" required></input>
  <span class="error">Enter a valid date</span>
</li><br>
<li>Age :<input  type="text"  name="age" id="age" required></input>
  <span class="error">Age and birthday doesn't match</span>
<br></li><br>


<li>Gender :<br>
  <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked";?> <?php if(!isset($gender)) echo "requird";?>  value="Male">Male</input><br>
  <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female</input>

</li><br>
<hr color = "purple">
<li><b>Education </b></li><br><br>
<ul>
<li>GCE O/L :</li><br>
Year :
<select name="year_ol">
<option value= "2010" >2010</option>
<option value= "2011" >2011</option>
<option value= "2012" >2012</option>
<option value= "2013" >2013</option>
<option value= "2014" >2014</option>
<option value= "2015" >2015</option>
<option value= "2016" >2016</option>
<option value= "2017" selected >2017</option>
</select>
<br><br>


<li>GCE A/L :</li><br>
Year :
<select name="year_al">
<option value= "2012" >2012</option>
<option value= "2013" >2013</option>
 <option value= "2015" >2015</option>
<option value= "2016" >2016</option>
<option value= "2017" selected>2017</option>
</select>
Index Number :<input type="year" size=6  name="indexno2" id="index-al" ></input>
<span class="error">Enter a valid index number</span>

Stream :
<select name="stream" >
<option value= "Arts" >Arts</option>
<option value= "Commerce" >Commerce</option>
<option value= "Physical Science" selected>Physical Science</option>
<option value= "Bio Science" >Bio Science</option>
<option value= "Technology" >Technology</option>
<option value= "IT" >IT</option>
</select></ul><br><br>
<li>Higher Educational Qualifications :<br><input type="textarea" style="height:15vh;margin-left:4vw;" name="degree" id="qualification" placeholder="Enter your higher educational qualifications..." style="padding:0px 0px;" required></input>
<span class="error">Enter a valid details</span>
</li><br><br>
<li>Medium :
  <select name="medium">
  <option value= "English" selected >English</option>
  <option value= "Tamil" >Tamil</option>
  <option value= "Sinhala">Sinhala</option>
  </select></li><br>

<br><br>


<hr color = "purple">
<br><br></ol>
<input type="submit" value="Cancel" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">
<input type="submit" value="Clear All" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">
<input type="submit" value="Submit" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">
<input type="submit" value="Previous" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">


</div>
<br><br><br>
<!-- <div class="coursedetails"><h2 align="center">Course Details</h2>

<div class="courses">
<marquee direction="up", height="100%">
<font face ="Andalus">
<h4>1. Agriculture Plantation and Livestock</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Plant Nursery Development Assistant<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification : </font>Pass Year 9</p><br>
<hr>

<h4>2. Automobile Repair and Maintainance</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Automobile Electrician<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>

<h4>3. Building and Construction</h4><br>
<p><font color="grey">Course Name : </font> National Diploma - Quantity Surveyor<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>5<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 2 Subjects in G.C.E(A/L) in Maths Stream</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Draughtsperson<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>1<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>


<h4>4. Electrical and Electronic Telecommunication</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Electric Motor Winder<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Sat for G.C.E.(O/L)</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Electronic Appliances Technician<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L) with Maths and Science</p><br>
<hr>

<h4>5. Fisheries & Aquaculture</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Outboard Motor Mechanic<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Sat for G.C.E.(O/L)</p><br>
<hr>

<h4>6. Food Technology</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Fruit and Vegetable Processor<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass Year 9</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Baker<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass Year 9</p><br>
<hr>

<h4>7. Hotel and Tourism</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Room Attendant<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L) with Maths and Science</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Cook<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font></p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Waiter/Steward<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Sat for G.C.E.(O/L)</p><br>
<hr>

<h4>8. Information Communication and Multimedia Technology</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - ICT Technician<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L) with Maths and Science</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Computer Hardware Technician (A Plus)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L) with Credit Pass for English</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - NVQ 5 in ICT<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>5<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass in NCICT &Pass 6 Subjects in G.C.E.(O/L) with Credit Passes for English, Maths and Science</p><br>
<hr>

<h4>9. Metal and Light Engineering</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Machinist (General)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium :</font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Welder<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 3 Subjects in G.C.E.(O/L)</p><br>
<hr>

<h4>10. Wood Related</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Wood Craftsman(Furniture/Building)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>18-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass Year 9</p><br>
<hr>

<h4>11. Textile and Garments</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Garment production Supervisor<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Tailor (Ladies & Gents)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass Year 9</p><br>
<hr>

<h4>12. Other</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Pre School Teacher<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium :</font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Pass Year 9</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Litho Mechine Operator<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>2<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium :</font> Sinhala<br><br>
<font color="grey">Required qualification :</font>Sat for G.C.E.(A/L)</p><br>
<hr>
</font>
</marquee>
</div>
</div> -->

</div></div></div>
<div class="body_navigation">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="courses.php">Courses</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="log-in.php">Log In</a></li>
  </ul>
</div>


<?php include_once("inc/footer.php"); ?>




</body>
</html>
