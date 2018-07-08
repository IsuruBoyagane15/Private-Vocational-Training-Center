$(function() {
  var $queList = $('#que_list');
  var box = $(".container_modules");
  //var lecSelect = $('#lecturersdb').html();
  box.show();


  $('#new-question').on('click', function() {
    var result;
    $.ajax({
      url: "dbOperations/create_course_lecturers_db.php",
      method: "POST",
      success: function(data){
        $("#que_list").append(data);
      },
      error: function(error){
        alert(error);
      }
    });
  });
});
