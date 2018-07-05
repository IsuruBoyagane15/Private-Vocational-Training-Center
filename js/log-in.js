function login(){
   $.ajax(){
     url: "inc/validate.php?index="+index,
     method: "POST",
     success: function(data){
       alert("Log in successful!");
       header("Location:../student_profile.php?index=$username");
     },
     error: function(error){
       alert(error);
     }
   });
   }
}
