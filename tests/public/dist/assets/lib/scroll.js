$(document).ready(function() {
$(function(){
$(window).scroll(function() {
if($(this).scrollTop() > 500) {
 verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
 element = $('body');
 offset = element.offset();
 offsetTop = offset.top;
    $('.scroll-top-wrapper').addClass('show');
}else{
    $('.scroll-top-wrapper').removeClass('show');
}
});
});
$('#scroll').click(function () {
$('body, html').animate({scrollTop:offsetTop}, 1000, 'linear');
return false;
});
});
