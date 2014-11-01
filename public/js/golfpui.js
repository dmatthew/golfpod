/* **************************************************
File: golfpui.js
Author: Matt Davis
*************************************************** */

function hiddenHandler(isMoving) {
	if (isMoving && $(".slider-animate").position().left <= -$(".slider-animate").width()) {
		isMoving = false;
		$.get("model/game_slider.php", function (myData) {
			$(".slider-animate").html(myData);
		}).fail(function () {
			alert("ERROR - file could not be loaded");
		}).done(function () {
			isMoving = true;
		});
		
	}
	window.requestAnimationFrame(function () {
		hiddenHandler(isMoving);
	});
}

$(document).ready(function () {
	var isMoving = true;
	hiddenHandler(isMoving);
	
	//Load the games into the home page
	$.get("model/game_slider.php", function (myData) {
		$(".slider-animate").html(myData);
	}).fail(function () {
		alert("ERROR - file could not be loaded");
	});
});