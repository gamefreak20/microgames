var imgHeight
var imgWidth

$(document).ready(function(){

  window.setInterval(function(){
    imgHeight = $('.img').height();
    $('.underBox').css('height', imgHeight+'px');

    imgWidth = $('.img').width();
    $('.underBox').css('width', imgWidth+'px');
  }, 10);

});
