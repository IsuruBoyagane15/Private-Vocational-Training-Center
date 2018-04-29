$(function(){
  $(document).ready(function(){
    $("#student_form").submit(function(e){
    $.ajax({
      url: "dbOperations/db_student_applicant_details.php",
      method: "POST",
      success: function(data){
        alert("sucess");
      },
      error: function(error){
        alert(error);
      }
    });
    e.preventDefault();
  });
});
});
