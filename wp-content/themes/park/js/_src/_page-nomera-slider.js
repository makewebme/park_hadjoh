
// Modal viewer

$(document).ready(function(){

  // Run only on '.page-nomera'
  if (!$('.page-nomera').length) return

  var $modalViewer = $('.modal-viewer')

  // Start sliding
  $('.btn-run-modal').click(function(e) {
    var $nomer = $(e.target).parents('.nomer')
    var dataPath = $nomer.attr('data-path')
    var imgCount = $nomer.attr('data-img-count')

    $modalViewer.find('img').attr('src', dataPath + '1.jpg')

    $modalViewer.attr('data-path', dataPath)
    $modalViewer.attr('data-current', 1)
    $modalViewer.attr('data-img-count', imgCount)

    $modalViewer.show()
  })
})
