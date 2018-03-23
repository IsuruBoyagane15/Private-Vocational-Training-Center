<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecturer Profile</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_lecturer-profile.css">
    <link rel="stylesheet" href="css/styles_footer.css">

    <!--jquery sources-->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/loadModule.js" type="text/javascript"></script>
    <script src="js/uploads_assigns.js" type="text/javascript"></script>

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

    <!--main body contents-->
    <div class="container">

      <!--confirm dialog box (hidden)-->
      <div class="confirmBox">
        <div class="message"></div>
        <span class="button yes">Yes</span>
        <span class="button no">No</span>
      </div>

      <!--lecture note upload popup(hidden)-->
      <div class="upload_popup">
        <form action="lecNote_upload.php" method="post" enctype="multipart/form-data" id="lecNote_upload">
          Select module
          <br><br><label class="label" id="module_select">Module names</label><br><br>
          Select a file to upload
          <br><p>(texts, documents, images and pdf only)</p>
          <input type="file" name="fileToUpload" id="fileToUpload">
          <div class="button_container">
            <input type="submit" value="back" name="back">
            <input type="submit" value="Upload" name="upload">
          </div>
        </form>
      </div>

      <!--left column-->
      <div class="left_column">

        <!--assigned module panel-->
        <nav id="panel_modules">
          <h4>Assigned Modules</h4>
          <ul id="assign_mods">

          </ul>
        </nav>
      </div>

      <!--middle main body-->
      <div class="middle_body">

        <!--selected module details-->
        <h3>Module Details</h3>
        <div class="middle_content">
          <!-- loading from database through php -->
        </div>

        <!--action pane with buttons-->
        <div class="middle_action">
          <a href="#"><button type="submit" id="new_note">Add Lecture Notes</button></a>
          <a href="create-assignment.php"><button type="submit" name="new_assignment">create new assignment</button></a>
        </div>
      </div>

      <!--right column-->
      <div class="right_column">

        <!--upcoming events panel-->
        <div id="upcoming_events">
          <h4>Upcoming Events</h4>
          <nav id="up_events">
            <ul>
              <li>event 1</li>
              <li>event 2</li>
            </ul>
          </nav>
        </div>

        <!--submission status panel-->
        <div id="submission_status">
          <h4>Submission Status</h4>
          <nav id="sub_status">
            <ul>
              <li>total submissions : </li>
              <li>submitted : </li>
              <li>late submissions : </li>
              <li>yet to submit : </li>
            </ul>
          <nav>
        </div>
      </div>
    </div>

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>
  </body>
</html>
