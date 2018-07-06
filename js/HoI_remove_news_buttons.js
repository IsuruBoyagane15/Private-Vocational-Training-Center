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


  $('.remove').on('click', function(){

    var confirmBox = $('.confirmBox');
	  var box =  $(this).closest('.news_items');


    confirmBox.find('.message').text("Remove this news...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
        confirmBox.hide();
    } );


    confirmBox.find('.yes').click( function() {

		var id = box.find('.ids').text();
    alert(id);

    $.ajax({
			url: "dbOperations/HoI_remove_news_logic_db.php",
			type:"POST",
			data: {id:id,},

			success:function(data){
        alert("id id ddjd");
			},
    });
    document.location.reload(true);
  });

  confirmBox.show();
  });

});
