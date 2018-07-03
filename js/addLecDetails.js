// pass user entered lecturer details to the DBOperation file

$(function (){
  $(document).on('click', 'input[value="Save All"]', function(event){
    event.preventDefault();
  });
  $(document).on('click', 'input[value="Cancel"]', function(event){
    event.preventDefault();
  });
  $(document).on('click', 'input[value="Clear All"]', function(event){
    event.preventDefault();
  });
  $(document).on('click', 'input[value="Previous"]', function(event){
    event.preventDefault();
  });

  $(document).on('click', 'input[value="Submit"]', function(event){
    event.preventDefault();

    var course = $(document).find('select[name="course"]').val();
    var fullname = $(document).find('input[name="fullname"]').val();
    var address = $(document).find('input[name="address"]').val();
    var nic = $(document).find('input[name="nicno"]').val();
    var mobile = $(document).find('input[name="mob"]').val();
    var dob = $(document).find('input[name="dob"]').val();
    var gender = $(document).find('input[name="gender"]').val();
    var year_ol = $(document).find('select[name="year_ol"]').val();
    var index_ol = $(document).find('input[name="indexno1"]').val();
    var maths = $(document).find('select[name="mathematics"]').val();
    var english = $(document).find('select[name="english"]').val();
    var science = $(document).find('select[name="science"]').val();
    var ict = $(document).find('select[name="ict"]').val();
    var year_al = $(document).find('select[name="year_al"]').val();
    var index_al = $(document).find('input[name="indexno2"]').val();
    var stream = $(document).find('select[name="stream"]').val();
    var degree = $(document).find('input[name="degree"]').val();

    $.ajax({
      url: "dbOperations/addLecDetails_db.php",
      method: "POST",
      data: {course:course, fullname:fullname, address:address, nic:nic, mobile:mobile, dob:dob, gender:gender, year_ol:year_ol, index_ol:index_ol, maths:maths, english:english, science:science, ict:ict, year_al:year_al, index_al:index_al, stream:stream} ,
      success: function(data){
        alert("Your record successfully inserted!");
      },
      error: function(err){
        alert(err);
      }
    });

  });

});
