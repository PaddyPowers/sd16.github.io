<!doctype html>
<html>

<head>
	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<meta name="author" content="" />
	<meta name="description" content="" />

	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />

	<!-- Who owns the content of this site? -->
	<meta name="Copyright" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:500,700,400,300' rel='stylesheet' type='text/css'>

	<!-- Styles -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="images/favicons/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="images/favicons/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


</head>

<body>
<!--
	$$\      $$\                         $$\                          $$$$$\                         $$\
	$$$\    $$$ |                        $$ |                         \__$$ |                        $$ |
	$$$$\  $$$$ |$$\   $$\ $$$$$$\$$$$\  $$$$$$$\   $$$$$$\              $$ |$$\   $$\ $$$$$$\$$$$\  $$$$$$$\   $$$$$$\
	$$\$$\$$ $$ |$$ |  $$ |$$  _$$  _$$\ $$  __$$\ $$  __$$\             $$ |$$ |  $$ |$$  _$$  _$$\ $$  __$$\ $$  __$$\
	$$ \$$$  $$ |$$ |  $$ |$$ / $$ / $$ |$$ |  $$ |$$ /  $$ |      $$\   $$ |$$ |  $$ |$$ / $$ / $$ |$$ |  $$ |$$ /  $$ |
	$$ |\$  /$$ |$$ |  $$ |$$ | $$ | $$ |$$ |  $$ |$$ |  $$ |      $$ |  $$ |$$ |  $$ |$$ | $$ | $$ |$$ |  $$ |$$ |  $$ |
	$$ | \_/ $$ |\$$$$$$  |$$ | $$ | $$ |$$$$$$$  |\$$$$$$  |      \$$$$$$  |\$$$$$$  |$$ | $$ | $$ |$$$$$$$  |\$$$$$$  |
	\__|     \__| \______/ \__| \__| \__|\_______/  \______/        \______/  \______/ \__| \__| \__|\_______/  \______/
-->

	<!-- Header -->
	<div class="header">
		<a class="logo" href="http://sd16.co.uk">
			<img src="images/logo.svg" alt="">
		</a>
		<a class="logo-narrow" href="">
			<img src="images/logo-narrow.svg" alt="">
		</a>
		<div class="social-icons clearfix">
			<a href="https://twitter.com/SclDgtl">
				<img src="images/icon-twitter.svg" alt="">
			</a>
			<a href="https://instagram.com/socialdigital2016/">
				<img src="images/icon-instagram.svg" alt="">
			</a>
			<a href="https://www.facebook.com/scldgtl">
				<img src="images/icon-facebook.svg" alt="">
			</a>
			<a href="https://www.youtube.com/channel/UCkLyEiQ1UxmJRzb0WrYxMoA/videos">
				<img src="images/icon-youtube.svg" alt="">
			</a>
		</div>

		<p>Social Digital is the grouping of
			<strong>Product Design</strong> &
			<strong>Digital Interaction Design</strong> courses at <a href="http://www.dundee.ac.uk/djcad/">DJCAD</a> in the <a href="https://www.dundee.ac.uk">University of Dundee</a>.</p>
		<p>This space will keep you informed about what's happening in the year that is about to graduate.</p>
		<!-- <div class="select-course clearfix">
			<a class="no-underline pd" href="">Product Design</a>
			<a class="no-underline dixd" href="">Digital Interaction Design</a>
		</div> -->
		<a href="#" class="edit">Edit</a>
	</div>
	<!--  Students -->
	<div class="students" id="students">

	 <!-- Div from which packery.js calculates its gutter -->
		<div class="gutter-sizer"></div>

		<?php $ctr=0; foreach ( $results['articles'] as $article ) { if($ctr>=999) break; else $ctr++;  ?>
			<div class="student">
				<a href="">
					<?php if ( $imagePath = $article->getImagePath( IMG_TYPE_THUMB ) ) { ?>
						<img src="<?php echo $imagePath?>" alt="Article Thumbnail"/>
					<?php } ?>
				</a>
				<div class="description clearfix">
					<h2><?php echo htmlspecialchars( $article->fullName )?></h2>
					<p><?php echo htmlspecialchars( $article->content )?></p>
					<div class="web"><a href="https://www.<?php echo htmlspecialchars( $article->website )?>" class="no-underline">Website</a></div>
					<a href="https://www.twitter.com/<?php echo htmlspecialchars( $article->twitter )?>" class="twitter"><img src="images/icon-twitter-bw.svg" alt=""></a>
					<a href="https://www.linkedin.com/<?php echo htmlspecialchars( $article->linkedin )?>" class="linkedin"><img src="images/icon-linkedin-bw.svg" alt=""></a>
				</div>
			</div>
		<?php } ?>

	</div>

	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
		window.jQuery || document.write("<script src='/js/jquery-1.11.1.min.js'>\x3C/script>")
	</script>
	<script src="js/packery.min.js"></script>
	<script src="js/imagesloaded.min.js"></script>

	<script src="js/scripts.js"></script>

</body>

</html>
