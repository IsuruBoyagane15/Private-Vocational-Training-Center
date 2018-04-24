$(function(){
  $(document).ready(function(){
    var trade=$("#trade").val();
    var type=$("#coursetype").val();
    $.ajax({

      url: "dbOperations/db_load_courseaction.php?trade="+trade+"&& type="+type,
      method:"POST",
      success: function(data){
         $("#datatable").html(data);
      },
      error: function(error){
        alert(error);
      }
    });
  });
});
