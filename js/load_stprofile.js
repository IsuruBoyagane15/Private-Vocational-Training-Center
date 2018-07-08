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
  $('#pass_change').on('submit',function(event){
      event.preventDefault();
      var x=document.getElementById("popupbox2");
      var url = $(this).attr('action');
      var type = $(this).attr('method');
      var form_data=document.getElementsByClassName('contact');
      var length=form_data.length;
      var error_free=true;
      var newp=$("#newpassword");
      var cp=$("#confirmpassword");
      var valid=newp.hasClass("valid");
      var error_element=$("span",newp.parent());
      if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
      else{error_element.removeClass("error_show").addClass("error");}
      valid=cp.hasClass("valid");
      var error_element=$("span",cp.parent());
      if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
      else{error_element.removeClass("error_show").addClass("error");}
     if(error_free){
      var pwd=$("#password").val();
      var newpwd=$("#newpassword").val();
      $.ajax({
        url: url,
        type: "POST",
        data: {pwd:pwd,newpwd:newpwd},
        processData: false,
        contentType: false,
        success: function(data){
            $('#output').html(data);
        },
        error: function(error){
          alert("Error occured while changing password!");
          location.reload(true);
        }
      });
    }
    else{
      alert("Error changing password");
    }
  });
  $('#back2').on('click',function(event){
    var x= document.getElementById("popupbox2");
    x.style.display="none";
  });
   $('#newpassword').on('input',function(){
        var re= new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        var pswd=$(this).val();
        if (pswd.length < 8  ) {
            $('#newpassword').removeClass('valid').addClass('invalid');
        }
        else if(!re.test(pswd)){
              $('#newpassword').removeClass('valid').addClass('invalid');
        }
        else{
            $('#newpassword').removeClass('invalid').addClass('valid');
        }

   });
   $('#confirmpassword').on('input',function(){
       var pass=$('#newpassword').val();
       var pswd=$(this).val();
       if(pass==pswd){
           $('#confirmpassword').removeClass('invalid').addClass('valid');
       }
       else{
         $('#confirmpassword').removeClass('valid').addClass('invalid');
       }
  });
  $('#butt').on('click',function(){
    var x= document.getElementById("popupbox2");
    x.style.display="block";
  });

});
