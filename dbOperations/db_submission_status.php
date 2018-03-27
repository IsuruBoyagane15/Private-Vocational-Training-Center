<?php
  //load submission status to the status panel in popup//

  include_once(dirname(__FILE__).'/db_submission_status_functions.php');

  $tablename = trim($_POST['tabname']);
  $modname = getModName($tablename);

  $total = getTotal( trim($modname) );
  $submitted = getSubmitted($tablename);
  $late = getLate($tablename);
  $yetTo = $total-$submitted;

  $output = '<li>module name : ' . $modname . '</li>
    <li>total students : ' . $total . '</li><br>
    <li>submitted : ' . $submitted . '</li>
    <li id="late">late submissions : ' . $late . '</li>
    <li>yet to submit : ' . $yetTo . '</li> ';

  echo $output;

?>
