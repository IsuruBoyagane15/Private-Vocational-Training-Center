$('#news_items li:gt(0) ').hide();

setInterval( function(){
  $('#news_items :first-child')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#news_items :first-child');
}, 3000 );
