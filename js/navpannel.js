$(function(){
 $(document).ready(function(){
  var path=window.location.pathname;
  path=path.replace(/\/$/,"");
  path=decodeURIComponent(path);
  $(".topnav a").each(function(){
    var href=$(this).attr('href');
    if(path.substring(0,href.length)===href){
      $(this).closest('a').addClass('active');
      alret("in")
    }
  });
});
});
