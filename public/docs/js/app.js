/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./docs/assets/js/feed-back.js":
/*!*************************************!*\
  !*** ./docs/assets/js/feed-back.js ***!
  \*************************************/
/***/ (() => {

$('.slick').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: false
    }
  }, {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }, {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }]
});

/***/ }),

/***/ "./docs/assets/js/form-show.js":
/*!*************************************!*\
  !*** ./docs/assets/js/form-show.js ***!
  \*************************************/
/***/ (() => {

$(document).ready(function () {
  $(".nav-login").click(function () {
    $(".hapo-login").css('display', 'block');
    $(".hapo-reg").css('display', 'none');
  });
  $(".header-reg").click(function () {
    $(".hapo-login").css('display', 'none');
    $(".hapo-reg").css('display', 'block');
  });
  $(".header-login").click(function () {
    $(".hapo-login").css('display', 'block');
    $(".hapo-reg").css('display', 'none');
  });
});

/***/ }),

/***/ "./docs/assets/js/list-course.js":
/*!***************************************!*\
  !*** ./docs/assets/js/list-course.js ***!
  \***************************************/
/***/ (() => {

$(document).ready(function () {
  $(".list-course-filter").click(function () {
    $(".hapo-listcourse-selective").toggle();
  });
});

/***/ }),

/***/ "./docs/assets/js/message.js":
/*!***********************************!*\
  !*** ./docs/assets/js/message.js ***!
  \***********************************/
/***/ (() => {

$(document).ready(function () {
  $(".logo-message").click(function () {
    $(".content-message").toggle();
  });
  $(".message-close").click(function () {
    $(".content-message").css('display', 'none');
  });
});

/***/ }),

/***/ "./docs/assets/js/toggle.js":
/*!**********************************!*\
  !*** ./docs/assets/js/toggle.js ***!
  \**********************************/
/***/ (() => {

$(document).ready(function () {
  $(".nav-bar").click(function () {
    $(".menu-content").toggleClass('show');
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*******************************!*\
  !*** ./docs/assets/js/app.js ***!
  \*******************************/
__webpack_require__(/*! ./toggle */ "./docs/assets/js/toggle.js");

__webpack_require__(/*! ./feed-back */ "./docs/assets/js/feed-back.js");

__webpack_require__(/*! ./form-show */ "./docs/assets/js/form-show.js");

__webpack_require__(/*! ./message */ "./docs/assets/js/message.js");

__webpack_require__(/*! ./list-course */ "./docs/assets/js/list-course.js");
})();

/******/ })()
;