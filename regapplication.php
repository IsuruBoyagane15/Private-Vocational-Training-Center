<html><head>
<title>Vocational Training centre application</title>
<link rel="stylesheet" type="text/css" href="css/Student_registration_appl.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/addStudDetails.js" type="text/javascript"></script>
</head>

<body>
<div class ="regapplication">
<div class ="headerpart">
<br><h1 align="center"><marquee direction="left"><font face="Algerian">Vocational Training Institute</h1></font></marquee>

</div>
<div class="linkbar">
<center>
<a href "home.html">Home</a>&nbsp&nbsp&nbsp&nbsp
<a href "news.html">News</a>&nbsp&nbsp&nbsp&nbsp
<a href "courses.html">Courses</a>&nbsp&nbsp&nbsp&nbsp
<a href "about.html">About</a>&nbsp&nbsp&nbsp&nbsp
<a href "login.html">Login</a>
</center>
</div>
<div class="bodypart">
<div class="application">


<h2 align="center"> <font face="Agency Fb" color="black">Registration Appication </font></h2>
<form action="dbOperations/addStudDetails_db.php" method="POST"><font face ="Andalus">
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

<li>Full Name :<input type="text" name="fullname"></li><br>
<li>Personal Address :<input type="text" name="address"></li><br>
<li>NIC Number :<input type="text" name="nicno"></li><br>
<li>Email :<input type="text" name="email"></li><br>
<li>Mobile Number :<input type="text" name="mob"></li><br>
<li>Date of Birth :<input type="text" name="dob"></li><br>
<li>Higher Education Qualifications :<input type="text" name="degrees"></li><br>

<li>Gender :
<input type="radio" name="gender" value="f">Female</input>
<input type="radio" name="gender" value="m">Male</input></li><br>
<hr color = "purple">
<li><b>Education </b></li><br><br>
<ul>
<li>GCE O/L :</li><br>
Year :
<select name="year_ol">
<option value= "2010" >2010</option
<option value= "2011" >2011</option>
<option value= "2012" >2012</option>
<option value= "2013" >2013</option>
<option value= "2014" >2014</option>
<option value= "2015" >2015</option>
<option value= "2016" >2016</option>
<option value= "2017" selected >2017</option>
</select>
Index Number :<input type="text" name="indexno1">
Mathematics :
<select name="mathematics">
<option value= "A" >A</option>
<option value= "B" >B</option>
<option value= "C" selected>C</option>
<option value= "S" >S</option>
<option value= "W" >W</option>
</select>
English :
<select name="english">
<option value= "A" >A</option>
<option value= "B" >B</option>
<option value= "C" selected>C</option>
<option value= "S" >S</option>
<option value= "W" >W</option>
</select>
Science :
<select name="science">
<option value= "A" >A</option>
<option value= "B" >B</option>
<option value= "C" selected>C</option>
<option value= "S" >S</option>
<option value= "W" >W</option>
</select>
ICT(If done) :
<select name="ict">
<option value= "A" >A</option>
<option value= "B" >B</option>
<option value= "C" selected>C</option>
<option value= "S" >S</option>
<option value= "W" >W</option>
</select>
<br><br>


<li>GCE A/L :</li><br>
Year :
<select name="year_al">
<option value= "2012" >2012</option>
<option value= "2013" >2013</option>
<option value= "2014" >2014</option>
<option value= "2015" >2015</option>
<option value= "2016" >2016</option>
<option value= "2017" selected>2017</option>
</select>
Index Number :<input type="text" name="indexno2">
Stream :
<select name="stream">
<option value= "Arts" >Arts</option>
<option value= "Commerce" >Commerce</option>
<option value= "Physical Science" selected>Physical Science</option>
<option value= "Bio Science" >Bio Science</option>
<option value= "Technology" >Technology</option>
<option value= "IT" >IT</option>
</select></ul>
<br><br><br>

