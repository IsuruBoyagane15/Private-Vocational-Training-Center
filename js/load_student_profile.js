$(function(){
  $(document).ready(function(){
    var index=$("#index").val();
    $.ajax({
      url: "dbOperations/db_load_student_profile.php?index="+index,
      method: "POST",
      success: function(data){
        $('#course').html(data);
      },
      error: function(error){
        alert(error);
      }
    });
  });
});
