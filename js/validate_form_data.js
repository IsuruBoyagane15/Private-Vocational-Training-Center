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
 $('#ol-year').on('input',function(){
   var valid=false;
   var input=$(this);
   var re=/^[Z0-9-]+$/;
   var num=re.test(input.val());
   var length=input.val().length;
   if(num && length==4){
     var year=new Date(input.val());
     var today= new Date();
       if(year<today){
        valid=true
       }
   }
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });
 $('#index-ol').on('input',function(){
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
 $('#al-year').on('input',function(){
   var valid=false;
   var input=$(this);
   var re=/^[Z0-9-]+$/;
   var num=re.test(input.val());
   var length=input.val().length;
   if(num && length==4){
     var year=new Date(input.val());
     var today= new Date();
       if(year<today){
        valid=true
       }
   }
   if(valid){input.removeClass("invalid").addClass("valid");}
   else{input.removeClass("valid").addClass("invalid");}
 });

$("#student_form").on('submit',function(event){
       event.preventDefault();
	     var error_free=true;
       var courseid=$('#course_id')
       var id=$('#id')
       var nameini=$('#nameini')
       var fullname=$('#fullname')
       var medium=$('#medium')
       var address=$('#address')
       var gender=$('#gender')
       var bday=$('#bday')
       var age=$('#age')
       var mobile=$('#mobile')
       var home=$('#home')
       var email=$('#email')
       var olyear=$('#ol-year');
       var olindex=$('#index-ol');
       var maths=$('#maths');
       var science=$('#science');
       var english=$('#english');
       var alyear=$('#al-year');
       var alindex=$('#index-al');
       var alstream=$('#stream');

       var err_fr1 = true;
       var err_fr2 = true;
       var err_fr3 = true;
       var err_fr4 = true;
       var err_fr5 = true;
       var err_fr6 = true;
       var err_fr7 = true;
       var err_fr8 = true;
       var err_fr9 = true;
       var err_fr10 = true;
       var err_fr11 = true;
       var err_fr12 = true;
       var err_fr13 = true;

       if(!id.hasClass("valid")){
         error_element=$("span",id.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr1 = false;
       }
       else{
            error_element=$("span",id.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr1 = true;
       }
       if(!nameini.hasClass("valid")){
         error_element=$("span",nameini.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr2 = false;
       }
       else{
            error_element=$("span",nameini.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr2 = true;
       }
       if(!fullname.hasClass("valid")){
         error_element=$("span",fullname.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr3 = false;
       }
       else{
         error_element=$("span",fullname.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr3 = true;
       }

       if(!address.hasClass("valid")){
         error_element=$("span",address.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr4 = false;
       }
       else{
         error_element=$("span",address.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr4 = true;
       }

       if(!bday.hasClass("valid")){
         error_element=$("span",bday.parent());
        error_element.removeClass("error").addClass("error_show");
         var err_fr5 = false;
       }
       else{
         error_element=$("span",bday.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr5 = true;
       }

       if(!age.hasClass("valid")){
         error_element=$("span",age.parent());
      error_element.removeClass("error").addClass("error_show");
         var err_fr6 = false;
       }
       else{
          error_element=$("span",age.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr6 = true;
       }

       if(!mobile.hasClass("valid")){
         error_element=$("span",mobile.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr7 = false;
       }
       else{
         error_element=$("span",mobile.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr7 = true;
       }

       if(!home.hasClass("valid")){
         error_element=$("span",home.parent());
       error_element.removeClass("error").addClass("error_show");
         var err_fr8 = false;
       }
       else{
         error_element=$("span",home.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr8 = true;
       }

       if(!email.hasClass("valid")){
         error_element=$("span",email.parent());
                 error_element.removeClass("error").addClass("error_show");
         var err_fr9 = false;
       }
       else{
         error_element=$("span",email.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr9 = true;
       }

       if(!olyear.hasClass("valid")){
         error_element=$("span",olyear.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr10 = false;
       }
       else{
         error_element=$("span",olyear.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr10 = true;
       }

       if(!olindex.hasClass("valid")){
         error_element=$("span",olindex.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr11 = false;
       }
       else{
            error_element=$("span",olindex.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr11 = true;
       }

       if(!alyear.hasClass("valid")){
         error_element=$("span",alyear.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr12 = false;
       }
       else{
            error_element=$("span",alyear.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr12 = true;
       }

       if(!alindex.hasClass("valid")){
         error_element=$("span",alindex.parent());
         error_element.removeClass("error").addClass("error_show");
         var err_fr13 = false;
       }
       else{
            error_element=$("span",alindex.parent());
            error_element.removeClass("error_show").addClass("error");
            var err_fr13 = true;
       }

      if( err_fr1==true && err_fr2==true && err_fr3==true && err_fr4==true && err_fr5==true && err_fr6==true && err_fr7==true && err_fr8==true && err_fr9==true && err_fr10==true && err_fr11==true && err_fr12==true && err_fr13==true ){
        var url = $(this).attr('action');
        var type = $(this).attr('method');
        $.ajax({
          url: url,
          type: "POST",
          data:{course_id:courseid.val(),id:id.val(),nameini:nameini.val(),fullname:fullname.val(),medium:medium.val(),address:address.val(),gender:gender.val(),bday:bday.val(),age:age.val(),mobile:mobile.val(),home:home.val(),email:email.val(),
              olyear:olyear.val(),indexol:olindex.val(),maths:maths.val(),science:science.val(),english:english.val(),alyear:alyear.val(),
             indexal:alindex.val(),stream:alstream .val()
          },

          success: function(data){
            alert("Submitted Sucessfully!");
            $('#test').html(data);
          },
          error: function(){
            alert("Error occured submitting!");
            location.reload(true);
          }
        });


      }
      else{
        alert("invalid input!!");
      }

    });
    });

function getFormData($form){
           alert("Function");
            var indexed_array = {};

           $.map(unindexed_array, function(n, i){
           indexed_array[n['name']] = n['value'];
           return indexed_array;
      });
}
