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

});
