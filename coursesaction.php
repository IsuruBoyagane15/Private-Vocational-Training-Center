<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css\coursesaction.css">
  <link rel="stylesheet" href="css\styles_header.css">
  <link rel="stylesheet" href="css\styles_footer.css">
   <link rel="stylesheet" href="css/navpannel.css">

  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/load_courseaction.js" type="text/javascript"></script>
  <script src="js/navpannel.js" type="text/javascript"></script>
</head>

<body>
<?php include_once("inc/header.php"); ?>
<?php include_once("inc/navpannel.php"); ?>
<div class="lightbox" style="width:20vw;margin-top:2vh;margin-bottom:2vh;">
<label class="lable" for="trade" style="margin-left:2vw;">Trade</label>
<select id="trade" name="trade" style="width:80%;margin-left:2vw;height:4vh;" >
  <option value="<?php echo $_POST['field'] ?>"><?php echo $_POST['field']?></option>
</select>
<label class="lable" for="coursetype" style="margin-left:2vw;">Course Type</label>
<select id="coursetype" name="coursetype" style="width:80%;margin-left:2vw;height:4vh;">
  <option value="<?php echo $_POST['coursetype'] ?>"><?php echo $_POST['coursetype']?></option>
</select>
</div>
<div id="datatable" class="lightbox" style="width:100%"></div>

<?php include_once("inc/footer.php"); ?>
</body>
</html>
