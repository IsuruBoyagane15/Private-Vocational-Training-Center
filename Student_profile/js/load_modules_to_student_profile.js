$(document).ready(function(){
alert("ENROLL");
function enroll(){
   var index=$("#index").val();
   alert("Enrolled");
   $.ajax({
     url: "dbOperations/db_load_modules_to_student_profile.php?index="+index,
     method: "POST",
     success: function(data){
       $('#enrollmenttable').html(data);
     },
     error: function(error){
       alert(error);
     }
   });
   return true;


}
});
