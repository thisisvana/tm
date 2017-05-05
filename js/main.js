//mobile-menu
$(function() {

  $('.mobile-menu').click(function(){

    $('.main-menu').toggle(400);
  });

  $(window).on('load', function() {
      // will first fade out the loading animation
      $(".preloader").fadeOut();
      //then background color will fade out slowly
      $("#faceoff").delay(200).fadeOut("slow");
  });

  $('.banner-heading').addClass('animated rollIn');


});

$(document).ready(function(){
    $('[data-target="#myModal"]').click(function(){
        let id = $(this).data('id');
        $('.modal-content').each(function(){
          $(this).show();
        });

        $('.modal-content').each(function(){
          let idModal = $(this).data('id');
          if(idModal !== id) {
            $(this).hide();
          }
        });

        $('#myModal').show();
    });
    $('#myModal').delegate('#closer', 'click', function(){
      console.log('modal');
        $('#myModal').hide();
    });
});
