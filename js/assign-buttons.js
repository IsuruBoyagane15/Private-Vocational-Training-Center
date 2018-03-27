$( function() {

  //load assigned modules to the module select
  $(document).ready( function() {
    $.ajax({
      url: "dbOperations/db_newAssign_module.php",
      method: "POST",
      success: function(data){
        $('#module_select').html(data);
      }
    });
  } );

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


  //logic on complete button, back and next buttons
  $('#complete').on('click', function() {

    if( $('#assignment_name').val() == "" ){
      alert("Assignment name is required!");
    }else{
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
    }
  });

    //logic on back button
    $("#back").click( function() {
      $('#popup_verify #table_verify td').remove();
      $("#popup_verify").hide();
    } );

    //logic on next button
    $("#verify_next").click( function() {
      $("#set_deadline").show();
      $('#popup_verify #table_verify td').remove();
      $("#popup_verify").hide();
    } );

    //logic on create button
    $('#create').click( function() {

      $('#set_deadline').hide();

      //set assignment name and deadline variables
      var mod = $('.assignment_details').find('#module_name').val();
      var assign = $('.assignment_details').find('#assignment_name').val();
      var deadline;
      if( $('#noDeadline:checked').val() ) {
        deadline = "0000-00-00 00:00:00";
      }else if( $('#hasDeadline').prop('checked', 'ckecked') ) {
        var dead_ele = $('#set_deadline #deadline_option');
        deadline = dead_ele.find('#year').val();
        deadline += "-" + dead_ele.find('#month').val();
        deadline += "-" + dead_ele.find('#day').val();
        deadline += " " + dead_ele.find('#hour').val();
        deadline += ":" + dead_ele.find('#minute').val();
        deadline += ":00";
       }

      //add questions to the db

      var allQus = [];
      $('.questions #que_list li').each( function() {

        var quest = $(this).closest('.question');
        question = quest.find('textarea').val();
        opt1 = quest.find('#option1').val();
        opt2 = quest.find('#option2').val();
        opt3 = quest.find('#option3').val();
        opt4 = quest.find('#option4').val();
        correct_opt = quest.find('input[type=radio]:checked').val();

        var array = [question, opt1, opt2, opt3, opt4, correct_opt];
        allQus.push(array);

      } );

      $.ajax({
        url: "dbOperations/db_createAssignment.php",
        method: "POST",
        data: {module_name: mod, assign_name:assign, deadline:deadline, questions: allQus},
        success: function(){
          alert("Assignment Created Successfully!");
          window.location.href = "lecturer-profile.php";
        },
        error: function(){
          alert("Error: Assignment Creation Failed!!");
        }
      });

    } );

} );
