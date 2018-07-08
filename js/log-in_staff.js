$(function (){

  //prevent from default action
  $('#staff_login').find('button[type="submit"]').on('click', function(event){
    event.preventDefault();

    var username = $('#staff_login').find('input[name="username"]').val();
    var password = $('#staff_login').find('input[name="password"]').val();

    if(username==""){
      alert("Username required!!!");
    }else if(password==""){
      alert("Password required!!!");
    }else{
      //pass data to the php file
      $.ajax({
        url: "dbOperations/db_staff_login.php",
        method: "POST",
        data: {username:username, password:password},
        success: function(data){              //invalid login
          if(data.trim()=="invalid_usr/pass"){
            alert("Invalid username or password!!!");
            location.href = "log-in.php";
          }else{                              //successful login
            location.href = data;
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
