// OPEN MENU
$('.burger-button').click(function () {
  $('header').toggleClass('menu-open');
  $('.burger-menu-container').fadeToggle();
  $('.menu-main-logo').toggle();
  $('.menu-simple').toggle();
});

// OPEN NUTRITIONAL VALUES
$('.product-section').each(function () {
  var thisSection = $(this);
  thisSection.find('.nutritional-values-button').click(function () {
    thisSection.addClass('nutritional-fact-open');
    thisSection.find('.sub-title').hide();
    thisSection.find('.information-1').hide();
    thisSection.find('.information-2').hide();
    thisSection.find('.product-2-illustrated-informations').hide();
    thisSection.find('.product-2-photo-text').hide();
    thisSection.find('.product-content').hide();
    thisSection.find('.nutritional-facts').show();
  });
  thisSection.find('.nutritional-values-close-button').click(function () {
    thisSection.removeClass('nutritional-fact-open');
    thisSection.find('.sub-title').show();
    thisSection.find('.information-1').show();
    thisSection.find('.information-2').show();
    thisSection.find('.product-2-illustrated-informations').show();
    thisSection.find('.product-2-photo-text').show();
    thisSection.find('.product-content').show();
    thisSection.find('.nutritional-facts').hide();
  });
});

// PARTNER ODD LENGHT CENTER LAST LI
var partners = $('#partners ul li').length;
if (partners % 2 != 0) {
  $('#partners ul li:last-of-type').addClass('partners-illustration-center');
}

// OPEN DEALERS LIST
$('.dealers-button').click(function () {
  if ($('.dealers-list').css('display') == 'flex') {
    $('.dealers-list').css('display', 'none');
  } else {
    $('.dealers-list').css('display', 'flex');
  }
});

// CURVE TEXT
$('.circular-text').arctext({ radius: 90 });

// NEWSLETTER FORM UNDERLINE
$('.newsletter-form .wpcf7-form p:first-of-type').append(
  '<img class="input-underline" src="../wp-content/themes/snoros/dist/svg/snoros-apropos-separateur.svg" alt="Séparateur">'
);
