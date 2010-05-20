$(function()    {

    $("ul.menu .first").click(function() {
	$(this).next().slideToggle();
	return false;
    }).next().hide();

});
