$(function (){

  //prevent from default action
  $('#student_login').find('button[type="submit"]').on('click', function(event){
    event.preventDefault();

    var username = $('#student_login').find('input[name="username"]').val();
    var password = $('#student_login').find('input[name="password"]').val();

    if(username==""){
      alert("Username required!!!");
    }else if(password==""){
      alert("Password required!!!");
    }else{
      //pass data to the php file
      $.ajax({
        url: "inc/validate.php",
        method: "POST",
        data: {username:username, password:password},
        success: function(data){              //invalid login
          if(data.trim()=="invalid_usr/pass"){
            alert("Invalid username or password!!!");
            location.href = "log-in.php";
          }else{
                         //successful login
            location.href ="student_profile.php";
            alert("Login Successful!");
          }
        },
        error: function(error){
          alert(error);
        }
      });
    }

  });

});
