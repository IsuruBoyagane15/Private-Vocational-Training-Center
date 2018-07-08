$(document).ready(function(){
  $.ajax({
    url: "dbOperations/db_load_profiledata.php",
    method: "POST",
    success: function(data){
      arrD  = JSON.parse(data);

      $('#profdata').html(arrD[1]);
      $('#name').html(arrD[0]);
      $('#image').html(arrD[2]);
    },
    error: function(error){
      alert(error);
    }
  });
  $('#picchange').on('click',function(){
    var x = document.getElementById("popupbox1");
    if(x.style.display =="none") {
             x.style.display = "block";
    } else {
              x.style.display = "none";
    }
  });
  $('#changer').on('submit',function(event) {

  event.preventDefault();
  var fileSize = $(this).find('#chooser')[0].files[0].size/1024;

  if( fileSize < 4000 ) {   //only send files less than 10MB

    var url = $(this).attr('action');
    var type = $(this).attr('method');
    var file = new FormData( $(this)[0] );
    $.ajax({
      url: url,
      type: type,
      data: file,
      processData: false,
      contentType: false,
      success: function(data){
        alert("Profile picture uploaded successfully!");
        location.reload(true);
      },
      error: function(){
        alert("Error occured while uploading!");
        location.reload(true);
      }
    });

  }else {
    alert("Unable to upload, Your file is greater than 4MB!");
    location.reload(true);
  }
});
  $('#back1').on('click',function(event){
    event.preventDefault();
    var x= document.getElementById("popupbox1");
    x.style.display="none";
  });

    $('#change_pass').on('click', function(event) {
      event.preventDefault();
      var current_pass = $('#current_password').val();
      var new_pass = $('#new_password').val();
      var confirm_new_pass = $('#reent_new_password').val();
      if(current_pass==""){
        alert("Current Password required!!!");
      }else if(new_pass==""){
        alert("New Password required!!!");
      }else if(confirm_new_pass==""){
        alert("Re-entering new password is required!!!");
      }
      else if( new_pass == confirm_new_pass ){
        if( new_pass.length > 7 ){
          $.ajax({
            url: "dbOperations/db_change_password.php",
            method: "POST",
            data: {current_pass:current_pass, new_pass:new_pass},
            success: function(msg){
              alert(msg);
              location.reload(true);
            },
            error: function(error){
              alert("Error changing password!!!"+error);
              location.reload(true);
            }
          });
        }else{
          alert("Minimum 8 characters required for the password!");
        }
      }else{
        alert("Two password fields didn't match!!!");
      }
    });
    $('#back2').on('click',function(event){
      event.preventDefault();
      $('#popupbox2').hide();
      location.reload(true);
    });
   $('#new_password').on('input',function(){
        var re= new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        var pswd=$(this).val();
        if (pswd.length < 8  ) {
            $('#new_password').removeClass('valid').addClass('invalid');
        }
        else if(!re.test(pswd)){
              $('#new_password').removeClass('valid').addClass('invalid');
        }
        else{
            $('#new_password').removeClass('invalid').addClass('valid');
        }

   });
   $('#reent_new_password').on('input',function(){
       var pass=$('#new_password').val();
       var pswd=$(this).val();
       if(pass==pswd){
           $('#reent_new_password').removeClass('invalid').addClass('valid');
       }
       else{
         $('#reent_new_password').removeClass('valid').addClass('invalid');
       }
  });
  $('#butt').on('click',function(){
    var x= document.getElementById("popupbox2");
    x.style.display="block";
  });

});
