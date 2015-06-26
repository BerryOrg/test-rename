$(function() {
  $( "#topic-2" ).tabs();
  $( "#topic-3" ).tabs();
  $( "#topic-5" ).tabs();
  $( "#topic-6" ).tabs();
  $( "#topic-7" ).tabs();
  $( "#topic-8" ).tabs();

  // Hover states on the static widgets
  $( "#dialog-link, #icons li" ).hover(
    function() {
      $( this ).addClass( "ui-state-hover" );
    },
    function() {
      $( this ).removeClass( "ui-state-hover" );
    }
  );
});
