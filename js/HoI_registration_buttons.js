$(function() {


  $('#cancel').on('click', function(){

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

	$('#approve').on('click', function(){

    var confirmBox = $('.confirmBox');

    confirmBox.find('.message').text("Reject this Course...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var students =$('.student_container').find('.id');
      students.each(function(index, element){
        var row = ($(this).closest('tr'));

        var student_index = row.find(".id").text();
        var course = row.find(".course").text();
        var course_id = row.find(".course_id").text();
        var neme_with_initials = row.find("name_with_initials").text();
        var fullname = row.find(".fullname").text();
        var medium = row.find(".medium").text();
        var address = row.find(".address").text();
        alert(address);
        var gender = row.find(".gender").text();
        var date_of_birth = row.find(".date_of_birth").text();
        var age = row.find(".age").text();
        var mobile = row.find(".mobile").text();
        var home = row.find(".home").text();
        var email = row.find(".email").text();
        var applied_date = row.find(".applied_date").text();
        var selected_date =   row.find(".selected_date").text();



        $.ajax( {

          url: "dbOperations/HoI_registration_db.php",
          type: "POST",
          data: {student_id:student_id,},

          success:function(data){
            window.location.href = "dbOperations/HoI_registration_db.php";
          },

        });
      });

    });

    confirmBox.show();
  });

});
