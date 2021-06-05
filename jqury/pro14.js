$(document).ready(function(){
$('#clickme').click(function(){
$('.box').fadeOut(4000);
$('.box2').fadeIn(4000);
$('#clickme').fadeOut(4000);

});
$('#clickme1').click(function(){
$('.box').fadeIn(4000);
$('.box2').fadeOut(4000);
$('#clickme1').fadeOut(4000);

});


});