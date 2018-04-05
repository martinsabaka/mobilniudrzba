function getTo(order) {
	var path = $('.mainText').children('h3').eq(order).offset().top;
	$('html').animate({scrollTop:path},1000);
}

function getToSub(order) {
	var path = $('.mainText').children('h4').eq(order).offset().top;
	console.log(path);
	$('html').animate({scrollTop:path},1000);
}
