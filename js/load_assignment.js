$(document).ready(function(){
  var module_id=$("#mo_id").val();
  var index=$("#index").val();
  var ass_id=$("#assignment_id").val();
  $.ajax({
    url: "dbOperations/db_load_student_module.php?module_id="+module_id,
    method: "POST",
    success: function(data){
      $('#module').html(data);
    },
    error: function(error){
      alert(error);
    }
  });

  $.ajax({
    url: "dbOperations/db_load_assignment.php?ass_id="+ass_id+"&&module_id="+module_id,
    method: "POST",
    success: function(data){
      $('#assignment').html(data);
    },
    error: function(error){
      alert(error);
    }
  });
  $.ajax({
    url: "dbOperations/db_load_statustable.php?module_id="+module_id+"&ass_id="+ass_id+"&index="+index,
    method: "POST",
    success: function(data){
      $('#statustable').html(data);
    },
    error: function(error){
      alert(error);
    }
  });
  $.ajax({
    url: "dbOperations/load_assignment_description.php?module_id="+module_id+"&ass_id="+ass_id+"&index="+index,
    method: "POST",
    success: function(data){
      $('#description').html(data);
    },
    error: function(error){
      alert(error);
    }
  });
});
