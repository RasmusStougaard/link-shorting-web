    
    $(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('body').addClass('scroller');
    } else {
       $('body').removeClass('scroller');
    }
});


    


/* jQuery
================================================== */
$(function() {
  $('.acc__title').click(function(j) {
    
    var dropDown = $(this).closest('.acc__card').find('.acc__panel');
    $(this).closest('.accordian_cut').find('.acc__panel').not(dropDown).slideUp();
    
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      $(this).closest('.accordian_cut').find('.acc__title.active').removeClass('active');
      $(this).addClass('active');
    }
    
    dropDown.stop(false, true).slideToggle();
    j.preventDefault();
  });
});






$(".toggle_bars").click(function(){
  $("body").toggleClass("openenav");
});
