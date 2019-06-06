var dropdown = false;

$(document).ready(function(){

  window.setInterval(function(){
    xpBar();
  }, 1000);

  function xpBar()
  {
      var xpTotal = $('#xp').text();
      xpTotal = xpTotal.replace( /^\D+/g, '');
      var xpArr = xpTotal.split('|');

      var max = xpArr[1];
      var xpNow = xpArr[0];

      var maxPrct = max / 100;
      var currentPrct = xpNow / maxPrct;
      var xpNeededPrct = 100 - currentPrct;

      if ( currentPrct <= 2.5) {
        xpNeededPrct = xpNeededPrct - currentPrct - 5;
      } else {
        currentPrct = currentPrct -2.5;
        xpNeededPrct = xpNeededPrct -2.5;
      }


      $('.xpDone').css('width', currentPrct+'%');
      $('.xpNeeded').css('width', xpNeededPrct+'%');
  }

});

function dropDown()
{
  if(dropdown) {
    $('.dropdown').css('visibility','hidden');
    $('.dropdown').css('opacity','0');
    $('#profile').css('border-radius', '30px');
    $('.dropdown').css('z-index', '-1');

    $('.arrow').animate({  textIndent: 0 }, {
      step: function(now,fx) {
        $(this).css('-webkit-transform','rotate('+now+'deg) scale(.4)');
      },
      duration: 400
    },'linear');

    $( ".dropdown" ).animate({
        borderRadius: '30px'
      }, 400, function() {
    });

    dropdown = false;
  } else {
    $('.dropdown').css('visibility','visible');
    $('.dropdown').css('opacity','1');
    $('#profile').css('border-radius', '30px 30px 0px 0px');
    $('.dropdown').css('z-index', '0');

    $('.arrow').animate({  textIndent: 180 }, {
      step: function(now,fx) {
        $(this).css('-webkit-transform','rotate('+now+'deg) scale(.4)');
      },
      duration: 400
    },'linear');

    $( ".dropdown" ).animate({
        borderTopLeftRadius: '0px',
        borderTopRightRadius: '0px',
        borderBottomLeftRadius: '30px',
        borderBottomRightRadius: '30px'
      }, 200, function() {
    });

    dropdown = true;
  }
}
