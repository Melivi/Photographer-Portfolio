$(function () {
    $('.hoverimg img').hover( function () {
        $(this).attr('src', $(this).attr('src').replace(/\.png/, '-hover.png') );
        }, function() {
		$(this).attr('src', $(this).attr('src').replace(/\-hover.png/, '.png') );
    });
});