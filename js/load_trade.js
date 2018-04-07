$(function(){
  $(document).ready(function(){
    $.ajax({
      
      url: "dbOperations/load_trades.php",
      method: "POST",
      success: function(data){
        $('#field').html(data);
      },
      error: function(error){
        alert(error);
      }
    });
  });
});
