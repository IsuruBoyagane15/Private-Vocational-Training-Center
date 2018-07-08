$(document).ready(function(){
  $('#email').on('input', function() {
     var input=$(this);
     var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
     var is_email=re.test(input.val());
     if(is_email){input.removeClass("invalid").addClass("valid");}
     else{input.removeClass("valid").addClass("invalid");}
  });
  $('#id').on('input',function(){
      var input=$(this);
      var id=input.val();
      id =id.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g);
      if(id.length==10  && id.endsWith('v')){
          var res=id.slice(0,9);
          res=parseInt(res,10);
          var num=Number.isInteger(res);
          if(id){
            input.removeClass("invalid").addClass("valid");
          }
          else{
            input.removeClass("valid").addClass("invalid");
          }

      }
      else if(id.length==9){
          id=parseInt(id,10);
          if(id){
            input.removeClass("invalid").addClass("valid");
          }
          else{
            input.removeClass("valid").addClass("invalid");
          }
      }
      else{
          input.removeClass("valid").addClass("invalid");
      }
 });
 $('#fullname').on('input',function(){
   var input=$(this);
   var re=/^[a-zA-Z-' ]+$/;
   var valid=re.test(input.val());
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });
 $('#nameini').on('input',function(){
   var input=$(this);
   var re=/^[a-zA-Z-'. ' ' ]+$/;
   var valid=re.test(input.val());
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });
 $('#address').on('input',function(){
   var input=$(this);
   var re=/^[a-zA-Z-',:Z0-9-' ']+$/;
   var valid=re.test(input.val());
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });
 $('#qualification').on('input',function(){
   var input=$(this);
   var re=/^[a-zA-Z-',:Z0-9-' ']+$/;
   var valid=re.test(input.val());
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });
 $('#bday').on('input',function(){
     var valid=false;
     var input=$(this);
     var bday = new Date(input.val());
     var today= new Date();

     if(bday<today){
       var diff =(today.getTime() - bday.getTime()) / 1000;
       diff /= (60 * 60 * 24);
       var years= Math.abs(Math.round(diff/365.25));
       valid=true;
       document.getElementById('age').value=years;
       document.getElementById('age').disabled=true;

     }
     else{
       valid=false;
       document.getElementById('age').value="Invalid birthday";
       document.getElementById('age').disabled=true;
     }
     if(valid){input.removeClass("invalid").addClass("valid");}
     else{input.removeClass("valid").addClass("invalid");}
 });
 $('#mobile').on('input',function(){
   var valid=false;
   var input=$(this);
   var re=/^[Z0-9-]+$/;
   var num=re.test(input.val());
   var length=input.val().length;
   if(num && length==10){
     valid=true;
   }
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });
 $('#home').on('input',function(){
   var valid=false;
   var input=$(this);
   var re=/^[Z0-9-]+$/;
   var num=re.test(input.val());
   var length=input.val().length;
   if(num && length==10){
     valid=true;
   }
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });


 $('#index-al').on('input',function(){
   var valid=false;
   var input=$(this);
   var re=/^[Z0-9-]+$/;
   var num=re.test(input.val());
   var length=input.val().length;
   if(num && length==6){
     valid=true;
   }
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });


$("#lecturer_form").on('submit',function(event){
       event.preventDefault();
       alert("yes");
       var form_data=document.getElementsByClassName('contact');
       var length=form_data.length;
       alert(length);
       alert(form_data);
 	     var error_free=true;
 	     for (var input in form_data){
         var element=$("#"+form_data[input]['id']);
   		   var valid=element.hasClass("valid");
   		   var error_element=$("span",element.parent());
   		   if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
   		   else{error_element.removeClass("error_show").addClass("error");}
 	    }
      if(error_free){
        var url = $(this).attr('action');
        var type = $(this).attr('method');
        var array=getFromData($('#student_form'));
        alert(array);
        $.ajax({
          url: url,
          type: type,
          data: {data_array:array},
          processData: false,
          contentType: false,
          success: function(data){
            alert("Submitted Sucessfully!");
            location.reload(true);
          },
          error: function(){
            alert("Error occured submitting!");
            location.reload(true);
          }
        });


      }
$(function getFormData($form){
            var unindexed_array = $form.serializeArray();
            var indexed_array = {};

           $.map(unindexed_array, function(n, i){
           indexed_array[n['name']] = n['value'];
           return indexed_array;
      });
});
});
});
