$( function() {

  //Popup window for 'cancel' button
  $('#cancel').on('click', function(){

    var confirmBox = $('.confirmBox');

    confirmBox.find('.message').text("All questions will be lost.. Are you sure about cancel?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $('#que_list').empty();
      location.href = "lecturer-profile.php";
    });

    confirmBox.show();
  });


  //remove a question using 'remove' button
  $(document).on('click', '.que_remove', function(){

    var confirmBox = $('.confirmBox');
    var box = $(this).closest('.question');

    confirmBox.find('.message').text("Are you sure to remove question?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      box.remove();
    });

    confirmBox.show();
  });


  //logic on complete button
  $('#complete').on('click', function() {

    //show popup window
    $("#popup_verify").show();

    //add questions to the table
    $('.questions #que_list li').each( function() {
      var quest = $(this).closest('.question');
      var question = quest.find('textarea').val();
      var opt1 = quest.find('#option1').val();
      var opt2 = quest.find('#option2').val();
      var opt3 = quest.find('#option3').val();
      var opt4 = quest.find('#option4').val();
      var correctopt = quest.find('input[type=radio]:checked').val();
      $("#popup_verify #table_verify").append("<tr><td>" + question + "</td><td>" + opt1 + "</td><td>" + opt2 + "</td><td>" + opt3 + "</td><td>" + opt4 + "</td><td>" + correctopt + "</td></tr>");
    } );

    $("#back").click( function() {
      $('#popup_verify #table_verify td').empty();
      $("#popup_verify").hide();
    } );

    $("#verify_next").click( function() {
      $("#popup_verify").hide();
    } );

  });
} );






$( function() {

} );
