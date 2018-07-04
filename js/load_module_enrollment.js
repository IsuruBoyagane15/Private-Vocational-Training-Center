$(function(){
  $(document).ready(function(){
    console.log("asd");
    alert("yess");
    var index=$("#index").val();
    $.ajax({
      url:"dbOperations/db_module_enrollment.php?index="+index,
      method:"POST",
      success: function(data){
        $('#modules').html(data);
      },
      error: function(error){
        alert(error);
      }

    });
  });
});
function enroll(){

}
