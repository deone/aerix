$(function()    {

    $("ul.menu .nav").click(function() {
	$(this).next().slideToggle();
	return false;
    }).next().hide();

});
