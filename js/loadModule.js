$( function() {

  //load assigned modules to the left panel
  var index=$('#index').val();
  $(document).ready( function() {
    $.ajax({
      url: "dbOperations/db_fetch_module.php",
      method: "POST",
      data: {id:index},
      success: function(data){
        $('#assign_mods').html(data);

         //load first module data at the startup if exist
        var firstMod = $('#assign_mods').first().find('.mod_link').attr('data-id');
        if( firstMod != null ){
          $.ajax({
            url: "dbOperations/db_fetch_moduleData.php",
            method: "POST",
            data: { id: firstMod },
            success: function(data){
              $('.middle_content').html(data);
            }
          });
        }else{
          $('.middle_content').html("<br/><br/><br/><marquee>...You haven't enrolled to any module yet...</marquee>");
        }

      }
    });
  } );


  //load selected module data to the middle body
  $(document).on('click', '.mod_link', function(event) {

    $.ajax({
      url: "dbOperations/db_fetch_moduleData.php",
      method: "POST",
      data: { id: $(this).attr('data-id') },
      success: function(data){
        $('.middle_content').html(data);
      }
    });
  });


  // //load first module data at startup
  // $(document).ready( function() {
  //   var firstMod = $('#assign_mods').first().find('.mod_link').attr('data-id');
  //   alert(firstMod);
  //   $.ajax({
  //     url: "dbOperations/db_fetch_moduleData.php",
  //     method: "POST",
  //     data: { id: firstMod },
  //     success: function(data){
  //       $('.middle_content').html(data);
  //     }
  //   });
  // });


} );
