$(document).ready(function () {
  $(".nav-login").click(function () {
    $(".hapo-login").css('display', 'block')
    $(".hapo-reg").css('display', 'none')

  });

  $(".header-reg").click(function () {
    $(".hapo-login").css('display', 'none')
    $(".hapo-reg").css('display', 'block')
  });

  $(".header-login").click(function () {
    $(".hapo-login").css('display', 'block')
    $(".hapo-reg").css('display', 'none')
  });

});
