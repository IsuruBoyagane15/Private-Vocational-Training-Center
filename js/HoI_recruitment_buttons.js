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
    var box =  $(this).closest('tr');


    confirmBox.find('.message').text("Reject this Staff member...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var staff_id = box.find('.staff_id').text();

    $.ajax({
      url: "dbOperations/HoI_reject_staff_db.php",
      type:"POST",
      data: {staff_id:staff_id,},

      success:function(data){
        alert("Staff member was rejected...!");
        location.reload(true);
      },
    });

  });

  confirmBox.show();
  });

  $('.approval').on('click', function(){
    var confirmBox = $('.confirmBox');
    var box =  $(this).closest('tr');


    confirmBox.find('.message').text("Approve this staff member...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var id = box.find('.staff_id').text();

    $.ajax({
      url: "dbOperations/HoI_approve_staff_db.php",
      type:"POST",
      data: {id:id},

      success:function(data){
      alert("Staff member was registered...!");
      location.reload(true);
      },
    });
  });

  confirmBox.show();
  });

});
