<?php


$link =new mysqli("localhost", "root", "", "staff");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT staff_id, name FROM staff_details";
$result=$link->query($sql);
$output='';
$output.='<select id = "lecturer" name="lecturer" class = "lecturer">';
while($row=mysqli_fetch_array($result)){
  $output.='<option value="'.$row['staff_id'].'">'.$row['name'].'</option>';
}
$output.='</select>';
mysqli_close($link);



$output2='';
$output2.='<li class="module_data">
  <div class="data">
    <label class="label">Module Name</label><br>
    <input type="text" name="module_name" class="module_name" id="module_name">
  </div>
  <div class="data">
    <label class="label">Lecturer</label><br>'.$output.'</div>
  <div class="data">
    <label class="label">Description</label><br>
    <textarea name="description" class="description" id="description" rows= "4"></textarea>
  </div>
  <button type="submit" name="que_remove" class="que_remove">Remove Module</button>
</li>';
echo $output2;
?>
