// pass user entered lecturer details to the DBOperation file

$(function (){
  $(document).on('click', 'input[value="Save All"]', function(event){
    event.preventDefault();
  });
  $(document).on('click', 'input[value="Cancel"]', function(event){
    event.preventDefault();
    location.reload(true);
    location.href = "index.php";
  });
  $(document).on('click', 'input[value="Clear All"]', function(event){
    event.preventDefault();
    location.reload(true);
  });
  $(document).on('click', 'input[value="Previous"]', function(event){
    event.preventDefault();
    location.href = "news.php";
  });

  $(document).on('click', 'input[value="Submit"]', function(event){
    event.preventDefault();

    var course = $(document).find('select[name="course"]').val();
    var name_ini = $(document).find('input[name="name_ini"]').val();
    var fullname = $(document).find('input[name="fullname"]').val();
    var address = $(document).find('input[name="address"]').val();
    var nic = $(document).find('input[name="nic"]').val();
    var email = $(document).find('input[name="email"]').val();
    var mobile = $(document).find('input[name="mob"]').val();
    var home = $(document).find('input[name="home"]').val();
    var dob = $(document).find('input[name="dob"]').val();
    var age = $(document).find('input[name="age"]').val();
    var gender = $(document).find('input[name="gender"]').val();
    var year_ol = $(document).find('select[name="year_ol"]').val();
    var year_al = $(document).find('select[name="year_al"]').val();
    var index_al = $(document).find('input[name="indexno2"]').val();
    var stream = $(document).find('select[name="stream"]').val();
    var degree = $(document).find('input[name="degree"]').val();
    var medium = $(document).find('select[name="medium"]').val();

    $.ajax({
      url: "dbOperations/addLecDetails_db.php",
      method: "POST",
      data: {course:course, name_ini:name_ini, fullname:fullname, address:address, nic:nic, email:email, mobile:mobile, home:home, dob:dob, age:age, gender:gender, year_ol:year_ol, year_al:year_al, index_al:index_al, stream:stream, degree:degree, medium:medium} ,
      success: function(data){
        alert(data);
        location.href = "regapplication.php";
        location.reload(true);
      },
      error: function(err){
        alert(err);
      }
    });

  });

});
