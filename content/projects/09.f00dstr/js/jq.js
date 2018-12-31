$(document).ready(function(){
    $('.krotka').click( function() {
        window.location = $(this).find('a').attr('href');
    }).hover( function() {
        $(this).toggleClass('hover');
    });



$( ".home-btn" ).hover(
  function() {
        $(this).toggleClass('btn-fill');
        $(this).toggleClass('white-text');

  });
});