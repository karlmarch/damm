$(document).ready(function() {
  $('.advanced-search-link').click(function() {
  $('.advanced-form').slideToggle();
	$('.advanced-form').toggleClass('open');
  });
  
  $('.product-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true
  });
  
});