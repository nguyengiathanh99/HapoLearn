(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_feed-back_js"],{

/***/ "./resources/js/feed-back.js":
/*!***********************************!*\
  !*** ./resources/js/feed-back.js ***!
  \***********************************/
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

/***/ })

}]);