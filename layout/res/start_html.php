<!DOCTYPE HTML>
<html lang="ko">
	<head>
		<title><?=$set_home[name]?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<?=$set_home[meta_tag]?>
		<meta name="publisher" content="(주)신비웹,신비웹,sinbiweb,sinbiweb.com,www.sinbiweb.com,webmaster@sinbiweb.com" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="../css/slick.css" />
		<link rel="stylesheet" type="text/css" href="../css/slick-theme.css" />
		<link rel="stylesheet" type="text/css" href="../css/swiper.css">

		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../images/favicon.ico" type="image/x-icon">

		<script type="text/javascript" src="../js/gsap.min.js"></script>
		<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="../js/ui.js"></script>
		<script type="text/javascript" src="../js/slick.min.js"></script>
		<script type="text/javascript" src="../js/swiper.js"></script>

		<link rel="stylesheet" type="text/css" href="../css/board_reaction.css">
		<script type="text/javascript" src="../../core/res/common.js"></script>
		<script type="text/javascript" src="../../core/js/board.js"></script>
		<script type="text/javascript" src="../../core/js/zipcode.js"></script>
		<script type="text/javascript" src="../../cheditor/cheditor.js"></script>

		<!--[if IE 7]>
			<link rel="stylesheet" type="text/css" href="../css/ie7.css" media="all" />
		<![endif]-->
		<!--[if lte IE 8]>
			<script src="./js/lib/respond.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="./js/lib/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
		<![endif]-->
	</head>


	<!-- 달력 -->
    <div id=popCal  style='position:absolute; left:-400px; top:0px; width:0; height=0; z-index:1; VISIBILITY:hidden;'>
    <iframe name='pop_frame_cal' src='' frameborder='0' scrolling='no' width='300' height='320'></iframe>
    </div>

	<!-- submit 사용시 -->
	<div style='position:absolute'>
	<iframe src='' name='ifr_ok'  width=0 height=0 frameborder=0 scrolling=no></iframe>
	</div>
