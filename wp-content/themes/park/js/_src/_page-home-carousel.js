
// Init carousel

$(document).ready(function(){
  if ($('.owl-carousel').length) {
    $('.owl-carousel').owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      dots: true
    })
  }
})
