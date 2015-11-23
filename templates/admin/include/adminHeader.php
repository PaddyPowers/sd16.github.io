<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Admin - Social Digital 2016</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script>
        //This snippet is for the navigation
        $(function() {
            $(".menu").click(function() {
                if ($(window).width() > 980) {
                    if ($('.menuHolder').css('display') == 'block') {
                        closeDesktop();
                    } else {
                        openDesktop();
                    }
                }
                if ($(window).width() < 979 && $(window).width() > 768) {
                    if ($('.menuHolder').css('display') == 'block') {
                        closeTablet();
                    } else {
                        openTablet();
                    }
                }
                if ($(window).width() < 767) {
                    if ($('.menuHolder').css('display') == 'none') {
                        openMobile();
                    } else {
                        closeMobile();
                    }
                }
            });
        });

        function closeDesktop() {
            console.log('close');
            $('.menuHolder').fadeOut(100);
            $('.nav').css('width', '5%');
            $('.playground').css('width', '95%');
        }

        function openDesktop() {
            console.log('open');
            $('.menuHolder').fadeIn(100);
            $('.nav').css('width', '15%');
            $('.playground').css('width', '85%');
        }

        function closeTablet() {
            console.log('close');
            $('.menuHolder').fadeOut(100);
            $('.nav').css('width', '5%');
            $('.playground').css('left', '10%');
        }

        function openTablet() {
            console.log('open');
            $('.menuHolder').fadeIn(100);
            $('.nav').css('width', '15%');
            $('.playground').css('left', '30%');
        }

        function closeMobile() {
            console.log('close');
            $('.menuHolder').fadeOut(100);
            $('.nav').css('width', '5%');
            $('.playground').css({
                'left': '5%',
                '-webkit-filter': 'blur(0px)',
                '-moz-filter': 'blur(0px)',
                '-o-filter': 'blur(0px)',
                '-ms-filter': 'blur(0px)',
                'filter': 'blur(0px)'
            });
        }

        function openMobile() {
            console.log('open');
            $('.menuHolder').fadeIn(100);
            $('.nav').css('width', '15%');
            $('.playground').css({
                'left': '80%',
                '-webkit-filter': 'blur(2px)',
                '-moz-filter': 'blur(2px)',
                '-o-filter': 'blur(2px)',
                '-ms-filter': 'blur(2px)',
                'filter': 'blur(2px)'
            });
        }
    </script>


    <!-- For Mobile and Tablet Response -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:500,700,400,300' rel='stylesheet' type='text/css'>
	
	<!-- Styles -->
	<link rel="stylesheet" href="css/admin.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon.png" />


</head>

<body>