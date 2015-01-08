// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
  resizeDiv();
});
window.onresize = function(event) {
  resizeDiv();
};
function resizeDiv() {
  vpw = $(window).width(); // Viewport Width
  vph = $(window).height(); // Viewport Height

  headerH = $('#masthead').height();

// Your Styles
// Home page background image height
$('.full-width').css({'height': vph + 47 + 'px'});
$('.full-width h1').css({'margin-top': (vph / 1.75) * 0.2 + 'px'});

// Circle variable width
    cirW = $('.ch-grid li').width();

    $('.ch-grid li').css({'height': cirW + 'px'}); //  Setting height equal to width
    // End of circle variable width

// bike_maker variable width
    cirW = $('.bike_maker').width();

    $('.bike_maker').css({'height': cirW + 'px'}); // Setting height equal to width
    // End of bike_maker variable width

// Portfolio Thumbnails
portW = $('.portfolio-thumb').width(); //Portfolio thumbnail width
$('.portfolio-thumb').css({height: portW + 'px'}); // Setting the height of the thumbnail equal to the width (square)
}