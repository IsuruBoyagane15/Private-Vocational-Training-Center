$(function(){
  $(document).ready(function(){
    alert("Hello");
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
