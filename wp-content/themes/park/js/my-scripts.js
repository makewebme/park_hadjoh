!function(r){var t={};function a(e){if(t[e])return t[e].exports;var n=t[e]={i:e,l:!1,exports:{}};return r[e].call(n.exports,n,n.exports,a),n.l=!0,n.exports}a.m=r,a.c=t,a.d=function(e,n,r){a.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:r})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(n,e){if(1&e&&(n=a(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var t in n)a.d(r,t,function(e){return n[e]}.bind(null,t));return r},a.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(n,"a",n),n},a.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},a.p="",a(a.s="./js/_src/my-scripts.js")}({"./js/_src/_main-menu.js":function(module,exports,__webpack_require__){"use strict";eval("\n\n// Main menu functionality\n\n$(document).ready(function () {\n  $('.btn-mob-menu').click(function () {\n    $('.menu-main-menu-container').toggleClass('opened');\n  });\n});\n\n//# sourceURL=webpack:///./js/_src/_main-menu.js?")},"./js/_src/_modal-viewer.js":function(module,exports,__webpack_require__){"use strict";eval("\n\n// Common modal viewer functionality\n\n$(document).ready(function () {\n\n  // Run only if '.modal-viewer' exists\n  if (!$('.modal-viewer').length) return;\n\n  var $modalViewer = $('.modal-viewer');\n\n  // Close modal\n  $('.modal-viewer .btn-close').click(function () {\n    $modalViewer.hide();\n  });\n\n  // Prev and next slides toggle\n  $('.modal-viewer .btn-next, .modal-viewer .btn-prev').click(function (e) {\n    var dir = $(e.target).attr('data-dir');\n\n    var current = +$('.modal-viewer').attr('data-current');\n    var imgCount = +$modalViewer.attr('data-img-count');\n    var dataPath = $modalViewer.attr('data-path');\n    var newSrc;\n\n    // Next\n    if (dir === 'next') {\n      if (current < imgCount) {\n        newSrc = dataPath + (current + 1) + '.jpg';\n        $modalViewer.attr('data-current', current + 1);\n      } else {\n        newSrc = dataPath + 1 + '.jpg';\n        $modalViewer.attr('data-current', 1);\n      }\n      // Prev\n    } else {\n      if (current === 1) {\n        newSrc = dataPath + imgCount + '.jpg';\n        $modalViewer.attr('data-current', imgCount);\n      } else {\n        newSrc = dataPath + (current - 1) + '.jpg';\n        $modalViewer.attr('data-current', current - 1);\n      }\n    }\n\n    $modalViewer.find('img').attr('src', newSrc);\n  });\n});\n\n//# sourceURL=webpack:///./js/_src/_modal-viewer.js?")},"./js/_src/_page-home-carousel.js":function(module,exports,__webpack_require__){"use strict";eval("\n\n// Init carousel\n\n$(document).ready(function () {\n  if ($('.owl-carousel').length) {\n    $('.owl-carousel').owlCarousel({\n      items: 1,\n      loop: true,\n      nav: true,\n      dots: true\n    });\n  }\n});\n\n//# sourceURL=webpack:///./js/_src/_page-home-carousel.js?")},"./js/_src/_page-home-hotel-slider.js":function(module,exports,__webpack_require__){"use strict";eval("\n\n// Hotel thumb slider\n\n$(document).ready(function () {\n  // Runs only at home page\n  if (!$('body.home').length) return;\n\n  var $modalViewer = $('.modal-viewer');\n\n  // Start sliding\n  $('.slider-hotel .img-wrapper').click(function (e) {\n    var $sliderHotel = $(e.target).parents('.slider-hotel');\n    var dataPath = $sliderHotel.attr('data-path');\n    var imgCount = $sliderHotel.attr('data-img-count');\n\n    $modalViewer.find('img').attr('src', dataPath + '1.jpg');\n\n    $modalViewer.attr('data-path', dataPath);\n    $modalViewer.attr('data-current', 1);\n    $modalViewer.attr('data-img-count', imgCount);\n\n    $modalViewer.show();\n  });\n});\n\n//# sourceURL=webpack:///./js/_src/_page-home-hotel-slider.js?")},"./js/_src/_page-nomera-slider.js":function(module,exports,__webpack_require__){"use strict";eval("\n\n// Modal viewer\n\n$(document).ready(function () {\n\n  // Run only on '.page-nomera'\n  if (!$('.page-nomera').length) return;\n\n  var $modalViewer = $('.modal-viewer');\n\n  // Start sliding\n  $('.btn-run-modal').click(function (e) {\n    var $nomer = $(e.target).parents('.nomer');\n    var dataPath = $nomer.attr('data-path');\n    var imgCount = $nomer.attr('data-img-count');\n\n    $modalViewer.find('img').attr('src', dataPath + '1.jpg');\n\n    $modalViewer.attr('data-path', dataPath);\n    $modalViewer.attr('data-current', 1);\n    $modalViewer.attr('data-img-count', imgCount);\n\n    $modalViewer.show();\n  });\n});\n\n//# sourceURL=webpack:///./js/_src/_page-nomera-slider.js?")},"./js/_src/my-scripts.js":function(module,exports,__webpack_require__){"use strict";eval('\n\n__webpack_require__(/*! ./_modal-viewer.js */ "./js/_src/_modal-viewer.js");\n\n__webpack_require__(/*! ./_main-menu.js */ "./js/_src/_main-menu.js");\n\n__webpack_require__(/*! ./_page-home-carousel.js */ "./js/_src/_page-home-carousel.js");\n\n__webpack_require__(/*! ./_page-home-hotel-slider.js */ "./js/_src/_page-home-hotel-slider.js");\n\n__webpack_require__(/*! ./_page-nomera-slider.js */ "./js/_src/_page-nomera-slider.js");\n\n//# sourceURL=webpack:///./js/_src/my-scripts.js?')}});