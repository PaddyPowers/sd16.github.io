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
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon.png" />

</head>

<body>

	<?php include 'include/header.php' ?>

		<!--  About paragraph -->
		<!-- <div class="about-short">
			<p>Social Digital is the grouping of
				<strong>Product Design</strong>
				<strong>Digital Interaction Design</strong> courses at <a href="http://www.dundee.ac.uk/djcad/">DJCAD</a> in the <a href="https://www.dundee.ac.uk">University of Dundee</a>.</p>
			<p>This space will keep you informed about what's happening in the year that is about to graduate.</p>
			<div class="select-course clearfix">
				<a class="no-underline pd" href="">Product Design</a>
				<a class="no-underline dixd" href="">Digital Interaction Design</a>
			</div>
		</div> -->

	</div>

	<!--  Content -->
	<div class="students-outer">
	<div class="students" id="students">

	 <!-- Div from which packery.js calculates its gutter -->
		<div class="gutter-sizer"></div>


		<?php 
		$xmlFile = './rss/databasesorted.xml';
		$xml = simplexml_load_file($xmlFile);
		foreach($xml->blog as $aTask)
			{ ?>

		<div class="packery-item article">
			<a href="#" class="heading">
				<h2><?php echo $aTask->title ?></h2>
				<p>
					<?php echo $aTask->author ?>
				</p>
			</a>
			<div class="description clearfix">
				<?php echo $aTask->description ?>
				<div class="web"><a href="<?php echo $aTask->link ?>" class="no-underline">Read</a></div>
			</div>
		</div>
			    
		<?php } ?>

	</div>
	</div>
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/packery.min.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>
