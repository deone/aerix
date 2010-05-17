<div id="wrapper">
    <div id="container">
	<div id="header">
	    <div id="navlogo">
		<ul id="nav">
		    <li><a href="index.php"><img src="images/link_home.jpg"/></a></li>
		    <li><img src="images/link_sep.jpg"/></li>
		    <li><a href="aboutus.php"><img src="images/link_about.jpg"/></a></li>
		    <li><img src="images/link_sep.jpg"/></li>
		    <li><a href="services/index.php"><img src="images/link_services.jpg"/></a></li>
		    <li><img src="images/link_sep.jpg"/></li>
		    <li><a href="contact.php"><img src="images/link_contact.jpg"/></a></li>
		</ul>
		<div id="logo">
		    <a href="index.php"><img src="images/logo.jpg"/></a>
		</div>
		<div class="clear-float"></div>
	    </div>
	    <div id="mast">
		<img src="images/mainPic.jpg" />
	    </div>
	</div>
	<div class="content">
	    <div class="gradient"></div>
	    <? @include( "includes/" . $contentFile ); ?>
	</div>
	<div id="footer"><img src="images/copyright_image.jpg"/></div>
    </div>
</div>
