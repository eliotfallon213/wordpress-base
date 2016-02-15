
jQuery( document ).ready(function( $ ) {


  var iframe = $('#weddingVideo')[0];
  var player = $(iframe);

  $('#videoModal').on('show.bs.modal', function (e) {
    // $('#weddingMov').get(0).play();
    player.addEvent('ready', function() {
        player.api('play');
        console.log(player);
        ga('send', 'event', 'Videos', 'play');
    });
  });

  $('#videoModal').on('hide.bs.modal', function (e) {
    // $('#weddingMov').get(0).pause();
    player.api('pause');
  });

});
