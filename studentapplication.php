<!DOCTYPE html>
<html>
<head>
  <link  rel="stylesheet" href="css\studentappliaction.css">
  <link rel="stylesheet" href="css\styles_header.css">
  <link rel="stylesheet" href="css\styles_footer.css">
  <title>Online Application</title>
</head>
<body style="margin:20px;">
  <?php include_once("inc/header.php"); ?>
   <?php $idErr=$mediumErr=$nameErr=$FnameErr=$addressErr=$bdayErr=$genderErr=$MErr=$emailErr=$ageErr="";
   $nameini=$id=$medium=$fullname =$address =$bday =$gender =$mobile =$home=$age=$course= "";
   $email= $field=$appdate="";

   //define error variables

   if ($_SERVER["REQUEST_METHOD"]=="POST"){
     if(!empty($_POST["course"])){
         $course=test_input($_POST["course"]);
     }
     if(empty($_POST["nameini"])){
         $nameErr="Name with initials is required";
     }
     else{
       $nameini=test_input($_POST["nameini"]);
     }
     if(empty($_POST["id"])){
         $idErr="NIC is required";
     }
     else{
       $id=test_input($_POST["id"]);
     }
     if(empty($_POST["medium"])){
         $mediumErr="medium is required";
     }
     else{
       $medium=$_POST["medium"];
     }

     if(empty($_POST["fullname"])){
         $FnameErr="FullName is required";
     }
     else{
       $fullname=test_input($_POST["fullname"]);
       if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
       $FnameErr = "Only letters and white space allowed";
     }
     }
     if(empty($_POST["address"])){
         $addressErr="Address is required";
     }
     else{
       $address=test_input($_POST["address"]);
     }

     if(empty($_POST["bday"])){
         $bdayErr="Birthday is required";
     }
     else{
       $bday=$_POST["bday"];
     }
     if(empty($_POST["gender"])){
         $genderErr="Gender is required";
     }
     else{
       $gender=test_input($_POST["gender"]);
     }
     if(empty($_POST["mobile"])){
         $MErr="Mobile Number is required";
     }
     else{
       $mobile=test_input($_POST["mobile"]);
     }
     if(!empty($_POST["home"])){
          $home=test_input($_POST["home"]);
     }
     if(empty($_POST["email"])){
         $emailErr="E-mail is required";
     }
     else{
       $email=test_input($_POST["email"]);
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
       }
     }
     if(empty($_POST["age"])){
         $ageErr="Age is required";
     }
     else{
       $age=$_POST["age"];
     }
   }
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
 ?>
  <h2>Online Application</h2>
  <p style="text-align:left;">"Fill this application to apply"</p><br>
  <span class="error">*required field</span><br><br>

  <form  method="post" action="<?php echo htmlspecialchars("$_SERVER[PHP_SELF]");?>" onsubmit="myFunction()">
    Course:<br><input type="text" name="course" value="<?php echo $field;?>" style="width:75%"><br><br>
    NIC No:<br><input type="text" name="id" value="<?php echo $id ;?>"  style="width:10%" placeholder="Your id" required>
    <span class="error" >*<?php echo $idErr;?></span><br><br>
    Medium:<br><input list="media" name="medium" value="<?php echo $medium ; ?>" placeholder="prefered medium" required>
    <span class="error">*<?php echo $mediumErr;?></span><br><br>
    <datalist id="media">
      <option value="English">
      <option value="Sinhala">
      <option value="Tamil">
    </datalist>

    Name With Initials:<br><input type="text" name="nameini" value="<?php echo $nameini ; ?>" required>
    <span class="error">* <?php echo $nameErr;?></span><br><br>
    Fullname:<br><input type="text"  name="fullname" value="<?php echo $fullname ;?>" required>
    <span class="error">* <?php echo $FnameErr;?></span><br><br>
    Address:<br><input type="textarea" name="address" value="<?php echo $address ;?>"  style="padding:0px 0px;"required>
    <span class="error">* <?php echo $addressErr;?></span><br><br>
    Date of Birth:<br>
    <input type="Date" name="bday" value="<?php echo $bday ;?>" required>
    <span class="error">*<?php echo $bdayErr;?></span><br><br>
    Age:<br><input type="text" size="2" name="age" maxlenght="3" value="<?php echo $age ;?>" style="width:4%;" required>
    <span class="error">*<?php echo $ageErr;?></span><br><br>
    Gender:<br>
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked";?> <?php if(!isset($gender)) echo "required";?>  value="Male">Male<br>
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
    <span class="error">*<?php echo $genderErr;?></span><br><br>
    Telephone(Mobile):<br><input type="text" name="mobile" value="<?php echo $mobile ;?>" style="width:10%;"required>
    <span class="error">*<?php echo $MErr;?></span><br>
    Telephone(Home):<br><input type="text" name="home" value="<?php echo $home ;?>" style="width:10%;"><br><br>
    Email-Address:<br><input type="text" name="email" value="<?php echo $email ; ?>" style="width:50%;" required>
    <span class="error">*<?php echo $emailErr;?></span><br><br>
    <input class="btn" type="submit" name="Submit" Value="Submit Application" >
 </form>

 <?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername="localhost";
    $username="root";
    $password="";
    $database="applicantDetails";

    $conn=new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
      die("connection failed: ".$conn->connect_error);
    }
    else{
      echo "connected successfully<br>";
    }
    //creating data base
    /*$sql="CREATE DATABASE applicantDetails";
    if($conn->query($sql)===TRUE){
      echo "DATABASE applicantDetails created successfully";
    }
    else{
      echo "Error creating database: ".$conn->error;
    }*/
    //creating student_details table
    /*$sql="CREATE TABLE STUDENT_DETAILS(id INT(9) UNSIGNED,course VARCHAR(30) NOT NULL,name_with_initials VARCHAR(30) NOT NULL,fullname VARCHAR(30) NOT NULL,medium VARCHAR(15) NOT NULL,
         address VARCHAR(50) NOT NULL,gender VARCHAR(10) NOT NULL,date_of_birth DATE NOT NULL,age DATE NOT NULL,mobile VARCHAR(12) NOT NULL,home VARCHAR(12),email VARCHAR(50) NOT NULL,applied_date TIMESTAMP)";

   if ($conn->query($sql) === TRUE) {
       echo "Table MyGuests created successfully";
   } else {
       echo "Error creating table: " . $conn->error;
   }

   $conn->close();
   */
   $appdate=date("Y-m-d");
   $stmt=$conn->prepare("INSERT INTO STUDENT_DETAILS(id,course,name_with_initials,fullname,medium,address,gender,date_of_birth,age,mobile,home,email,applied_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("isssssssiiiss",$id,$course,$nameini,$fullname,$medium,$address,$gender,$bday,$age,$mobile,$home,$email,$appdate);
   $stmt->execute();
   echo "new record created sucessfully";
   $conn->close();
     echo "<h2>Your input:</h2>";
     echo $course;
     echo "<br>";
     echo $nameini;
     echo "<br>";
     echo $fullname;
     echo "<br>";
     echo $id;
     echo "<br>";
     echo $medium;
     echo "<br>";
     echo $address;
     echo "<br>";
     echo $gender;
     echo "<br>";
     echo $bday;
     echo "<br>";
     echo $mobile;
     echo "<br>";
     echo $home;
     echo "<br>";
     echo $email;
  }
 ?>
 <div class="popup" >
  <span class="popuptext" id="myPopup">Submission Successful!</span>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>



<?php include_once("inc/footer.php"); ?>

</body>
</html>
