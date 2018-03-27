$( function() {

  //load assigned modules to the left panel
  $(document).ready( function() {
    $.ajax({
      url: "dbOperations/db_fetch_module.php",
      method: "POST",
      success: function(data){
        $('#assign_mods').html(data);
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

  //load upcoming events to the right panel


  //load submission details to the right panel


} );
