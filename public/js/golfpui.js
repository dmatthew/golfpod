/* **************************************************
File: golfpui.js
Author: Matt Davis
*************************************************** */

$(document).ready(function () {
	$(".navbar-toggle").on("click", function () {
        var glyphicon = $(this).children("span.glyphicon").first();
        if (glyphicon.hasClass("glyphicon-align-justify")) {
            glyphicon.removeClass("glyphicon-align-justify");
            glyphicon.addClass("glyphicon-remove");
        }
        else {
            glyphicon.removeClass("glyphicon-remove");
            glyphicon.addClass("glyphicon-align-justify");
        }
    });
});