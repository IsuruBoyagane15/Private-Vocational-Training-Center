$(function(){
  $(document).ready(function(){
    $.ajax({
      url:"dbOperations/db_load_courses.php",
      method:"POST",
      success: function(data){
        $('#coursetable').html(data);
      },
      error: function(error){
        alert(error);
      }

    });
  });
});
