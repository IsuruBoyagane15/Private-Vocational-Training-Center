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



  $('.rejection').on('click', function(){
    var confirmBox = $('.confirmBox');
    var box =  $(this).closest('.staff_container');


    confirmBox.find('.message').text("Reject this Staff member...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var staff_id = box.find('.staff_id').text();
      alert(staff_id);

    $.ajax({
      url: "dbOperations/HoI_reject_staff_db.php",
      type:"POST",
      data: {staff_id:staff_id,},

      success:function(data){
      window.location.href = "HoI_recruitment.php";
      },
    });
  });

  confirmBox.show();
  });

  $('.approval').on('click', function(){
    var confirmBox = $('.confirmBox');
    var box =  $(this).closest('.staff_container');


    confirmBox.find('.message').text("Reject this Staff member...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var staff_id = box.find('.staff_id').text();
      var name = box.find('.name').text();

    $.ajax({
      url: "dbOperations/HoI_approve_staff_db.php",
      type:"POST",
      data: {staff_id:staff_id,name:name},

      success:function(data){
      window.location.href = "dbOperations/HoI_approve_staff_db.php";
      alert("id sent");
      },
    });
  });

  confirmBox.show();
  });

});
