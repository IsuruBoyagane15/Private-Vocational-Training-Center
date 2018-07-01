var start=$.now();
$(function(){
  $(document).ready(function(){
    var ass_id=$("#assignment_id").val();
    var module_id=$("#mo_id").val();
    var index=$("#index").val();
    $.ajax({
      url:"dbOperations/db_load_addsubmission.php?module_id="+module_id+"&&ass_id="+ass_id,
      method:"POST",
      success: function(data){
        $('#assignment').html(data);
      },
      error: function(error){
        alert(error);
      }

    });
  });
});
$(document).on('click','#submit',function(){
    var confirmbox =$('#confirmbox');
    confirmbox.find('#messege').text("Are you sure that you want to finsish and submit?");
    confirmbox.find('#buttoncancel',"#buttonconfirm").unbind().click(function(){
        confirmbox.hide();
    });
    confirmbox.find('#buttonconfirm').click(function(){
       var end=$.now();
       var time_taken =end-start;
       time_taken=Math.floor(time_taken/1000);
       var data=auto_validate_answers();
       marks=data[0];
       correct=data[1];
       total=data[2];
       var index=$("#index").val();
       var ass_id=$("#assignment_id").val();
       var module_id=$("#mo_id").val();
       var is_late=$("#late").val();
       $.ajax({
         url:"dbOperations/db_save_assignment.php?module_id="+module_id+"&&ass_id="+ass_id+"&&marks="+marks+"&&correct="+correct+"&&total="+total+"&&index="+index+"&&time_taken="+time_taken+"&&is_late="+is_late,
         method:"POST",
         success: function(data){
           alert("Submitted Successfully");
           alert(marks+"%");
           $('#res').html(data);
         },
         error: function(error){
           alert(error);
         }

       });
       confirmbox.hide();

    });
    confirmbox.show();
});
function auto_validate_answers(){
   var questions;
   var data;
   questions=document.getElementsByClassName('question');
   var len=questions.length;
   var correct_num=0;
   var i=0;
   var answer;
   var correct_answer;
   for (var l=0;l<len;l++){
     answer=document.getElementsByName(i);
     for (var j = 0, length = answer.length; j< length; j++)
     {
      if (answer[j].checked)
      {
           // do whatever you want with the checked radio
         new_answer=answer[j].value;

         // only one radio can be logically checked, don't check the rest
         break;
      }
    }
    correct_answer=document.getElementById(i).value;
    if(correct_answer==new_answer){
       correct_num=1+correct_num;
    }
    i++;
   }
   var marks=(correct_num/len)*100;
   data=[marks,correct_num,len];
   return data;

};
