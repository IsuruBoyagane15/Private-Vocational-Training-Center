<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css\coursesaction.css">
  <link rel="stylesheet" href="css\styles_header.css">
  <link rel="stylesheet" href="css\styles_footer.css">

  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/load_courseaction.js" type="text/javascript"></script>
</head>

<body>
<?php include_once("inc/header.php"); ?>
<label for="trade">Trade</label>
<select id="trade" name="trade" style="width:24%;">
  <option value="<?php echo $_POST['field'] ?>"><?php echo $_POST['field']?></option>
</select><br><br>
<label for="coursetype">Course Type</label>
<select id="coursetype" name="coursetype" style="width:24%;">
  <option value="<?php echo $_POST['coursetype'] ?>"><?php echo $_POST['coursetype']?></option>
</select>
<div id="datatable"></div>

<?php include_once("inc/footer.php"); ?>
</body>
</html>
