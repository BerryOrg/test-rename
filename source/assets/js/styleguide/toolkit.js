$(function(){
  $(".toggle-baseline").click(function () {
    $("html").toggleClass("toolkit-baseline");
  });
  $(".toggle-grid").click(function () {
    $(".container").toggleClass("toolkit-grid");
  });
  $(".url-responsive").click(function () {
    window.location = "/styleguide/responsive-test";
  });
});
