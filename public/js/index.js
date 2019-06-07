var bannerHeight
var bannerWidth

$(document).ready(function(){

  window.setInterval(function(){
    bannerHeight = $('.banner').height();
    $('.underImage').css('height', bannerHeight+'px');

    bannerWidth = $('.banner').width();
    $('.underImage').css('width', bannerWidth+'px');
  }, 10);

});
