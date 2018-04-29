$(function(){
  $(document).ready(function(){
    var courseid=$('#course_id').val();
    $.ajax({
      url:"dbOperations/db_load_studentapplication.php?courseid="+courseid,
      method: "POST",
      success: function(data){
        $('#details').html(data);
      },
      error:function(error){
        alert(error);
      }

    });
  });
});
