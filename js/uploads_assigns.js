$( function() {

  //Popup for add lecture notes
  $('#new_note').on( 'click', function() {

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

    //lec note upload process//
    var uploadBox = $('.upload_popup');

    //action on back button
    uploadBox.find(' input[name="back"] ').click( function(event) {
      event.preventDefault();
      uploadBox.hide();
      location.reload(true);
    } );

    //action when submitting (upload button)
    $('#lecNote_upload').submit( function(ev) {

      ev.preventDefault();
      var fileSize = $(this).find('#fileToUpload')[0].files[0].size/1024;

      if( fileSize < 10000 ) {   //only send files less than 10MB

        url = $(this).attr('action');
        type = $(this).attr('method');
        var file = new FormData( $(this)[0] );
        file.append( 'mod_name', $(this).find('#module_name').val() );
        $.ajax({
          url: url,
          type: type,
          data: file,
          processData: false,
          contentType: false,
          success: function(message){
            alert(message);
            uploadBox.hide();
            location.reload(true);
          },
          error: function(){
            alert("Error occured while uploading!");
            location.reload(true);
          }
        });

      }else {
        alert("Unable to upload, Your file is greater than 10MB!");
        location.reload(true);
      }

    } );

    uploadBox.show();
  } );


  //confirm popup for delete lecture note
  $(document).on('click', '.del_lecNote', function() {

    var confirmBox = $('.confirmBox');
    var note = $(this).closest('.lecN_name').find('.note_path');

    confirmBox.find('.message').text("Are you sure to delete \"" + note.text() + "\" ?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $.ajax({
        url: "lecNote_delete.php",
        method: "POST",
        data: { file_path: note.attr('href'), file_name: note.text() },
        success: function(data){
          alert(data);
          location.reload(true);
        },
        error: function(){
          alert("Error!");
        }
      });
    });

    confirmBox.show();
  });


  //popup table for view an assignment
  $(document).on('click', '.assign_path', function() {
    var popup = $('#popup_preview');
    var assignment = $(this).attr('name');

    // load data into popup table
    $(document).ready( function() {
      $.ajax({
        url: "dbOperations/db_assignment_load.php",
        method: "POST",
        data: {tabname: assignment},
        success: function(data){
          $('#table_preview').html(data);
        }
      });
    } );

    popup.show();
  });


  //action on back button
  $('#popup_preview').find('.container_buttons button[name="back_assign"] ').click( function(event) {
    event.preventDefault();
    $('#table_preview').empty();
    $('#popup_preview').hide();
  } );

  //action on delete button
  $('#popup_preview').find('.container_buttons button[name="delete_assign"] ').click( function(event) {
    event.preventDefault();

    //show confirm delete popup
    var confirmBox = $('.confirmBox');
    confirmBox.find('.message').text("Are you sure to delete assignment?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $.ajax({
        url: "assign_delete.php",
        method: "POST",
        data: { tabname: $('.assign_path').attr('name') },
        success: function(){
          alert("Assignment deleted successfully!");
          location.reload(true);
        },
        error: function(error){
          alert(error);
        }
      });
    });

    confirmBox.show();
    $('#table_preview').empty();
    $('#popup_preview').hide();

  } );


  //load assignment status to the popup
  $(document).on('click', '.assign_path', function() {
    var assignment = $(this).attr('name');

    // load data into sub. status container
    $(document).ready( function() {
      $.ajax({
        url: "dbOperations/db_submission_status.php",
        method: "POST",
        data: {tabname: assignment},
        success: function(data){
          $('#sub_status ul').html(data);
        },
        error: function(err) {
          alert(err);
        }
      });
    } );

    //functionality on view submission button////////////////////////
    $('#view_sub').on('click', function() {
      var popup_sub = $('#submission_preview');

      //click on back button
      popup_sub.find('button[name="back_submission"]').on('click', function() {
        popup_sub.find('#submission_table_preview').empty();
        popup_sub.hide();
      });

      $.ajax({
        url: "dbOperations/db_submission_load.php",
        method: "POST",
        data: {tabname: assignment},
        success: function(data){
          $('#submission_table_preview').html(data);
        },
        error: function(err) {
          alert(err);
        }
      });

      popup_sub.show();

    });

  });



});
