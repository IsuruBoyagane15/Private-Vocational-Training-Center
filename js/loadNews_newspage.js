$( function() {

  //load news
  $(document).ready( function() {
    $.ajax({
      url: "dbOperations/loadNews_newsPage.php",
      method: "POST",
      success: function(data){
        $('.news_dbfetch').html(data);
      }
    });
  });

});
