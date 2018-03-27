$( function() {
  
  //Popup window for 'cancel' button
  $('#cancel').on('click', function(){

    var confirmBox = $('.confirmBox');

    confirmBox.find('.message').text("Details of added modules will be lost.. Are you sure ?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $('#que_list').empty();
      location.href = "director_board_executive.php";
    });

    confirmBox.show();
  });


  $(document).on('click', '.que_remove', function(){

    var confirmBox = $('.confirmBox');
    var box = $(this).closest('.module_data');

    confirmBox.find('.message').text("Are you sure to remove this module?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      box.remove();
    });

    confirmBox.show();
  });


  //logic on complete button, back and next buttons
  $('#done').on('click', function() {
      
    var confirmBox = $('.confirmBox');
    
    confirmBox.find('.message').text("Create course ?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
        
        
      var course_name = $("#name").val();
      var student_count = $("#student_count").val();
      var duration = $("#duration").val();
    

     $.ajax({

        url: "dbOperations/create_course_db.php",
        type: "POST",
        data: {course_name : course_name, student_count : student_count, duration : duration},
 
        success:function(data){
            alert("New course was created...!");
            window.location.href = "director_board_executive.php";
        }

     });   
        
     var module_list = $('#que_list');
     
     module_list.each(function(i) {
        
        var module_name = $('#module_name').val();
        var module_code = $('#module_code').val();
        var semester = $('#semester').val();
        var lecturer = $('#lecturer').val();
        var credits = $('#credits').val();
         
        $.ajax({

        url: "dbOperations/create_course_db.php",
        type: "POST",
        data: {module_name : module_name, module_code : module_code, semester : semester, lecturer : lecturer, credits : credits},
            
        });
     });
     
     

});

confirmBox.show();
});

});

