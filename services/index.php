<?php
    //header( "Location: underconstruction.html" );
    $contentFile = "_content.services.inc.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Aerix Global Solutions - Services</title>
	<link rel="stylesheet" type="text/css" href="../styles.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript">
	    $(function()    {

		$("ul.menu li.category a").click(function() {
		    $(this).next().slideToggle();
		    return false;
		}).next().hide();

	    });
	</script>
    </head>
    <body>
	<? include( "__template.inc.php" ); ?>
    </body>
</html>