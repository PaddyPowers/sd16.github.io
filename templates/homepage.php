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
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon.png" />

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
					<div class="web"><a href="" class="no-underline">Website</a></div>
					<a href="" class="twitter"><img src="images/icon-twitter-bw.svg" alt=""></a>
					<a href="" class="linkedin"><img src="images/icon-linkedin-bw.svg" alt=""></a>
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