<hr color = "purple">
<li><b>Extra Curricular Activities </b></li><br><br>
Sports :<input type="text" name="sports">
Clubs and societies :
<input type="text" name="cas"><br><br><br><br>

<hr color = "purple">
<li>How did you get to know about our institute? :
<select name="howdidyouknow">
<option value= "1" >from Facebook</option>
<option value= "2" >from a friend</option>
<option value= "3" selected>from handbills</option>
<option value= "4" >by newspaper advertisements</option>
<option value= "5" >from the website</option>
<option value= "6" >other</option>
</select></font><br></li><br><br></ol>
<input type="submit" value="Save All" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">
<input type="submit" value="Cancel" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">
<input type="submit" value="Clear All" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">
<input type="submit" value="Submit" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">
<input type="submit" value="Previous" style="color:MidnightBlue;border-radius:10px;background:LightGrey;">


</div>
<div class="coursedetails"><h2 align="center">Course Details</h2>

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
<font color="grey">Required qualificartion : </font>Pass Year 9</p><br>
<hr>

<h4>2. Automobile Repair and Maintainance</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Automobile Electrician<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>

<h4>3. Building and Construction</h4><br>
<p><font color="grey">Course Name : </font> National Diploma - Quantity Surveyor<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>5<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 2 Subjects in G.C.E(A/L) in Maths Stream</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Draughtsperson<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>1<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>


<h4>4. Electrical and Electronic Telecommunication</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Electric Motor Winder<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Sat for G.C.E.(O/L)</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Electronic Appliances Technician<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L) with Maths and Science</p><br>
<hr>

<h4>5. Fisheries & Aquaculture</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Outboard Motor Mechanic<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Sat for G.C.E.(O/L)</p><br>
<hr>

<h4>6. Food Technology</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Fruit and Vegetable Processor<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass Year 9</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Baker<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass Year 9</p><br>
<hr>

<h4>7. Hotel and Tourism</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Room Attendant<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L) with Maths and Science</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Cook<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font></p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Waiter/Steward<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Sat for G.C.E.(O/L)</p><br>
<hr>

<h4>8. Information Communication and Multimedia Technology</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - ICT Technician<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L) with Maths and Science</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Computer Hardware Technician (A Plus)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L) with Credit Pass for English</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - NVQ 5 in ICT<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>5<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass in NCICT &Pass 6 Subjects in G.C.E.(O/L) with Credit Passes for English, Maths and Science</p><br>
<hr>

<h4>9. Metal and Light Engineering</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Machinist (General)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium :</font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Welder<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 3 Subjects in G.C.E.(O/L)</p><br>
<hr>

<h4>10. Wood Related</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Wood Craftsman(Furniture/Building)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>18-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass Year 9</p><br>
<hr>

<h4>11. Textile and Garments</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Garment production Supervisor<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass 6 Subjects in G.C.E.(O/L)</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Tailor (Ladies & Gents)<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>4<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium : </font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass Year 9</p><br>
<hr>

<h4>12. Other</h4><br>
<p><font color="grey">Course Name : </font> National Certificate - Pre School Teacher<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>3<br><br>
<font color="grey">Duration : </font>12-M<br><br>
<font color="grey">Medium :</font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Pass Year 9</p><br>
<hr>

<p><font color="grey">Course Name : </font> National Certificate - Litho Mechine Operator<br><br>
<font color="grey">Course Type : </font>Full<br><br>
<font color="grey">NVQ or Non NVQ : </font>NVQ<br><br>
<font color="grey">Accredit Level : </font>2<br><br>
<font color="grey">Duration : </font>6-M<br><br>
<font color="grey">Medium :</font> Sinhala<br><br>
<font color="grey">Required qualificartion :</font>Sat for G.C.E.(A/L)</p><br>
<hr>
</font>
</marquee>
</div>
<div class="pics">

</div>
</div>

</div>






</div>

</body>
</html>
