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


    confirmBox.find('.message').text("Approve this Staff member...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var id = box.find('.staff_id').text();
      alert(id);

    $.ajax({
      url: "dbOperations/HoI_approve_staff_db.php",
      type:"POST",
      data: {id:id},

      success:function(data){
      alert("id sent");
      //window.location= "dbOperations/HoI_approve_staff_db.php";
      },
    });
  });

  confirmBox.show();
  });

});
