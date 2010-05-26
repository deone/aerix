$(function()	{

    $('a[href^=#]').click(function()	{
	var $target = $(this.hash);
	$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
	if ($target.length) {
	    var targetOffset = $target.offset().top;
	    $('html,body').animate({scrollTop: targetOffset}, 1000);
	    return false;
	}
    });

});
