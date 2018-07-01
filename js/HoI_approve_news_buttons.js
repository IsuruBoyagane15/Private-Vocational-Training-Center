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
    var box =  $(this).closest('.news_items');


    confirmBox.find('.message').text("Reject this News Item...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

      var id = parseInt(box.find('.ids').text());
      alert(id);

    $.ajax({
      url: "dbOperations/HoI_reject_news_db.php",
      type:"POST",
      data: {id:id},
      
      success:function(data){
      window.location.href = "dbOperations/HoI_reject_news_db.php";
      },
    });
  });

  confirmBox.show();
  });

  // $('.approve').on('click', function(){
  //   var confirmBox = $('.confirmBox');
  //   var box =  $(this).closest('.basic_data');
  //
  //
  //   confirmBox.find('.message').text("Approve this News item...?");
  //   confirmBox.find('.yes, .no').unbind().click( function() {
  //       confirmBox.hide();
  //   } );
  //
  //
  //   confirmBox.find('.yes').click( function() {
  //
  //     var id = box.find('.ids').text();
  //
  //   $.ajax({
  //     url: "dbOperations/HoI_approve_staff_db.php",
  //     type:"POST",
  //     data: {staff_id:staff_id,name:name},
  //
  //     success:function(data){
  //     window.location.href = "dbOperations/HoI_approve_staff_db.php";
  //     alert("id sent");
  //     },
  //   });
  // });
  //
  // confirmBox.show();
  // });

});
