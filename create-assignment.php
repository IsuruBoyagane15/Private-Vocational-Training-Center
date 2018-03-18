<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Assignment</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_create-assignment.css">
    <link rel="stylesheet" href="css/styles_footer.css">

    <!--jquery sources-->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/addQueTemp.js" type="text/javascript"></script>
    <script src="js/assign-buttons.js" type="text/javascript"></script>

  </head>
  <body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>

    <!--navigation panel-->
    <nav class="navigate">
      <ul>
        <li><a href="#">#name#</a></li>
        <li><a href="log-out.php">Log Out</a></li>
      </ul>
    </nav>

    <!--confirm dialog box (hidden)-->
    <div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>

    <!--verify assignment popup table (hidden)-->
    <div id="popup_verify">
      <table id="table_verify">
        <tr>
          <th>Question</th>
          <th>Option1</th>
          <th>Option2</th>
          <th>Option3</th>
          <th>Option4</th>
          <th>Correct Option</th>
        </tr>
      </table>
      <div class="container_buttons">
        <button type="submit" name="back" class="assign_button" id="back">Back</button>
        <button type="submit" name="verify_next" class="assign_button" id="verify_next">Next</button>
      </div>
    </div>

    <!--question container-->
    <div class="container_questions">
      <nav class="questions">
        <ul id="que_list">

        </ul>
      </nav>
    </div>

    <!--button container-->
    <div class="container_buttons">
      <button type="submit" name="cancel" class="assign_button" id="cancel">Cancel</button>
      <button type="submit" name="new-question" class="assign_button" id="new-question">Add new question</button>
      <button type="submit" name="complete" class="assign_button" id="complete">Complete</button>
    </div>

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>
  </body>
</html>
