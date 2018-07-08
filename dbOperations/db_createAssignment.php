<pre>

<?php
  include_once(dirname(__FILE__).'/db_createAssign_functions.php');

  $module_name = $_POST['module_name'];
  $assign_name = $_POST['assign_name'];
  $assign_desc = $_POST['assign_desc'];
  $attempts = $_POST['attempts'];
  $late_allowed = $_POST['late_allowed'];
  $deadline = $_POST['deadline'];
  $questions = $_POST['questions'];

  $connection = createConnection('localhost', 'root', '', 'assignments');

  $table_name = createTable($connection, $module_name, $assign_name, $deadline, $assign_desc, $late_allowed, $attempts);

  foreach ($questions as $select) {
    addQuestion($connection, $table_name, $select[0], $select[1], $select[2], $select[3], $select[4], $select[5] );
  }

  closeConnection($connection);

?>

</pre>
