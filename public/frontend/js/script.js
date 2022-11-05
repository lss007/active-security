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

$('.cookiesCloseTrigger').click(function(){
  $('.cookiesCol').fadeOut();
})

$('.ddLinkCol > a').click(function(){
  $(this).parent().find('ul.subMenu').slideToggle();
})
