$(function(){
  $(document).ready(function(){
    var index=$("#index").val();
    $.ajax({
      url: "dbOperations/db_load_modules.php?index="+index,
      method: "POST",
      success: function(data){
        $('#modulelist').html(data);
      },
      error: function(error){
        alert(error);
      }
    });


  });

});
$(function(){
  $(document).ready(function(){
    var index=$("#index").val();
    $.ajax({
      url: "dbOperations/db_load_course_description.php?index="+index,
      method: "POST",
      success: function(data){
        $('#description').html(data);
      },
      error: function(error){
        alert(error);
      }
    });


  });

});
