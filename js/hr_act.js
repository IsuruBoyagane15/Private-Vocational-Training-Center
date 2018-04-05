$(function(){

  //load already added news by hr (still not approved)
  $(document).ready( function(){
    $.ajax({
      url: "dbOperations/db_hr_loadnews.php",
      method: "POST",
      success: function(data){
        $('#news_added').html(data);
      },
      error: function(err){
        alert(err);
      }
    });
  } );


  //preview a selected news item
  $(document).on('click', '#news_added li a', function(event) {
    event.preventDefault();
    $('.popup_box').show();

    $.ajax({
      url: "dbOperations/db_hr_news.php",
      method: "POST",
      data: { id: $(this).attr('name') },
      success: function(data){
        $('.popup_box').html(data);
      }
    });
  });


  //click on back button
  $(document).on('click', '#popup_back', function() {
    $('.popup_box').hide();
  });


  //delete a hr added news (still not approved)
  $(document).on('click', '#news_delete', function() {

    var file_path = $(this).closest('.pop_btn_container').closest('.popup_box').find('a').attr('href');
    var confirmBox = $('.confirmBox');

    //confirm popup for delete news item
    confirmBox.find('.message').text("Are you sure about delete?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $('.popup_box').hide();
      $.ajax({
        url: "dbOperations/db_hr_news_delete.php",
        method: "POST",
        data: { file_path: file_path },
        success: function(msg){
          alert(msg);
          location.reload(true);
        },
        error: function(err){
          alert(err);
        }
      });
    });

    confirmBox.show();
  });


  //add new news item request
  $('#btn_news').on('click', function(){
    $('.upload_popup').show();
  });

  //back button on upload popup
  $('.button_container input[name="back"]').on('click', function(event){
    event.preventDefault();
    $('.upload_popup').hide();
    location.reload(true);
  });

  //request to add news item
  $('#news_upload').submit( function(ev) {

    ev.preventDefault();
    var fileSize = $(this).find('#fileToUpload')[0].files[0].size/1024;

    if( fileSize < 20000 ) {   //only send files less than 20MB

      url = $(this).attr('action');
      type = $(this).attr('method');

      var file = new FormData( $(this)[0] );
      file.append( 'name', $(this).find('#news_name').val() );
      file.append( 'description', $(this).find('#news_des').val() );
      var exdate = $(this).find('#year').val() +"-"+ $(this).find('#month').val() +"-"+ $(this).find('#day').val();
      file.append( 'ex_date', exdate );

      $.ajax({
        url: url,
        type: type,
        data: file,
        processData: false,
        contentType: false,
        success: function(message){
          alert(message);
          $('.upload_popup').hide();
          location.reload(true);
        },
        error: function(){
          alert("Error occured while uploading!");
          location.reload(true);
        }
      });

    }else {
      alert("Unable to upload, Your file is greater than 20MB!");
      location.reload(true);
    }

  } );


  //load already added news by hr (approved)
  $(document).ready( function(){
    $.ajax({
      url: "dbOperations/db_hr_loadnews_approved.php",
      method: "POST",
      success: function(data){
        $('#app_news_added').html(data);
      },
      error: function(err){
        alert(err);
      }
    });
  } );


  //preview a selected news item
  $(document).on('click', '#app_news_added li a', function(event) {
    event.preventDefault();
    $('.popup_box').show();

    $.ajax({
      url: "dbOperations/db_hr_news_app.php",
      method: "POST",
      data: { id: $(this).attr('name') },
      success: function(data){
        $('.popup_box').html(data);
      }
    });
  });


  //lecture post applicant preview//

  //load lecture post applicants
  $(document).ready(function() {
    $.ajax({
      url: "dbOperations/db_hr_loadLecApplicants.php",
      method: "POST",
      success: function(data){
        $('#lec_apps').html(data);
      },
      error: function(err){
        alert(err);
      }
    });
  });

  //preview a selected applicant details (lecturer)
  $(document).on('click', '#lec_apps li a', function(event) {
    event.preventDefault();
    $('.popup_box').show();

    $.ajax({
      url: "dbOperations/db_hr_previewLec.php",
      method: "POST",
      data: { id: $(this).attr('name') },
      success: function(data){
        $('.popup_box').html(data);
      }
    });
  });

  //functionality on dismiss button (deselect a lecturer applicant)
  $(document).on('click', '#lec_dismiss', function() {

    //confirm popup for deselect a lecturer applicant
    var confirmBox = $('.confirmBox');
    var id = ( $('.popup_data').find('#no').text() ).slice(4,-1);

    confirmBox.find('.message').text("Are you sure to dismiss this lecture post applicant ?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $('.popup_box').hide();
      $.ajax({
        url: "dbOperations/db_hr_dismiss_applicant_lec.php",
        method: "POST",
        data: { id : id },
        success: function(msg){
          alert(msg);
          location.reload(true);
        },
        error: function(err){
          alert(err);
        }
      });
    });

    confirmBox.show();
  } );

  //functionality on select button (select a lecture post applicant)
  $(document).on('click', '#lec_select', function() {

    //confirm popup for select a lecture applicant
    var confirmBox = $('.confirmBox');
    var id = ( $('.popup_data').find('#no').text() ).slice(4,-1);

    confirmBox.find('.message').text("Are you sure to select this lecture applicant ?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $('.popup_box').hide();
      $.ajax({
        url: "dbOperations/db_hr_select_applicant_lec.php",
        method: "POST",
        data: { id : id },
        success: function(msg){
          alert(msg);
          location.reload(true);
        },
        error: function(err){
          alert(err);
        }
      });
    });

    confirmBox.show();
  } );


  //student applicant preview//

  //load student applicants
  $(document).ready(function() {
    $.ajax({
      url: "dbOperations/db_hr_loadStudApplicants.php",
      method: "POST",
      success: function(data){
        $('#stud_apps').html(data);
      },
      error: function(err){
        alert(err);
      }
    });
  });

  //preview a selected applicant details (student)
  $(document).on('click', '#stud_apps li a', function(event) {
    event.preventDefault();
    $('.popup_box').show();

    $.ajax({
      url: "dbOperations/db_hr_previewStud.php",
      method: "POST",
      data: { id: $(this).attr('name') },
      success: function(data){
        $('.popup_box').html(data);
      }
    });
  });

  //functionality on dismiss button (deselect a student)
  $(document).on('click', '#stud_dismiss', function() {

    //confirm popup for deselect a student
    var confirmBox = $('.confirmBox');
    var id = ( $('.popup_data').find('#no').text() ).slice(4,-1);

    confirmBox.find('.message').text("Are you sure to dismiss this student ?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $('.popup_box').hide();
      $.ajax({
        url: "dbOperations/db_hr_dismiss_applicant_stud.php",
        method: "POST",
        data: { id : id },
        success: function(msg){
          alert(msg);
          location.reload(true);
        },
        error: function(err){
          alert(err);
        }
      });
    });

    confirmBox.show();
  } );

  //functionality on select button (select a student)
  $(document).on('click', '#stud_select', function() {

    //confirm popup for select a student
    var confirmBox = $('.confirmBox');
    var id = ( $('.popup_data').find('#no').text() ).slice(4,-1);

    confirmBox.find('.message').text("Are you sure to select this student ?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() {
      $('.popup_box').hide();
      $.ajax({
        url: "dbOperations/db_hr_select_applicant_stud.php",
        method: "POST",
        data: { id : id },
        success: function(msg){
          alert(msg);
          location.reload(true);
        },
        error: function(err){
          alert(err);
        }
      });
    });

    confirmBox.show();
  } );
});
