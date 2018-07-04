$(function() {


$('#cancel').on('click', function(){

	var confirmBox = $('.confirmBox');
  confirmBox.find('.message').text("Details of added modules will be lost.. Are you sure ?");
  confirmBox.find('.yes, .no').unbind().click( function() {
    	confirmBox.hide();
});

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


$('#done').on('click', function() {

  var confirmBox = $('.confirmBox');
	var module_list = $('#que_list li');
	var len = module_list.length;

    confirmBox.find('.message').text("Create course ?");

    confirmBox.find('.yes, .no').unbind().click( function() {
      	confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

		if($.trim($('#name').val()) == ''){
			alert('Course Name can not be left blank...!');
			 }
		else if($.trim($('#trade').val()) == ''){
			alert('Trade Field can not be left blank...!');
		}
		else if($.trim($('#accredit_level').val()) == ''){
			alert('Accredit Level can not be left blank...!');
		}
		else if($.trim($('#required_qualification').val()) == ''){
			alert('Required Qulifications can not be left blank...!');
		}
		else if(!$('#medium').val()){
			alert('Please select a medium...!');
		}
		else if(!$('#course_type').val()){
			alert('Please select a Course Type...!');
		}
		else if(!$('#type').val()){
			alert('Please select a Type...!');
		}else if(!$('#type').val()){
			alert('Please select a Type...!');
		}
		else if(parseInt($('#student_count').val()) > 500){
			alert('Institute can recruit maximum 500 students...!');
		}
		else if($('#student_count').val() == ""){
			alert('Please enter number of students...!');
		}
		else if(parseInt($('#student_count').val())<=0){
			alert('Enter valid number in Number of Students...!');
		}
		else if(parseInt($('#duration').val()) > 60){
			alert('Institute offers courses for maximum five years of period...!');
		}
		else if(parseInt($('#duration').val())<=0 || !$('#duration').val()){
			alert('Enter valid number for months in Duration...!');
		}
		else if(parseInt($('#duration').val()) == ""){
			alert('Please enter Duration...!');
		}
		else if( (module_list.length === 0) ){
			alert('Modules are not added...!');
		}


		else{

		var is_done = "NO";

		module_list.each(function(index, element){

				if($.trim($(this).find('.module_name').val()) == ''){
					alert('Module Name can not be left blank...!');
				}

				else if($.trim($(this).find('.description').val()) == ''){
					alert('Description can not be left blank...!');
				}

				else if($(this).find('.term').val() == ""){
					alert('Term can not be left blank...!');
				}

				else if($.trim($(this).find('.lecturer').val()) == ''){
					alert('Lecturer can not be left blank...!');
				}

				else if(index === (len - 1)){
					is_done = "YES";
				}
			});

			if (is_done==="YES"){
				var course_name = $('#name').val();
				var student_count = $('#student_count').val();
				var duration = $('#duration').val();
				var trade = $('#trade').val();
				var course_type = $('#course_type').val();
				var type = $('#type').val();
				var accredit_level = $('#accredit_level').val();
				var medium = $('#medium').val();
				var required_qualification = $('#required_qualification').val();


			  	$.ajax( {

						url: "dbOperations/create_course_db.php",
						type: "POST",
						data: {course_name : course_name, student_count : student_count, duration : duration,  trade : trade, course_type:  course_type, type:type, accredit_level: accredit_level,  medium: medium,  required_qualification:required_qualification},

						success:function(data){
							alert("New course was created successfully...!");
							window.location.href = "director_board_executive.php";
						}

					});

				module_list.each(function(index, element){
						var module_name = $(this).find('.module_name').val();
						var description = $(this).find('.description').val();
						var term = $(this).find('.term').val();
						var lecturer = $(this).find('.lecturer').val();


						$.ajax({

							url: "dbOperations/create_modules_db.php",
							type: "POST",
							data: {module_name : module_name, description : description, term : term, lecturer : lecturer, },

							success:function(data){
								alert("New module was created...!");


							}

						});
					});
     			}
		}

});

confirmBox.show();
});

});
