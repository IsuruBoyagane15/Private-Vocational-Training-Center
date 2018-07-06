$(document).ready(function(){
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
   url:"dbOperations/load_lecnote_data.php?module_id="+module_id,

   method:"POST",
   success: function(data){
     $('#notes').html(data);
   },
   error: function(error){
     alert(error);
   }
  });
  $.ajax({
    url:"dbOperations/db_load_assignment_data.php?module_id="+module_id+"&&index="+index,
    success: function(data){
      $('#assign').html(data);
    },
    error: function(error){
      alert(error);
    }
  });

});
