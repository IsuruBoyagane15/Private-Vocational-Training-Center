<!-- loading selected module data to the middle panel -->

<?php
  include_once(dirname(__FILE__).'/db_lectureNote_log.php');

  // get relevent id from a link click
  $id = $_POST['id'];

  $connection = mysqli_connect("localhost", "root", "", "modules");

  //get module name, code and description from the database
  $query = "SELECT module_name,module_code,module_details FROM modules WHERE module_code='2m1'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);

  //preparing the output(html)

  //module name, code and description
  $output = ' <label id="mod_name" class="label_head">Module name:</label>
  <label id="modName"> ';
  $output .= (string)$row[0];
  $output .= ' </label><br><br><label id="mod_code" class="label_head">Module code :</label>
  <label id="modCode"> ';
  $output .= (string)$row[1];
  $output .= ' </label><br><br><label id="mod_description" class="label_head">Description :</label>
  <p id="modDescription"> ';
  $output .= (string)$row[2];
  $output .= ' </p> ';

  //uploaded notes
  $output .= ' <div class="note_container"><label class="label_head">
  Lecture notes</label><nav class="notes_uploaded"><ul id="notes"> ';
  $output .= loadLecNoteData($row[0]);
  $output .= ' </ul></nav></div> ';

  //created assignments
  $output .= ' <div class="assign_container"><label class="label_head">
  Assignments</label><nav class="assign_created"><ul id="assigns"> ';
  $output .= loadAsignmentData($row[0]);
  $output .= ' </ul></nav></div> ';


  mysqli_close($connection);
  echo $output;

?>
