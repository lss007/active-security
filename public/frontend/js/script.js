$(window).scroll(function(){
  if ($(this).scrollTop() > 5) {
    $('.headerCol').addClass('fixedHeader');
  } else {
    $('.headerCol').removeClass('fixedHeader');
  }
});


$(window).scroll(function(){
  if ($(this).scrollTop() > 250) {
    $('.rightContactLinks').fadeIn();
  } else {
    $('.rightContactLinks').fadeOut();
  }
});


$('.menuToggle').click(function(){
  $('html').toggleClass('activeMenu');
});
$('.menuBackdrop').click(function(){
  $('html').removeClass('activeMenu');
});

$('.js-cookie-consent-agree').click(function(){
  $('.cookiesCol').fadeOut();
})


$('.cookiesCloseTrigger').click(function(){

  $('.cookie-consent').fadeOut();
})

// $('.cookiesCloseTrigger').click(function(){
//   $('.cookiesCol').fadeOut();
// })

$('.ddLinkCol > a').click(function(){
  $(this).parent().find('ul.subMenu').slideToggle();
})


$('.scrollToSection').click(function(){
  $('html, body').animate({
    scrollTop: $( $(this).attr('href') ).offset().top - 90
  }, 500);
  return false;
});
