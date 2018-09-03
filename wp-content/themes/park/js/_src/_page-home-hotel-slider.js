
// Hotel thumb slider

$(document).ready(function() {
  // Runs only at home page
  if (!$('body.home').length) return

  var $modalViewer = $('.modal-viewer')

  // Start sliding
  $('.slider-hotel .img-wrapper').click(function(e) {
    var $sliderHotel = $(e.target).parents('.slider-hotel')
    var dataPath = $sliderHotel.attr('data-path')
    var imgCount = $sliderHotel.attr('data-img-count')

    $modalViewer.find('img').attr('src', dataPath + '1.jpg')

    $modalViewer.attr('data-path', dataPath)
    $modalViewer.attr('data-current', 1)
    $modalViewer.attr('data-img-count', imgCount)

    $modalViewer.show()
  })
})
