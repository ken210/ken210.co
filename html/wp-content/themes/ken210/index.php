<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php
	$theme_url = get_bloginfo('stylesheet_directory');
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="<?= $theme_url; ?>/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div class="content">
			<header id="header">
				<h1>ken210<br /><span>&amp;co</span></h1>
				<h3><span>Front-end</span> badass</h3>
			</header>
			
			<header id="tinyHeader">
			</header>

			<section id="profile">
				<h2>Profile</h2>
				<img src="<?= $theme_url; ?>/img/zePequeno.jpg" alt="Little Dice my ass!" class="polaroid" />
				<ul>
					<li>
						Graduated in Advertising at Mackezie University
					</li>
					<li>
						<a href="#experience">10 years making websites</a>
					</li>
					<li>
						<a href="#skills">Lots of Tech Skills</a>
					</li>
					<li>
						Team Play
						<ul>
							<li>Good practices</li>
							<li>File organization freak</li>
							<li>Versatile hardworker dude</li>
						</ul>
					</li>
				</ul>
			</section>

			<div role="main">
			</div>
			<footer>
			
			</footer>
		</div>
	</div>

<script>
	window.jQuery || document.write('<script src="<?= $theme_url; ?>/js/libs/jquery-1.7.2.min.js"><\/script>');
</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="<?= $theme_url; ?>/js/plugins.js"></script>
<script src="<?= $theme_url; ?>/js/script.js"></script>
<!-- end scripts-->

<script>
	var _gaq=[['_setAccount','UA-31940592-1'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>