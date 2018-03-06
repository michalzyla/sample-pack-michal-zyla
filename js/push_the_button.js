$(document).ready(function() {
	var timer;
	var p = $("#content");

	$('.push').click(function() {
		clearTimeout(timer);
		p.html(p.html().replace(/ipsum/g, '<span style="color: #ff2246">$&</span>'));

    	timer = setTimeout(function() {
			p.html(p.html().replace(/ipsum/g, '<span style="color: #000">$&</span>'));
		}, 3000);
  	});
});