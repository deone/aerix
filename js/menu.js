$(function()    {

    $("ul.menu .service_type").click(function() {
	$(this).next().slideToggle();
	return false;
    }).next().hide();

});
