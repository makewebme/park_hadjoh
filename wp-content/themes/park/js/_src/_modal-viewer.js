
// Common modal viewer functionality

$(document).ready(function() {

  // Run only if '.modal-viewer' exists
  if (!$('.modal-viewer').length) return

  var $modalViewer = $('.modal-viewer')

  // Close modal
  $('.modal-viewer .btn-close').click(function() {
    $modalViewer.hide()
  })

  // Prev and next slides toggle
  $('.modal-viewer .btn-next, .modal-viewer .btn-prev').click(function(e) {
    var dir = $(e.target).attr('data-dir')

    var current = +$('.modal-viewer').attr('data-current');
    var imgCount = +$modalViewer.attr('data-img-count');
    var dataPath = $modalViewer.attr('data-path');
    var newSrc

    // Next
    if (dir === 'next'){
      if (current < imgCount) {
        newSrc = dataPath + (current + 1) + '.jpg'
        $modalViewer.attr('data-current', current + 1)
      } else {
        newSrc = dataPath + 1 + '.jpg'
        $modalViewer.attr('data-current', 1)
      }
    // Prev
    } else {
      if (current === 1) {
        newSrc = dataPath + imgCount + '.jpg'
        $modalViewer.attr('data-current', imgCount)
      } else {
        newSrc = dataPath + (current - 1) + '.jpg'
        $modalViewer.attr('data-current', current - 1)
      }
    }

    $modalViewer.find('img').attr('src', newSrc)
  })

})
