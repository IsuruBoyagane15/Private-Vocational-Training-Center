$(function() {


  $('#finish').on('click', function(){

    var confirmBox = $('.confirmBox');

    confirmBox.find('.message').text("Are you sure...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      location.href = "HoI.php";
    });

    confirmBox.show();
  });




  $('.reject').on('click', function(){

    var confirmBox = $('.confirmBox');
	  var box =  $(this).closest('.course_container');


    confirmBox.find('.message').text("Reject this Course...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

		var course_id = parseInt(box.find('.course_id').text());


    $.ajax({
			url: "dbOperations/HoI_remove_modules_db.php",
			type:"POST",
			data: {course_id:course_id,},

			success:function(data){
      alert("Course was rejected...!");
			},
    });

  	$.ajax({

			url: "dbOperations/HoI_remove_course_db.php",
			type:"POST",
			data: {course_id:course_id,},

			success:function(data){
      location.reload(true);
			},
    });

  });

  confirmBox.show();
  });


	$('.approve').on('click', function(){

    var confirmBox = $('.confirmBox');
	  var box =  $(this).closest('.course_container');

    confirmBox.find('.message').text("Approve this Course...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

		  var course_name = box.find('.course_name').text();
		  var student_count = parseInt(box.find('.student_count').text());
		  var duration = parseInt(box.find('.duration').text());
		  var trade = box.find('.trade').text();
		  var course_type = box.find('.course_type').text();
		  var type = box.find('.type').text();
		  var accredit_level = box.find('.accredit_level').text();
		  var medium = box.find('.medium').text();
		  var required_qualification = box.find('.required_qualification').text();
		  var course_id = parseInt(box.find('.course_id').text());
      var c_descrip = box.find('.descrip').text();


		 $.ajax({

			url: "dbOperations/HoI_approve_course_db.php",
			method: "POST",
			data: {course_name : course_name,
          student_count : student_count,
          duration : duration,
          trade : trade,
          course_type:  course_type,
          type:type,
          accredit_level: accredit_level,
          medium: medium,
          required_qualification:required_qualification,
          c_descrip:c_descrip,
          course_id:course_id,
          },

			success:function(data){
				alert("New course was approved...!");
  			location.reload(true);
			  }
			 });

    });
    confirmBox.show();
  });

});
