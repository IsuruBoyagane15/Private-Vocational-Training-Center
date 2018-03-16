<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocational Training Institute</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_add_modules.css">

</head>
<body>
    <!--navigation panel-->
    <nav class="navigate">
      <ul>
        <li><a href="index.php" class="selected">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="log-in.php">Log In</a></li>
      </ul>
    </nav>
    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>
    
    <nav class data>
        <ul>
            <li>Course name is <?php echo $_POST["name"];   ?></li>
            <li><?php echo $_POST["student_count"]." students can be selected.";   ?></li>
            <li><?php echo $_POST["duration"]."x14 weeks long course."   ?></li>
        </ul>
    </nav>
    
    <table style="width:100%">
  <tr>
    <th>Module Name</th>
    <th>Module Code</th> 
    <th>Lecturer</th>
  </tr>
  <tr>
    <td><input type="text"></td>
    <td><input type="text"></td> 
    <td><select>
            <option value >lecturer 1 </option>
            <option value >lecturer 2 </option>
            <option value >lecturer 3 </option>
        
        </select>
    </td>
  </tr>
  <tr>
    <td><select>
            <option value >Semester 1 </option>
            <option value >Semester 2 </option>
            <option value >Semester 3 </option>
        </select>
    </td>  
    <td><input type="text"></td>
    s
  </tr>
  <tr>
    <td><input type="text"></td>
    <td><input type="text"></td> 
    <td><select>
            <option value >lecturer 1 </option>
            <option value >lecturer 2 </option>
            <option value >lecturer 3 </option>
        </select>
    </td>
  </tr>
  <tr>
    <td><input type="text"></td>
    <td><input type="text"></td> 
    <td><select>
            <option value >lecturer 1 </option>
            <option value >lecturer 2 </option>
            <option value >lecturer 3 </option>
        </select>
    </td>
  </tr>
</table>
    
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
