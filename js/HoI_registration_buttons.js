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

    confirmBox.find('.message').text("Approve all students...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var students =$('.student_container').find('.id');
      students.each(function(index, element){
        var row = ($(this).closest('tr'));

        var id = parseInt(row.find(".id").text());
        //alert(id);
        var course_id = row.find(".course_id").text();
        //alert(course_id);
        var nic = row.find(".nic").text();
        //alert(nic);
        var name_with_initials = row.find(".name_with_initials").text();
        //alert(neme_with_initials);
        var fullname = row.find(".fullname").text();
        //alert(fullname);
        var medium = row.find(".medium").text();
        //alert(medium);
        var address = row.find(".address").text();
        //alert(address);
        var gender = row.find(".gender").text();
        //alert(gender);
        var date_of_birth = row.find(".date_of_birth").text();
        //alert(date_of_birth);
        var age = row.find(".age").text();
        //alert(age);
        var mobile = row.find(".mobile").text();
        //alert(mobile);
        var home = row.find(".home").text();
        //alert(home);
        var email = row.find(".email").text();
        //alert(email);
        //var applied_date = row.find(".applied_date").text();
        //alert(applied_date);
        var selected_date =   row.find(".selected_date").text();



        $.ajax( {

          url: "dbOperations/HoI_registration_db.php",
          type: "POST",
          data: {
            id : id,
            course_id : course_id,
            nic : nic,
            name_with_initials : name_with_initials,
            fullname : fullname,
            medium : medium,
            address : address,
            gender : gender,
            date_of_birth : date_of_birth,
            age : age,
            mobile : mobile,
            home : home,
            email : email,
            selected_date : selected_date,
          },

          success:function(data){
            alert("student registered");
          },

        });
      });
    });

    confirmBox.show();
  });

});
