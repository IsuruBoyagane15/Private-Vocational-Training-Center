$(document).ready(function(){
  $.ajax({
    url: "dbOperations/db_load_profiledata_staff.php",
    method: "POST",
    success: function(data){
      arrD  = JSON.parse(data);

      $('#profdata').html(arrD[1]);
      $('#name').html(arrD[0]);
      $('#image').html(arrD[2]);
    },
    error: function(error){
      alert(error);
    }
  });
});

$(function(){
  $('#picchange').on('click',function(){
    var x = document.getElementById("popupbox");
    if(x.style.display === "none") {
             x.style.display = "block";
    } else {
              x.style.display = "none";
    }
  });
});

$(function(){
  $('#changer').on('submit',function(event) {

  event.preventDefault();
  var fileSize = $(this).find('#chooser')[0].files[0].size/1024;

  if( fileSize < 4000 ) {   //only send files less than 10MB

    var url = $(this).attr('action');
    var type = $(this).attr('method');
    var file = new FormData( $(this)[0] );
    $.ajax({
      url: url,
      type: type,
      data: file,
      processData: false,
      contentType: false,
      success: function(data){
        alert("Profile picture uploaded successfully!");
        location.reload(true);
      },
      error: function(){
        alert("Error occured while uploading!");
        location.reload(true);
      }
    });

  }else {
    alert("Unable to upload, Your file is greater than 4MB!");
    location.reload(true);
  }
});
});

$(function(){
  $('#back').on('click',function(event){
    var x= document.getElementById("popupbox");
    x.style.display="none";
  });
});
