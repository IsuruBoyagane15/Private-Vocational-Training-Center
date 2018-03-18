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

      <!--left column-->
      <div class="left_column">

        <!--assigned module panel-->
        <nav id="panel_modules">
          <h4>Assigned Modules</h4>
          <ul id="assign_mods">
            <li><a href="#">module 1</a></li>
            <li><a href="#">module 2</a></li>
          </ul>
        </nav>
      </div>

      <!--middle main body-->
      <div class="middle_body">

        <!--selected module details-->
        <h3>Module Details</h3>
        <div class="middle_content">
          <p>ednwrs  dtrj gtcdg </p>
        </div>

        <!--action pane with buttons-->
        <div class="middle_action">
          <a href="#"><button type="submit" name="back">back</button></a>
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
