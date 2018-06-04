$(document).ready(function(){
$('<link rel="stylesheet" href="style-1.css"/*tpa=http://smartgoods.com.ua/yved/yved/style.css*/>').appendTo('head');
var i = 0;
function yved(){
i=1;
$('.yved:nth-child('+i+')').fadeIn(1000).fadeOut(12000);//В этой строчке в мс 500 - время анимации появления, 5000 - время задержки, 500 - время затухания уведомления соответсвенно
}
setTimeout(function(){
setInterval(
function(){
i=i+1;
if(i>10) i=1;//10 - количество уведомлений
$('.yved:nth-child('+i+')').fadeIn(1000).fadeOut(12000);//В этой строчке в мс 500 - время анимации появления, 5000 - время задержки, 500 - время затухания уведомления соответсвенно
},25000);//25000 - задержка в мс меду показами уведомлений
yved();
},2000);//10000 - задержка в мс перед показом первого уведомления
});