(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_message_js"],{

/***/ "./resources/js/message.js":
/*!*********************************!*\
  !*** ./resources/js/message.js ***!
  \*********************************/
/***/ (() => {

$(document).ready(function () {
  $(".logo-message").click(function () {
    $(".content-message").toggle();
  });
  $(".message-close").click(function () {
    $(".content-message").css('display', 'none');
  });
});

/***/ })

}]);