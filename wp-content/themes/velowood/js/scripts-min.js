function resizeDiv(){vpw=$(window).width(),vph=$(window).height(),headerH=$("#masthead").height(),$(".full-width").css({height:vph-headerH+"px"}),$(".full-width h1").css({"margin-top":vph/1.75*.2+"px"}),portW=$(".portfolio-thumb").width(),$(".portfolio-thumb").css({height:portW+"px"})}$(document).ready(function(){resizeDiv()}),window.onresize=function(i){resizeDiv()};