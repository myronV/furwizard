<?php
session_start();
$period_cookie = 25920000; // 30 дней (2592000 секунд)

if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html class="nojs html" lang="ru-RU">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="generator" content="2017.0.3.363">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>FUR WIZARD</title>

	<link rel="stylesheet" type="text/css" href="/css/site_global.css">
	<link rel="stylesheet" type="text/css" href="/css/index.css" id="pagesheet">
	<link rel="stylesheet" type="text/css" href="/css/style_002.css">
	<link rel="stylesheet" type="text/css" href="/css/popup.css">
	<link rel="stylesheet" type="text/css" href="/css/TimeCircles.css">

	<script src="/js/jquery.js"></script>
	<script src="/js/jquery_002.js"></script>
	<script src="/js/timer.js"></script>
	<script src="/js/script.js"></script>

	<script language="javascript">
		document.ondragstart = xenforo;
		document.onselectstart = xenforo;
		document.oncontextmenu = xenforo;

		function xenforo() {
			return false
		}
	</script>


	<script src="/js/timer_003.js"></script>
	<script src="/js/timer_003.js"></script>
	<link href="/css/timer.css" rel="stylesheet" type="text/css">
	<style type="text/css"
	       id="timer-572b398854165f2fe88ea60a89ef76b9-style">#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-face {
			background-color: #000000, #ababab;
			font-size: 27px;
			color: #ffffff;
			font-family: 'Exo 2';
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-separator {
			padding-top: 13px !important;
			padding-bottom: 13px !important;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-bounding {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-front {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-back {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-front {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-back {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-bottom:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-front:after, #timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-top:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-card {
			border-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-front {
			background: #000000; /* Old browsers */
			background: -moz-linear-gradient(top, #000000 0%, #ababab 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #000000), color-stop(100%, #ababab)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #000000 0%, #ababab 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #000000 0%, #ababab 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #000000 0%, #ababab 100%); /* IE10+ */
			background: linear-gradient(to bottom, #000000 0%, #ababab 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ababab', GradientType=0);
		}

		#timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b9 .timer-flipchart-back {
			background: #ababab; /* Old browsers */
			background: -moz-linear-gradient(top, #ababab 0%, #000000 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ababab), color-stop(100%, #000000)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #ababab 0%, #000000 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #ababab 0%, #000000 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #ababab 0%, #000000 100%); /* IE10+ */
			background: linear-gradient(to bottom, #ababab 0%, #000000 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ababab', endColorstr='#000000', GradientType=0);
		}</style>
	<link href="/font/cssfamilyExo2subsetlatincyrillic.html" rel="stylesheet" type="text/css">
	<link href="/font/cssfamilyRobotosubsetlatincyrillic.html" rel="stylesheet" type="text/css">
	<script src="/js/timer_003.js"></script>
	<style type="text/css"
	       id="timer-572b398854165f2fe88ea60a89ef76b90-style">#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-face {
			background-color: #000000, #ababab;
			font-size: 27px;
			color: #ffffff;
			font-family: 'Exo 2';
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-separator {
			padding-top: 13px !important;
			padding-bottom: 13px !important;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-bounding {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-front {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-back {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-front {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-back {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-bottom:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-front:after, #timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-top:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-card {
			border-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-front {
			background: #000000; /* Old browsers */
			background: -moz-linear-gradient(top, #000000 0%, #ababab 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #000000), color-stop(100%, #ababab)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #000000 0%, #ababab 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #000000 0%, #ababab 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #000000 0%, #ababab 100%); /* IE10+ */
			background: linear-gradient(to bottom, #000000 0%, #ababab 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ababab', GradientType=0);
		}

		#timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b90 .timer-flipchart-back {
			background: #ababab; /* Old browsers */
			background: -moz-linear-gradient(top, #ababab 0%, #000000 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ababab), color-stop(100%, #000000)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #ababab 0%, #000000 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #ababab 0%, #000000 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #ababab 0%, #000000 100%); /* IE10+ */
			background: linear-gradient(to bottom, #ababab 0%, #000000 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ababab', endColorstr='#000000', GradientType=0);
		}</style>
	<script src="/js/timer_003.js"></script>
	<style type="text/css"
	       id="timer-572b398854165f2fe88ea60a89ef76b900-style">#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-face {
			background-color: #000000, #ababab;
			font-size: 27px;
			color: #ffffff;
			font-family: 'Exo 2';
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-separator {
			padding-top: 13px !important;
			padding-bottom: 13px !important;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-bounding {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-front {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-back {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-front {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-back {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-bottom:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-front:after, #timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-top:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-card {
			border-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-front {
			background: #000000; /* Old browsers */
			background: -moz-linear-gradient(top, #000000 0%, #ababab 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #000000), color-stop(100%, #ababab)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #000000 0%, #ababab 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #000000 0%, #ababab 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #000000 0%, #ababab 100%); /* IE10+ */
			background: linear-gradient(to bottom, #000000 0%, #ababab 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ababab', GradientType=0);
		}

		#timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b900 .timer-flipchart-back {
			background: #ababab; /* Old browsers */
			background: -moz-linear-gradient(top, #ababab 0%, #000000 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ababab), color-stop(100%, #000000)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #ababab 0%, #000000 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #ababab 0%, #000000 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #ababab 0%, #000000 100%); /* IE10+ */
			background: linear-gradient(to bottom, #ababab 0%, #000000 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ababab', endColorstr='#000000', GradientType=0);
		}</style>
	<script src="/js/timer_003.js"></script>
	<style type="text/css"
	       id="timer-572b398854165f2fe88ea60a89ef76b9000-style">#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-face {
			background-color: #000000, #ababab;
			font-size: 27px;
			color: #ffffff;
			font-family: 'Exo 2';
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-separator {
			padding-top: 13px !important;
			padding-bottom: 13px !important;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-bounding {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-front {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-back {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-front {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-back {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-bottom:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-front:after, #timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-top:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-card {
			border-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-front {
			background: #000000; /* Old browsers */
			background: -moz-linear-gradient(top, #000000 0%, #ababab 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #000000), color-stop(100%, #ababab)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #000000 0%, #ababab 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #000000 0%, #ababab 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #000000 0%, #ababab 100%); /* IE10+ */
			background: linear-gradient(to bottom, #000000 0%, #ababab 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ababab', GradientType=0);
		}

		#timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b9000 .timer-flipchart-back {
			background: #ababab; /* Old browsers */
			background: -moz-linear-gradient(top, #ababab 0%, #000000 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ababab), color-stop(100%, #000000)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #ababab 0%, #000000 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #ababab 0%, #000000 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #ababab 0%, #000000 100%); /* IE10+ */
			background: linear-gradient(to bottom, #ababab 0%, #000000 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ababab', endColorstr='#000000', GradientType=0);
		}</style>
	<script src="/js/timer_003.js"></script>
	<style type="text/css"
	       id="timer-572b398854165f2fe88ea60a89ef76b90000-style">#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-face {
			background-color: #000000, #ababab;
			font-size: 27px;
			color: #ffffff;
			font-family: 'Exo 2';
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-separator {
			padding-top: 13px !important;
			padding-bottom: 13px !important;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-bounding {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-front {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-back {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-front {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-back {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-bottom:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-front:after, #timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-top:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-card {
			border-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-front {
			background: #000000; /* Old browsers */
			background: -moz-linear-gradient(top, #000000 0%, #ababab 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #000000), color-stop(100%, #ababab)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #000000 0%, #ababab 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #000000 0%, #ababab 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #000000 0%, #ababab 100%); /* IE10+ */
			background: linear-gradient(to bottom, #000000 0%, #ababab 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ababab', GradientType=0);
		}

		#timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b90000 .timer-flipchart-back {
			background: #ababab; /* Old browsers */
			background: -moz-linear-gradient(top, #ababab 0%, #000000 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ababab), color-stop(100%, #000000)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #ababab 0%, #000000 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #ababab 0%, #000000 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #ababab 0%, #000000 100%); /* IE10+ */
			background: linear-gradient(to bottom, #ababab 0%, #000000 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ababab', endColorstr='#000000', GradientType=0);
		}</style>
	<style type="text/css"
	       id="timer-572b398854165f2fe88ea60a89ef76b900000-style">#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-face {
			background-color: #000000, #ababab;
			font-size: 27px;
			color: #ffffff;
			font-family: 'Exo 2';
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-separator {
			padding-top: 13px !important;
			padding-bottom: 13px !important;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-bounding {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-front {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 13px;
			padding-bottom: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-back {
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 13px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-front {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-back {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-bottom:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-front:after, #timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-top:after {
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-card {
			border-radius: 0px;
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-top, #timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-front {
			background: #000000; /* Old browsers */
			background: -moz-linear-gradient(top, #000000 0%, #ababab 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #000000), color-stop(100%, #ababab)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #000000 0%, #ababab 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #000000 0%, #ababab 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #000000 0%, #ababab 100%); /* IE10+ */
			background: linear-gradient(to bottom, #000000 0%, #ababab 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ababab', GradientType=0);
		}

		#timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-bottom, #timer572b398854165f2fe88ea60a89ef76b900000 .timer-flipchart-back {
			background: #ababab; /* Old browsers */
			background: -moz-linear-gradient(top, #ababab 0%, #000000 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ababab), color-stop(100%, #000000)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #ababab 0%, #000000 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #ababab 0%, #000000 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, #ababab 0%, #000000 100%); /* IE10+ */
			background: linear-gradient(to bottom, #ababab 0%, #000000 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ababab', endColorstr='#000000', GradientType=0);
		}</style>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/prompt.css">
	<script src="/js/prompt.js"></script>
</head>
<body>

<div class="clearfix borderbox" id="page"><!-- column -->
	<div class="clearfix colelem" id="pu94"><!-- group -->
		<div class="browser_width grpelem" id="u94-bw">
			<div id="u94"><!-- column -->
				<div class="clearfix" id="u94_align_to_page">
					<div class="clearfix colelem" id="ppu1472-4"><!-- group -->
						<div class="clearfix grpelem" id="pu1472-4"><!-- column -->
							<div class="shadow rgba-background clearfix colelem" id="u1472-4"><!-- content -->
								<p id="u1472-2">FUR WIZARD ОЧИСТИТ ЛЮБЫЕ ПОВЕРХНОСТИ ОТ ПЫЛИ И ШЕРСТИ ВАШЕГО ПИТОМЦА<br>ЗАБУДЬТЕ
									О ЛИПКИХ ВАЛИКАХ РАЗ И НАВСЕГДА!</p>
							</div>
							<div class="shadow rgba-background clearfix colelem" id="u1473-4"><!-- content -->
								<p id="u1473-2">В 2 РАЗА БЫСТРЕЕ И НА 300% ЭФФЕКТИВНЕЕ ОБЫЧНЫХ ЩЕТОК!</p>
							</div>
							<div class="clearfix colelem" id="pu128"><!-- group -->
								<div class="clearfix grpelem" id="u128"><!-- group -->
									<div class="clearfix grpelem" id="u129"><!-- column -->
										<div class="clearfix colelem" id="pu130"><!-- group -->
											<div class="clip_frame grpelem" id="u130"><!-- image -->
												<img class="block" id="u130_img"
												     src="/img/1600%25201-crop-u130.png" alt=""
												     data-image-width="689" data-image-height="450">
											</div>
											<div class="clip_frame grpelem" id="u132"><!-- image -->
												<img class="block" id="u132_img"
												     src="/img/1111111111111-crop-u132.jpg" alt=""
												     data-image-width="665" data-image-height="416">
											</div>
										</div>
										<div class="clip_frame colelem" id="u134"><!-- image -->
											<img class="block" id="u134_img" src="/img/1600%25201-crop-u134.png"
											     alt="" data-image-width="300" data-image-height="33">
										</div>
									</div>
									<div class="clip_frame grpelem" id="u136"><!-- image -->
										<img class="block" id="u136_img" src="/img/new-corner-crop-u136.png"
										     alt="" width="104" height="102">
									</div>
								</div>
								<div class="clearfix grpelem" id="pu127-4"><!-- column -->
									<div class="clearfix colelem" id="u127-4"><!-- content -->
										<p id="u127-2">Инновационные микрощетинки</p>
									</div>
									<div class="clearfix colelem" id="u121"><!-- group -->
										<div class="clip_frame grpelem" id="u122"
										     data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=-1,M21=1,M22=0,SizingMethod='auto expand')"
										     data-mu-ie-matrix-dx="1" data-mu-ie-matrix-dy="0"><!-- image -->
											<img class="block" id="u122_img" src="/img/line-crop-u122.png" alt=""
											     data-image-width="71" data-image-height="70">
										</div>
										<div class="clip_frame grpelem" id="u124"><!-- image -->
											<img class="block" id="u124_img" src="/img/line-crop-u124.png" alt=""
											     data-image-width="16" data-image-height="18">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clip_frame grpelem" id="u117"><!-- image -->
							<img class="block" id="u117_img" src="/img/fur-wizard-1.png" alt="" width="386"
							     height="611">
						</div>
						<div class="clearfix grpelem" id="u140"><!-- group -->
							<div class="clearfix grpelem" id="pu141-4"><!-- column -->
								<div class="clearfix colelem" id="u141-4"><!-- content -->
									<p id="u141-2">Две рабочие поверхности</p>
								</div>
								<div class="clip_frame colelem" id="u144"
								     data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=-1,M21=1,M22=0,SizingMethod='auto expand')"
								     data-mu-ie-matrix-dx="-4" data-mu-ie-matrix-dy="5"><!-- image -->
									<img class="block" id="u144_img" src="/img/line-crop-u144.png" alt=""
									     data-image-width="49" data-image-height="58">
								</div>
							</div>
							<div class="clip_frame grpelem" id="u142"><!-- image -->
								<img class="block" id="u142_img" src="/img/line-crop-u142.png" alt=""
								     data-image-width="16" data-image-height="15">
							</div>
						</div>
						<div class="clearfix grpelem" id="u126-6"><!-- content -->
							<p id="u126-2">База для</p>
							<p id="u126-4">&nbsp;самоочистки</p>
						</div>
					</div>
					<div class="clearfix colelem" id="pu101"><!-- group -->
						<div class="clearfix grpelem" id="u101"><!-- group -->
							<div class="rounded-corners grpelem" id="u103"><!-- simple frame --></div>
							<div class="rounded-corners clearfix grpelem" id="u105"><!-- group -->
								<div class="clearfix grpelem" id="u102-4"><!-- content -->
									<p id="u102-2">Две инновационные рабочие поверхности с тысячами микрощетинок</p>
								</div>
							</div>
							<div class="clearfix grpelem" id="u104-4"><!-- content -->
								<p id="u104-2">x2</p>
							</div>
						</div>
						<div class="clearfix grpelem" id="u95"><!-- group -->
							<div class="rounded-corners grpelem" id="u96"><!-- simple frame --></div>
							<div class="rounded-corners clearfix grpelem" id="u99"><!-- group -->
								<div class="clearfix grpelem" id="u100-4"><!-- content -->
									<p id="u100-2">Эксклюзивная система самоочистки щетки Fur Wizard с обеих сторон</p>
								</div>
							</div>
							<div class="clip_frame grpelem" id="u97"><!-- image -->
								<img class="block" id="u97_img" src="/img/w512h5121390857093idea512.png" alt=""
								     data-image-width="54" data-image-height="54">
							</div>
						</div>
						<div class="clearfix grpelem" id="u106"><!-- group -->
							<div class="rounded-corners grpelem" id="u111"><!-- simple frame --></div>
							<div class="rounded-corners clearfix grpelem" id="u109"><!-- group -->
								<div class="clearfix grpelem" id="u110-4"><!-- content -->
									<p id="u110-2">Быстрое и эффективное очищение от шерсти вашего питомца или пыли</p>
								</div>
							</div>
							<img class="grpelem" id="u107" alt="" src="/img/profit-u107.png"
							     data-image-width="51"><!-- rasterized frame -->
						</div>
						<div class="clearfix grpelem" id="pu116-8"><!-- column -->
							<div class="clearfix colelem" id="u116-9"><!-- content -->
								<p id="u116-3"><span id="u116">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</span></p>
							</div>
							<div class="timer-line">
								<script src="/js/timer_002.js"></script>
								<div id="timer572b398854165f2fe88ea60a89ef76b9"
								     style="min-width: 266px; height: 67px; text-align: center;"><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9-days"
											style="display: none; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9-days"
													style="display: none;">0</span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9-days"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">дней</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b9-hours"
											style="display: none; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9-hours"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9-hours"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9-hours"
													style="display: none;">7</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b9-hours"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9-hours"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">7</span><span
															class="timer-flipchart-top timer-flipchart-face">7</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9-hours"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">часов</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b9-minutes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9-minutes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9-minutes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9-minutes"
													style="display: none;">28</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b9-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">2</span><span
															class="timer-flipchart-top timer-flipchart-face">2</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">9</span><span
															class="timer-flipchart-back timer-flipchart-face">8</span><span
															class="timer-flipchart-top timer-flipchart-face">8</span><span
															class="timer-flipchart-bottom timer-flipchart-face">9</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9-minutes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">минут</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b9-secundes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9-secundes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9-secundes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9-secundes"
													style="display: none;">9</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b9-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">1</span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face">1</span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">0</span><span
															class="timer-flipchart-back timer-flipchart-face">9</span><span
															class="timer-flipchart-top timer-flipchart-face">9</span><span
															class="timer-flipchart-bottom timer-flipchart-face">0</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9-secundes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">секунд</span></span>
								</div>
							</div>
							<div class="clearfix colelem" id="u116-8"><!-- content -->
								<p id="u116-3"><span id="u116">HURRICANE FUR WIZARD </span><span id="u116-2">-53%</span>
								</p>
								<p id="u116-6"><span id="u116-4"><s>970 грн</s> </span> <span
											id="u116-5"> 399 грн</span></p>
							</div>
							<div class="clearfix colelem" id="u112"><!-- group -->
								<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem" id="u113">
									<!-- group -->
									<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win1">
										<!-- content --><p id="u114-2">ЗАКАЗАТЬ СО СКИДКОЙ -53%</p></a>
								</div>
							</div>
							<div class="clearfix colelem" id="u115-4"><!-- content -->
								<p id="u115-2">Спешите! Скидка -53%<br> только на первые 100 комплектов!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clip_frame grpelem" id="u119"
		     data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')"
		     data-mu-ie-matrix-dx="25" data-mu-ie-matrix-dy="-25"><!-- image -->
			<img class="block" id="u119_img" src="/img/line-crop-u119.png" alt="" data-image-width="67"
			     data-image-height="17">
		</div>
		<div class="browser_width grpelem" id="u344-bw">
			<div id="u344"><!-- column -->
				<div class="clearfix" id="u344_align_to_page">
					<div class="clearfix colelem" id="u345-4"><!-- content -->
						<p>ВСТРЕЧАЙТЕ ИННОВАЦИОННУЮ НОВИНКУ 2018 ГОДА ЧУДО-ЩЕТКУ FUR WIZARD</p>
					</div>
					<div class="clearfix colelem" id="u346-4"><!-- content -->
						<p id="u346-2">ПОСМОТРИТЕ ВИДЕО И УЗНАЙТЕ, КАК ОНА РАБОТАЕТ!</p>
					</div>
					<div class="colelem" id="u369"><!-- custom html -->
						<iframe src="/iframe/249646638.html" width="840" height="470" frameborder="0"></iframe>
					</div>
					<div class="button">
						<div class="clearfix colelem" id="u112"><!-- group -->
							<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem" id="u113">
								<!-- group -->
								<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win1"><!-- content --><p
											id="u114-2">ЗАКАЗАТЬ СО СКИДКОЙ -53%</p></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="browser_width grpelem" id="u370-bw">
			<div class="container">
				<div class="title">
					<h2>Только сегодня! Акционное предложение!</h2>
					<p>При заказе щётки Fur Wizard перчатка Pet Brush Glove<br>для вычёсывания шерсти вашего питомца
						всего за 150 грн!</p>
				</div>
				<div class="main">
					<div class="left unit">
						<div class="img">
							<img src="/img/fur-wizard-01.png" alt="">
						</div>
						<div class="text">
							<p>1 КОМПЛЕКТ</p>
							<p><span class="old">970 грн</span><span class="new"> 399 грн</span></p>
							<p>Скидка: -53%</p>
						</div>
					</div>
					<div class="plus unit">
						<div class="img">
							<img src="/img/plus.png" alt="">
						</div>
						<div class="text">
						</div>
					</div>
					<div class="glove unit">
						<div class="img">
							<img src="/img/glove-01.png" alt="">
						</div>
						<div class="text">
							<p>Перчатка True Touch</p>
							<p><span class="old">300 грн</span><span class="new"> 150 грн</span></p>
							<p>Скидка: -50%</p>
						</div>
					</div>
					<div class="right unit">
						<div class="parameters img">
							<div class="param1">
								<img src="/img/param1.png" alt="">
								<div class="descr">
									<p>180 мягких пупырышек</p>
									<p>- из гипоаллергенного силикона для легкого расчесывания шерсти</p>
								</div>
							</div>
							<div class="param2">
								<img src="/img/param2.png" alt="">
								<div class="descr">
									<p>Текстильная вставка</p>
									<p>- и сеточка для отличной вентиляции и комфорта</p>
								</div>
							</div>
							<div class="param3">
								<img src="/img/param3.png" alt="">
								<div class="descr">
									<p>Регулируемый манжет перчатки</p>
									<p>- удобно носить и снимать</p>
								</div>
							</div>
						</div>
						<div class="price">
							<div class="timer-line">
								<script src="/js/timer_002.js"></script>
								<div id="timer572b398854165f2fe88ea60a89ef76b90"
								     style="min-width: 266px; height: 67px; text-align: center;"><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90-days"
											style="display: none; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90-days"
													style="display: none;">0</span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90-days"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">дней</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b90-hours"
											style="display: none; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90-hours"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90-hours"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90-hours"
													style="display: none;">7</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b90-hours"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90-hours"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">7</span><span
															class="timer-flipchart-top timer-flipchart-face">7</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90-hours"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">часов</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b90-minutes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90-minutes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90-minutes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90-minutes"
													style="display: none;">28</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b90-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">2</span><span
															class="timer-flipchart-top timer-flipchart-face">2</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">9</span><span
															class="timer-flipchart-back timer-flipchart-face">8</span><span
															class="timer-flipchart-top timer-flipchart-face">8</span><span
															class="timer-flipchart-bottom timer-flipchart-face">9</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90-minutes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">минут</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b90-secundes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90-secundes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90-secundes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90-secundes"
													style="display: none;">9</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b90-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">1</span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face">1</span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">0</span><span
															class="timer-flipchart-back timer-flipchart-face">9</span><span
															class="timer-flipchart-top timer-flipchart-face">9</span><span
															class="timer-flipchart-bottom timer-flipchart-face">0</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90-secundes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">секунд</span></span>
								</div>
							</div>
							<p>Общая стоимость:</p>
							<p><span class="old">1270 грн</span><span class="new"> 549 грн</span></p>
						</div>
						<div class="text">
							<div class="button">
								<div class="clearfix colelem" id="u112"><!-- group -->
									<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem"
									     id="u113"><!-- group -->
										<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win2">
											<!-- content --><p id="u114-2">ЗАКАЗАТЬ КОМПЛЕКТ</p></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="line"></div>
				<div class="main three">
					<div class="left unit">
						<div class="img">
							<img src="/img/fur-wizard-01.png" alt="">
						</div>
						<div class="text">
							<p>1-Й КОМПЛЕКТ</p>
							<p><span class="old">970 грн</span><span class="new"> 399 грн</span></p>
							<p>Скидка: -53%</p>
						</div>
					</div>
					<div class="plus unit">
						<div class="img">
							<img src="/img/plus.png" alt="">
						</div>
						<div class="text">
						</div>
					</div>
					<div class="glove unit">
						<div class="img">
							<img src="/img/fur-wizard-01.png" alt="">
						</div>
						<div class="text">
							<p>2-Й КОМПЛЕКТ</p>
							<p><span class="old">970 грн</span><span class="new"> 299 грн</span></p>
							<p>Скидка: -69%</p>
						</div>
					</div>
					<div class="right unit">
						<div class="parameters img three">
							<div class="param1">
								<img src="/img/plus.png" alt="">
								<div class="descr">
									<p><span class="only">Только сегодня</span><br> на второй комплект Hurricane Fur
										Wizard скидка <span>- 100 грн</span>!</p>
								</div>
							</div>
						</div>
						<div class="price">
							<div class="timer-line">
								<script src="/js/timer_002.js"></script>
								<div id="timer572b398854165f2fe88ea60a89ef76b900"
								     style="min-width: 266px; height: 67px; text-align: center;"><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b900-days"
											style="display: none; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b900-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b900-days"
													style="display: none;">0</span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900-days"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b900-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">дней</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b900-hours"
											style="display: none; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b900-hours"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b900-hours"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b900-hours"
													style="display: none;">7</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b900-hours"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900-hours"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">7</span><span
															class="timer-flipchart-top timer-flipchart-face">7</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b900-hours"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">часов</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b900-minutes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b900-minutes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b900-minutes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b900-minutes"
													style="display: none;">28</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b900-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">2</span><span
															class="timer-flipchart-top timer-flipchart-face">2</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">9</span><span
															class="timer-flipchart-back timer-flipchart-face">8</span><span
															class="timer-flipchart-top timer-flipchart-face">8</span><span
															class="timer-flipchart-bottom timer-flipchart-face">9</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b900-minutes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">минут</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b900-secundes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b900-secundes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b900-secundes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b900-secundes"
													style="display: none;">9</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b900-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">1</span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face">1</span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">0</span><span
															class="timer-flipchart-back timer-flipchart-face">9</span><span
															class="timer-flipchart-top timer-flipchart-face">9</span><span
															class="timer-flipchart-bottom timer-flipchart-face">0</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b900-secundes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">секунд</span></span>
								</div>
							</div>
							<p>Общая стоимость:</p>
							<p><span class="old">1940 грн</span><span class="new"> 698 грн</span></p>
						</div>
						<div class="text">
							<div class="button">
								<div class="clearfix colelem" id="u112"><!-- group -->
									<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem"
									     id="u113"><!-- group -->
										<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win3">
											<!-- content --><p id="u114-2">ЗАКАЗАТЬ 2 КОМПЛЕКТА</p></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="grpelem" id="u347" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7071,M12=-0.7071,M21=0.7071,M22=0.7071,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-13" data-mu-ie-matrix-dy="-14"></div> -->
		<div class="browser_width grpelem" id="u372-bw">
			<div id="u372"><!-- column -->
				<div class="clearfix" id="u372_align_to_page">
					<div class="clearfix colelem" id="u383-4"><!-- content -->
						<p>ВАШ ДОМАШНИЙ ПИТОМЕЦ ЛИНЯЕТ И ЕГО ШЕРСТЬ ПОВСЮДУ?</p>
					</div>
					<div class="clearfix colelem" id="pu380"><!-- group -->
						<div class="clip_frame grpelem" id="u380"><!-- image -->
							<img class="block" id="u380_img"
							     src="/img/bigstock-happy-family-sitting-on-couch-62091521-crop-u380.jpg" alt=""
							     data-image-width="370" data-image-height="442">
						</div>
						<div class="clearfix grpelem" id="pu373-4"><!-- column -->
							<div class="clearfix colelem" id="u373-4"><!-- content -->
								<p id="u373-2">Ваш домашний любимец линяет оставляет свою шерсть повсюду?</p>
							</div>
							<div class="clearfix colelem" id="u375-4"><!-- content -->
								<p id="u375-2">Диван, кровать, любимый плед, задние сидения автомобиля, одежда - все
									покрыто шерстью?</p>
							</div>
							<div class="clearfix colelem" id="u374-4"><!-- content -->
								<p id="u374-2">Перестали пользоваться любимым пледом, потому что из него уже просто
									невозможно удалить шерсть?</p>
							</div>
							<div class="clearfix colelem" id="u379-4"><!-- content -->
								<p id="u379-2">Устали от постоянной уборки и не выпускаете пылесос из рук, но очистить
									диван и ковер полностью никак не получается?</p>
							</div>
							<div class="clearfix colelem" id="u378-4"><!-- content -->
								<p id="u378-2">Задние сидения автомобиля постоянно покрыты шерстью?</p>
							</div>
							<div class="clearfix colelem" id="u377-4"><!-- content -->
								<p id="u377-2">Бесконечно скупаете ролики с липкой лентой и в самый неудобный момент они
									обязательно заканчиваются?</p>
							</div>
							<div class="clearfix colelem" id="u376-4"><!-- content -->
								<p id="u376-2">Едете на работу и опять обнаруживаете на своем пальто шерстинки, хотя и
									чистили его перед выходом?</p>
							</div>
						</div>
						<div class="clearfix grpelem" id="pu382-4"><!-- column -->
							<div class="clearfix colelem" id="u382-4"><!-- content -->
								<p>?</p>
							</div>
							<div class="clearfix colelem" id="u384-4"><!-- content -->
								<p>?</p>
							</div>
							<div class="clearfix colelem" id="u385-4"><!-- content -->
								<p>?</p>
							</div>
							<div class="clearfix colelem" id="u386-4"><!-- content -->
								<p>?</p>
							</div>
							<div class="clearfix colelem" id="u387-4"><!-- content -->
								<p>?</p>
							</div>
							<div class="clearfix colelem" id="u388-4"><!-- content -->
								<p>?</p>
							</div>
							<div class="clearfix colelem" id="u389-4"><!-- content -->
								<p>?</p>
							</div>
						</div>
					</div>
					<div class="clearfix colelem" id="u390-8"><!-- content -->
						<p id="u390-6"><span id="u390">ЕСЛИ ВЫ ОТВЕТИЛИ </span><span id="u390-2">"</span><span
									id="u390-3">ДА!</span><span id="u390-4">"</span><span id="u390-5"> ХОТЬ НА ОДИН ВОПРОС - ТО МЫ ТОЧНО ЗНАЕМ КАК ВАМ ПОМОЧЬ!</span>
						</p>
						<p id="u390-6"><span id="u390">ЗАКАЗЫВАЙТЕ <span id="u390-3">HURRICANE FUR WIZARD</span><span
										id="u390-4">"</span><span
										id="u390-5"> И ВЫ ЗАБУДЕТЕ О ВСЕХ УКАЗАННЫХ ПРОБЛЕМАХ!</span></span></p>
					</div>
					<a class="anchor_item colelem" id="video"></a>
				</div>
			</div>
		</div>
		<div class="browser_width grpelem" id="u392-bw">
			<div id="u392"><!-- group -->
				<div class="clearfix" id="u392_align_to_page">
					<div class="clearfix grpelem" id="u393"><!-- group -->
						<div class="clearfix grpelem" id="ppu437"><!-- column -->
							<div class="clearfix colelem" id="pu437"><!-- group -->
								<a class="nonblock nontext anim_swing clip_frame grpelem" id="u394" href="#main">
									<!-- image --><img class="block" id="u394_img" src="/img/Fur-Wizard_logo.png"
									                   alt=""></a>
							</div>
						</div>
						<nav class="MenuBar clearfix grpelem" id="menuu398"><!-- horizontal box -->
							<div class="MenuItemContainer clearfix grpelem" id="u399"><!-- vertical box -->
								<a class="nonblock nontext MenuItem MenuItemWithSubMenu anim_swing clearfix colelem"
								   id="u402" href="#video"><!-- horizontal box -->
									<div class="MenuItemLabel NoWrap rounded-corners clearfix grpelem" id="u405-4">
										<!-- content --><p id="u405-2">СМОТРЕТЬ ВИДЕО</p></div>
								</a>
							</div>
							<div class="MenuItemContainer clearfix grpelem" id="u413"><!-- vertical box -->
								<a class="nonblock nontext MenuItem MenuItemWithSubMenu anim_swing clearfix colelem"
								   id="u414" href="#secret"><!-- horizontal box -->
									<div class="MenuItemLabel NoWrap rounded-corners clearfix grpelem" id="u417-4">
										<!-- content --><p id="u417-2">СЕКРЕТ Fur Wizard</p></div>
								</a>
							</div>
							<div class="MenuItemContainer clearfix grpelem" id="u427"><!-- vertical box -->
								<a class="nonblock nontext MenuItem MenuItemWithSubMenu anim_swing clearfix colelem"
								   id="u428" href="#preimushestva"><!-- horizontal box -->
									<div class="MenuItemLabel NoWrap rounded-corners clearfix grpelem" id="u429-4">
										<!-- content --><p id="u429-2">ПРЕИМУЩЕСТВА</p></div>
								</a>
							</div>
							<div class="MenuItemContainer clearfix grpelem" id="u406"><!-- vertical box -->
								<a class="nonblock nontext MenuItem MenuItemWithSubMenu anim_swing clearfix colelem"
								   id="u409" href="#reviews"><!-- horizontal box -->
									<div class="MenuItemLabel NoWrap rounded-corners clearfix grpelem" id="u410-4">
										<!-- content --><p id="u410-2">ОТЗЫВЫ</p></div>
								</a>
							</div>
							<div class="MenuItemContainer clearfix grpelem" id="u420"><!-- vertical box -->
								<a class="nonblock nontext MenuItem MenuItemWithSubMenu anim_swing clearfix colelem"
								   id="u421" href="#dostavka-oplata"><!-- horizontal box -->
									<div class="MenuItemLabel NoWrap rounded-corners clearfix grpelem" id="u424-4">
										<!-- content --><p id="u424-2">ДОСТАВКА И ОПЛАТА</p></div>
								</a>
							</div>
						</nav>
					</div>
					<a class="anchor_item grpelem" id="main"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="browser_width colelem" id="u348-bw">
		<div id="u348"><!-- column -->
			<div class="clearfix" id="u348_align_to_page">
				<a class="anchor_item colelem" id="secret"></a>
				<div class="clearfix colelem" id="u353-4"><!-- content -->
					<p>ПРОСТО КАК РАЗ, ДВА, ТРИ!</p>
				</div>
				<div class="clearfix colelem" id="pu357"><!-- group -->
					<div class="clearfix grpelem" id="u357"><!-- group -->
						<div class="shadow rounded-corners clip_frame grpelem" id="u360"><!-- image -->
							<img class="block" id="u360_img" src="/img/813ipptrhol_sl1500_-crop-u360.jpg" alt=""
							     data-image-width="242" data-image-height="242">
						</div>
						<div class="clip_frame clearfix grpelem" id="u358"><!-- image -->
							<img class="position_content" id="u358_img"
							     src="/img/0_1260cb_39916cd8_xl-crop-u358.png" alt="" data-image-width="91"
							     data-image-height="153">
						</div>
					</div>
					<div class="clearfix grpelem" id="pu1398"><!-- group -->
						<div class="shadow rounded-corners clip_frame grpelem" id="u1398"><!-- image -->
							<img class="block" id="u1398_img" src="/img/5.jpg" alt="" data-image-width="244"
							     data-image-height="244">
						</div>
						<div class="clip_frame grpelem" id="u364"><!-- image -->
							<img class="block" id="u364_img" src="/img/0_1260cb_39916cd8_xl-crop-u364.png" alt=""
							     data-image-width="118" data-image-height="153">
						</div>
					</div>
					<div class="shadow rounded-corners clip_frame grpelem" id="u1408"><!-- image -->
						<img class="block" id="u1408_img" src="/img/4-crop-u1408.jpg" alt=""
						     data-image-width="243" data-image-height="244">
					</div>
					<div class="clip_frame clearfix grpelem" id="u362"><!-- image -->
						<img class="position_content" id="u362_img" src="/img/0_1260cb_39916cd8_xl-crop-u362.png"
						     alt="" data-image-width="126" data-image-height="153">
					</div>
				</div>
				<div class="clearfix colelem" id="pu354-4"><!-- group -->
					<div class="clearfix grpelem" id="u354-4"><!-- content -->
						<p id="u354-2">2 РАБОЧИЕ СТОРОНЫ ДЛЯ БЫСТРОЙ УБОРКИ</p>
					</div>
					<div class="clearfix grpelem" id="u355-4"><!-- content -->
						<p id="u355-2">ОЧИСТИТЕ ЩЕТКУ В БАЗЕ СРАЗУ С ДВУХ СТОРОН</p>
					</div>
					<div class="clearfix grpelem" id="u356-4"><!-- content -->
						<p id="u356-2">ОТСОЕДИНИТЕ ОСНОВУ БАЗЫ И ВЫБРОСЬТЕ ШЕРСТЬ</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="browser_width colelem" id="u268-bw">
		<div id="u268"><!-- group -->
			<div class="clearfix" id="u268_align_to_page">
				<div class="clip_frame grpelem" id="u1386"><!-- image -->
					<img class="block" id="u1386_img" src="/img/ezgif.gif" alt="" data-image-width="600"
					     data-image-height="338">
				</div>
				<a class="anchor_item grpelem" id="preimushestva"></a>
				<div class="clearfix grpelem" id="u343-14"><!-- content -->
					<p id="u343-2">В ЧЕМ СЕКРЕТ FUR WIZARD?</p>
					<p id="u343-4">Fur Wizard - это специальная щетка, разработанная для удаления шерсти и ворса с любый
						поверхностей.</p>
					<p id="u343-5">&nbsp;</p>
					<p id="u343-7">Секрет заключается в инновационной поверхности,
						состоящей из тысячи микро щетинок, которые действуют подобно пальцам,
						захватывая каждый комок шерсти на своем пути, подцепляя даже глубоко
						въевшиеся волоски.</p>
					<p id="u343-8">&nbsp;</p>
					<p id="u343-10">Эксклюзивная система самоочистки щетки делает
						уборку как никогда легкой. Просто поместите Fur Wizard в базу и сразу
						достаньте, щетка будет абсолютно чистой с двух сторон! В очищающую базу
						встроены щетинки поменьше, которые очищают сам Fur Wizard.</p>
					<p id="u343-12">После уборки отсоедините основу от базы и
						выбросьте содержимое в корзину. С Fur Wizard&nbsp; уборка проходит&nbsp;
						быстрее и эффективнее!</p>
				</div>
			</div>
			<div class="button">
				<div class="clearfix colelem" id="u112"><!-- group -->
					<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem" id="u113">
						<!-- group -->
						<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win1"><!-- content --><p
									id="u114-2">ЗАКАЗАТЬ СО СКИДКОЙ -53%</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="browser_width colelem" id="u269-bw">
		<div id="u269"><!-- column -->
			<div class="clearfix" id="u269_align_to_page">
				<div class="clearfix colelem" id="u287-6"><!-- content -->
					<p id="u287-2">БОЛЬШЕ НИКАКИХ РОЛИКОВ, КОТОРЫМ ТРЕБУЕТСЯ ЗАМЕНА
						СОБИРАЮЩЕЙ ПОВЕРХНОСТИ И ОБЫЧНЫХ ВОРСОВЫХ ЩЁТОК, КОТОРЫЕ УЖАСНО ТЯЖЕЛО
						ОТЧИСТИТЬ ОТ ШЕРСТИ И ПЫЛИ!</p>
				</div>
				<div class="clearfix colelem" id="pu270"><!-- group -->
					<div class="clearfix grpelem" id="u270"><!-- group -->
						<div class="shadow rounded-corners grpelem" id="u286"><!-- simple frame --></div>
						<div class="clearfix grpelem" id="u271"><!-- group -->
							<div class="rounded-corners clearfix grpelem" id="u282"><!-- column -->
								<div class="clearfix colelem" id="u285-4"><!-- content -->
									<p>РОЛИК С ЛИПКОЙ ЛЕНТОЙ</p>
								</div>
								<div class="clip_frame colelem" id="u278"><!-- image -->
									<img class="block" id="u278_img" src="/img/9643c-clip-21kb.jpg" alt=""
									     data-image-width="297" data-image-height="188">
								</div>
								<div class="clearfix colelem" id="u272-11"><!-- content -->
									<p id="u272-3"><span id="u272">-</span> Снимают шерсть только с поверхности,
										абсолютно не удалят въевшиеся волоски с дивана или ковра</p>
									<p id="u272-6"><span id="u272-4">- </span>При уборке большой
										площади (например дивана) требуется огромное количество листков.
										Приходится раз за разом менять собирающие листы</p>
									<p id="u272-9"><span id="u272-7">- </span>Не экономичные, средняя цена 50-150 грн (в
										зависимости от длины и качества) расход в месяц около 5-10 роликов</p>
								</div>
							</div>
							<div class="rounded-corners clearfix grpelem" id="u277"><!-- column -->
								<div class="clearfix colelem" id="u284-4"><!-- content -->
									<p>ЧИСТЯЩАЯ ЩЕТКА</p>
								</div>
								<div class="clip_frame colelem" id="u274"><!-- image -->
									<img class="block" id="u274_img" src="/img/38dcc-clip-15kb.jpg" alt=""
									     data-image-width="295" data-image-height="192">
								</div>
								<div class="clearfix colelem" id="u283-14"><!-- content -->
									<p id="u283-3"><span id="u283">- </span>Шерсть постоянно наматывается на ворс щетки
									</p>
									<p id="u283-6"><span id="u283-4">- </span>Сложно очистить от волос и шерсти (но не
										сняв намотанную шерсть, работать дальше щетка просто не будет)</p>
									<p id="u283-9"><span id="u283-7">- </span>Абсолютно не подходят для очистки одежды
									</p>
									<p id="u283-12"><span id="u283-10">-</span> Быстро пачкается (не очищается до конца,
										так как накапливает загрязнения между щетинками)</p>
								</div>
							</div>
							<div class="clearfix grpelem" id="pu273-4"><!-- column -->
								<div class="clearfix colelem" id="u273-4"><!-- content -->
									<p>HURRICANE FUR WIZARD</p>
								</div>
								<div class="clearfix colelem" id="u276-15"><!-- content -->
									<p id="u276-4"><span id="u276"></span><span id="u276-2"> </span>Не нуждается в
										замене деталей - используйте снова и снова! Ощутимая экономия на роликах с
										липкой лентой</p>
									<p id="u276-7"><span id="u276-5"> </span>Двусторонняя и большая щетка – отчистит все
										в два раза быстрее!</p>
									<p id="u276-10"><span id="u276-8"> </span>База для самоочищения – поместите в неё
										девайс и сразу же достаньте. Вуаля, чисто с обеих сторон!</p>
									<p id="u276-13"><span id="u276-11"> </span><span id="u276-12">Тысячи микрощетинок, которые вычищают даже въевшиеся волоски</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="clip_frame grpelem" id="u1418"><!-- image -->
						<img class="block" id="u1418_img" src="/img/4-crop-u1418.jpg" alt=""
						     data-image-width="295" data-image-height="193">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix colelem" id="pu288"><!-- group -->
		<div class="browser_width grpelem" id="u286-bw">
			<div class="container">
				<div class="title">
					<h2>Только сегодня! Акционное предложение!</h2>
					<p>При заказе щётки Fur Wizard перчатка Pet Brush Glove<br>для вычёсывания шерсти вашего питомца
						всего за 150 грн!</p>
				</div>
				<div class="main">
					<div class="left unit">
						<div class="img">
							<img src="/img/fur-wizard-01.png" alt="">
						</div>
						<div class="text">
							<p>Щётка Fur Wizard</p>
							<p><span class="old">970 грн</span><span class="new"> 399 грн</span></p>
							<p>Скидка: -53%</p>
						</div>
					</div>
					<div class="plus unit">
						<div class="img">
							<img src="/img/plus.png" alt="">
						</div>
						<div class="text">
						</div>
					</div>
					<div class="glove unit">
						<div class="img">
							<img src="/img/glove-01.png" alt="">
						</div>
						<div class="text">
							<p>Перчатка Pet Glove Brush</p>
							<p><span class="old">300 грн</span><span class="new"> 150 грн</span></p>
							<p>Скидка: -50%</p>
						</div>
					</div>
					<div class="right unit">
						<div class="parameters img">
							<div class="param1">
								<img src="/img/param1.png" alt="">
								<div class="descr">
									<p>180 мягких пупырышек</p>
									<p>- из гипоаллергенного силикона для легкого расчесывания шерсти</p>
								</div>
							</div>
							<div class="param2">
								<img src="/img/param2.png" alt="">
								<div class="descr">
									<p>Текстильная вставка</p>
									<p>- и сеточка для отличной вентиляции и комфорта</p>
								</div>
							</div>
							<div class="param3">
								<img src="/img/param3.png" alt="">
								<div class="descr">
									<p>Регулируемый манжет перчатки</p>
									<p>- удобно носить и снимать</p>
								</div>
							</div>
						</div>
						<div class="price">
							<div class="timer-line">
								<script src="/js/timer_002.js"></script>
								<div id="timer572b398854165f2fe88ea60a89ef76b9000"
								     style="min-width: 266px; height: 67px; text-align: center;"><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9000-days"
											style="display: none; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9000-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9000-days"
													style="display: none;">0</span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9000-days"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9000-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">дней</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b9000-hours"
											style="display: none; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9000-hours"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9000-hours"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9000-hours"
													style="display: none;">7</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b9000-hours"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9000-hours"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">7</span><span
															class="timer-flipchart-top timer-flipchart-face">7</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9000-hours"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">часов</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b9000-minutes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9000-minutes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9000-minutes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9000-minutes"
													style="display: none;">28</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b9000-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">2</span><span
															class="timer-flipchart-top timer-flipchart-face">2</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9000-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">9</span><span
															class="timer-flipchart-back timer-flipchart-face">8</span><span
															class="timer-flipchart-top timer-flipchart-face">8</span><span
															class="timer-flipchart-bottom timer-flipchart-face">9</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9000-minutes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">минут</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b9000-secundes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b9000-secundes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b9000-secundes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b9000-secundes"
													style="display: none;">9</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b9000-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">1</span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face">1</span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b9000-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">0</span><span
															class="timer-flipchart-back timer-flipchart-face">9</span><span
															class="timer-flipchart-top timer-flipchart-face">9</span><span
															class="timer-flipchart-bottom timer-flipchart-face">0</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b9000-secundes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">секунд</span></span>
								</div>
							</div>
							<p>Общая стоимость:</p>
							<p><span class="old">1270 грн</span><span class="new"> 549 грн</span></p>
						</div>
						<div class="text">
							<div class="button">
								<div class="clearfix colelem" id="u112"><!-- group -->
									<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem"
									     id="u113"><!-- group -->
										<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win1">
											<!-- content --><p id="u114-2">ЗАКАЗАТЬ КОМПЛЕКТ</p></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="browser_width grpelem" id="u288-bw">
			<div id="u288"><!-- column -->
				<div class="clearfix" id="u288_align_to_page">
					<div class="clearfix colelem" id="u289-4"><!-- content -->
						<p id="u289-2">ЧТО МОЖНО ОЧИСТИТЬ С ПОМОЩЬЮ FUR WIZARD?</p>
					</div>
					<div class="clearfix colelem" id="pu290"><!-- group -->
						<div class="clip_frame grpelem" id="u290"><!-- image -->
							<img class="block" id="u290_img"
							     src="/img/_25d0_25b4_25d0_25b8_25d0_25b2_25d0_25b0_25d0_25bd.jpg" alt=""
							     data-image-width="278" data-image-height="238">
						</div>
						<div class="clip_frame grpelem" id="u292"><!-- image -->
							<img class="block" id="u292_img"
							     src="/img/_25d0_25bf_25d0_25be_25d0_25ba_25d1_2580_25d1_258b_25d0_25b2.jpg"
							     alt="" data-image-width="278" data-image-height="239">
						</div>
						<div class="clip_frame grpelem" id="u294"><!-- image -->
							<img class="block" id="u294_img"
							     src="/img/_25d0_25ba_25d0_25be_25d0_25b2_25d1_2580_25d0_25be_25d0_25b2.jpg"
							     alt="" data-image-width="278" data-image-height="239">
						</div>
						<div class="clip_frame grpelem" id="u296"><!-- image -->
							<img class="block" id="u296_img"
							     src="/img/_25d0_25bc_25d0_25b5_25d1_2581_25d1_2582_25d0_25be%252520_25d0.jpg"
							     alt="" data-image-width="278" data-image-height="238">
						</div>
					</div>
					<div class="clearfix colelem" id="pu306-4"><!-- group -->
						<div class="clearfix grpelem" id="u306-4"><!-- content -->
							<p id="u306-2">ДИВАН</p>
						</div>
						<div class="clearfix grpelem" id="u307-4"><!-- content -->
							<p id="u307-2">ПОКРЫВАЛО</p>
						</div>
						<div class="clearfix grpelem" id="u308-4"><!-- content -->
							<p id="u308-2">КОВРОВОЕ ПОКРЫТИЕ</p>
						</div>
						<div class="clearfix grpelem" id="u309-4"><!-- content -->
							<p id="u309-2">МЕСТО ПИТОМЦА</p>
						</div>
					</div>
					<div class="clearfix colelem" id="pu298"><!-- group -->
						<div class="clip_frame grpelem" id="u298"><!-- image -->
							<img class="block" id="u298_img"
							     src="/img/_25d0_25bf_25d0_25be_25d0_25b4_25d1_2583_25d1_2588_25d0_25ba.jpg"
							     alt="" data-image-width="278" data-image-height="238">
						</div>
						<div class="clip_frame grpelem" id="u302"><!-- image -->
							<img class="block" id="u302_img"
							     src="/img/_25d0_25bf_25d0_25b0_25d0_25bb_25d1_258c_25d1_2582_25d0_25be.jpg"
							     alt="" data-image-width="278" data-image-height="238">
						</div>
						<div class="clip_frame grpelem" id="u304"><!-- image -->
							<img class="block" id="u304_img"
							     src="/img/_25d0_25b1_25d1_2580_25d1_258e_25d0_25ba_25d0_25b8-crop-u304.jpg"
							     alt="" data-image-width="277" data-image-height="238">
						</div>
						<div class="clip_frame grpelem" id="u300"><!-- image -->
							<img class="block" id="u300_img"
							     src="/img/_25d1_2581_25d0_25b0_25d0_25bb_25d0_25be_25d0_25bd%252520_25d0.jpg"
							     alt="" data-image-width="278" data-image-height="238">
						</div>
					</div>
					<div class="clearfix colelem" id="pu310-4"><!-- group -->
						<div class="clearfix grpelem" id="u310-4"><!-- content -->
							<p id="u310-2">ПОДУШКИ</p>
						</div>
						<div class="clearfix grpelem" id="u313-4"><!-- content -->
							<p id="u313-2">ПАЛЬТО</p>
						</div>
						<div class="clearfix grpelem" id="u311-4"><!-- content -->
							<p id="u311-2">БРЮКИ</p>
						</div>
						<div class="clearfix grpelem" id="u312-4"><!-- content -->
							<p id="u312-2">САЛОН АВТОМОБИЛЯ</p>
						</div>
					</div>
					<div class="button">
						<div class="clearfix colelem" id="u112"><!-- group -->
							<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem" id="u113">
								<!-- group -->
								<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win1"><!-- content --><p
											id="u114-2">ЗАКАЗАТЬ СО СКИДКОЙ -53%</p></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="anchor_item grpelem" id="best-present"></a>
	</div>
	<div class="clearfix colelem" id="pu314"><!-- group -->
		<div class="browser_width grpelem" id="u314-bw">
			<div class="shadow" id="u314"><!-- simple frame --></div>
		</div>
		<div class="browser_width grpelem" id="u315-bw">
			<div class="museBGSize" id="u315"><!-- column -->
				<div class="clearfix" id="u315_align_to_page">
					<div class="clearfix colelem" id="u316-4"><!-- content -->
						<p>ПОСМОТРИТЕ ЕЩЕ РАЗ, КАК ЭТО РАБОТАЕТ!</p>
					</div>
					<div class="clearfix colelem" id="pu1445"><!-- group -->
						<div class="shadow clip_frame grpelem" id="u1445"><!-- image -->
							<img class="block" id="u1445_img" src="/img/ezgifcom-video-to-gif%25203%25201.gif"
							     alt="" data-image-width="397" data-image-height="224">
						</div>
						<div class="shadow clip_frame grpelem" id="u1454"><!-- image -->
							<img class="block" id="u1454_img" src="/img/ezgifcom-video-to-gif%25204.gif" alt=""
							     data-image-width="397" data-image-height="224">
						</div>
						<div class="shadow clip_frame grpelem" id="u1463"><!-- image -->
							<img class="block" id="u1463_img" src="/img/ezgifcom-video-to-gif%25207.gif" alt=""
							     data-image-width="398" data-image-height="224">
						</div>
					</div>
					<div class="shadow rounded-corners clearfix colelem" id="u323"><!-- column -->
						<div class="clearfix colelem" id="u1511-5"><!-- content -->
							<p>СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ! <span id="u1511-2">ОФОРМИТЕ ЗАКАЗ <span class="oferdays">С 2 ИЮНЯ ПО 4 ИЮНЯ</span></span>
							</p>
						</div>
						<div class="clearfix colelem" id="u1512-6"><!-- content -->
							<p id="u1512-4"><span id="u1512">И ПОЛУЧИТЕ </span><span
										id="u1512-2">АБСОЛЮТНО БЕСПЛАТНО</span><span id="u1512-3"> ПОРТАТИВНУЮ САМООЧИЩАЮЩУЮСЯ&nbsp; МИНИ ЩЕТКУ FUR WIZARD!</span>
							</p>
						</div>
						<div class="clearfix colelem" id="pu1501"><!-- group -->
							<div class="clip_frame grpelem" id="u1501"><!-- image -->
								<img class="block" id="u1501_img"
								     src="/img/hurricane-fur-wizard-dlx-xl-lint-brush-and-mini-brush-d-2017.jpg"
								     alt="" data-image-width="269" data-image-height="321">
							</div>
							<div class="gradient clip_frame grpelem" id="u326"><!-- image -->
								<img class="block" id="u326_img" src="/img/1-crop-u326.jpg" alt=""
								     data-image-width="381" data-image-height="320">
							</div>
							<div class="clip_frame grpelem" id="u1425"><!-- image -->
								<img class="block" id="u1425_img" src="/img/7.jpg" alt="" data-image-width="203"
								     data-image-height="321">
							</div>
							<div class="clearfix grpelem" id="pu1479-6"><!-- column -->
								<div class="clearfix colelem" id="u1479-6"><!-- content -->
									<p id="u1479-3"><s>300 грн</s></p>
									<p id="u1479-4">В ПОДАРОК</p>
								</div>
								<div class="clearfix colelem" id="pu1435"><!-- group -->
									<div class="clip_frame grpelem" id="u1435"><!-- image -->
										<img class="block" id="u1435_img" src="/img/6.jpg" alt=""
										     data-image-width="67" data-image-height="230">
									</div>
									<div class="clearfix grpelem" id="u1480"><!-- group -->
										<div class="clip_frame grpelem" id="u1483"><!-- image -->
											<img class="block" id="u1483_img" src="/img/line-crop-u1483.png"
											     alt="" data-image-width="57" data-image-height="70">
										</div>
										<div class="clip_frame grpelem" id="u1481"
										     data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=-1,M21=1,M22=0,SizingMethod='auto expand')"
										     data-mu-ie-matrix-dx="27" data-mu-ie-matrix-dy="-27"><!-- image -->
											<img class="block" id="u1481_img" src="/img/line-crop-u1481.png"
											     alt="" data-image-width="70" data-image-height="16">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix colelem" id="u336-8"><!-- content -->
							<div class="clearfix colelem" id="u116-9"><!-- content -->
								<p id="u116-3"><span id="u116">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</span></p>
							</div>
							<div class="timer-line">
								<script src="/js/timer_002.js"></script>
								<div id="timer572b398854165f2fe88ea60a89ef76b90000"
								     style="min-width: 266px; height: 67px; text-align: center;"><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90000-days"
											style="display: none; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90000-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90000-days"
													style="display: none;">0</span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90000-days"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90000-days"
												style="display: none; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">дней</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b90000-hours"
											style="display: none; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90000-hours"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90000-hours"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90000-hours"
													style="display: none;">7</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b90000-hours"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90000-hours"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">7</span><span
															class="timer-flipchart-top timer-flipchart-face">7</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90000-hours"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">часов</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b90000-minutes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90000-minutes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90000-minutes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90000-minutes"
													style="display: none;">28</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b90000-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face"></span><span
															class="timer-flipchart-back timer-flipchart-face">2</span><span
															class="timer-flipchart-top timer-flipchart-face">2</span><span
															class="timer-flipchart-bottom timer-flipchart-face"></span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90000-minutes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">9</span><span
															class="timer-flipchart-back timer-flipchart-face">8</span><span
															class="timer-flipchart-top timer-flipchart-face">8</span><span
															class="timer-flipchart-bottom timer-flipchart-face">9</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90000-minutes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">минут</span></span><span
											class="timer-separator"
											id="timer-separator-572b398854165f2fe88ea60a89ef76b90000-secundes"
											style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
											class="timer-element"
											id="timer-element-572b398854165f2fe88ea60a89ef76b90000-secundes"
											style="display: inline-block; line-height: 1; margin: 0px;"><span
												id="timer-number-572b398854165f2fe88ea60a89ef76b90000-secundes"
												style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
													id="timer-number-value-572b398854165f2fe88ea60a89ef76b90000-secundes"
													style="display: none;">10</span><span
													id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b90000-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"
													style="margin-right: 1px;"><span class="timer-flipchart-card"
								                                                     style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">2</span><span
															class="timer-flipchart-back timer-flipchart-face">1</span><span
															class="timer-flipchart-top timer-flipchart-face">1</span><span
															class="timer-flipchart-bottom timer-flipchart-face">2</span><span
															class="timer-flipchart-bounding">8</span></span></span><span
													id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b90000-secundes"
													class="timer-flipchart-inner timer-flipchart-animate"><span
														class="timer-flipchart-card" style="display:none;"><span
															class="timer-flipchart-front timer-flipchart-face">1</span><span
															class="timer-flipchart-back timer-flipchart-face">0</span><span
															class="timer-flipchart-top timer-flipchart-face">0</span><span
															class="timer-flipchart-bottom timer-flipchart-face">1</span><span
															class="timer-flipchart-bounding">8</span></span></span></span><span
												id="timer-text-572b398854165f2fe88ea60a89ef76b90000-secundes"
												style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">секунд</span></span>
								</div>
							</div>
							<p id="u116-3"><span id="u116">HURRICANE FUR WIZARD </span><span id="u116-2">-53%</span></p>
							<p id="u116-6"><span id="u116-4"><s>970 грн</s> </span> <span id="u116-5"> 399 грн</span>
							</p>
						</div>
						<div class="clearfix colelem" id="u112"><!-- group -->
							<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem" id="u113">
								<!-- group -->
								<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win1"><!-- content --><p
											id="u114-2">ЗАКАЗАТЬ СО СКИДКОЙ -53%</p></a>
							</div>
						</div>
						<div class="clearfix colelem" id="u1478-4"><!-- content -->
							<p id="u1478-2">Спешите! Скидка -53% только на первые 100 комплектов!</p>
						</div>
					</div>
					<a class="anchor_item colelem" id="reviews"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix colelem" id="pu151"><!-- group -->
		<div class="grpelem" id="u151"><!-- simple frame --></div>
		<div class="browser_width grpelem" id="u152-bw">
			<div id="u152"><!-- column -->
				<div class="clearfix" id="u152_align_to_page">
					<div class="clearfix colelem" id="u153"><!-- column -->
						<div class="clearfix colelem" id="u159-4"><!-- content -->
							<p id="u159-2">ОТЗЫВЫ НАШИХ ПОКУПАТЕЛЕЙ</p>
						</div>
						<div class="clearfix colelem" id="pu164"><!-- group -->
							<div class="clearfix grpelem" id="u164"><!-- group -->
								<div class="rounded-corners clearfix grpelem" id="u172"><!-- group -->
									<div class="clip_frame grpelem" id="u168"><!-- image -->
										<img class="block" id="u168_img" src="/img/n9-5urlqfsg-crop-u168.jpg"
										     alt="" data-image-width="185" data-image-height="198">
									</div>
									<div class="clearfix grpelem" id="pu170-4"><!-- column -->
										<div class="clearfix colelem" id="u170-4"><!-- content -->
											<p id="u170-2">"Для салона авто вообще незаменим!"</p>
										</div>
										<div class="clip_frame colelem" id="u165"><!-- image -->
											<img class="block" id="u165_img" src="/img/5stars.png" alt=""
											     data-image-width="89" data-image-height="18">
										</div>
										<div class="clearfix colelem" id="u167-4"><!-- content -->
											<p id="u167-2">Удивительный продукт, придумаю же! Отлично
												работает, проще пользоваться чем щеткой и ленту не нужно отрывать! Для
												салона авто вообще незаменим. Настоятельно рекомендую всем! Магазину
												спасибо!</p>
										</div>
										<div class="clearfix colelem" id="u171-4"><!-- content -->
											<p id="u171-2">Владимир и Арчи, г. Николаев</p>
										</div>
									</div>
								</div>
							</div>
							<div class="rounded-corners clearfix grpelem" id="u156"><!-- group -->
								<div class="clip_frame grpelem" id="u162"><!-- image -->
									<img class="block" id="u162_img"
									     src="/img/fur-pics-19-850x1227-crop-u162.jpg" alt=""
									     data-image-width="185" data-image-height="198">
								</div>
								<div class="clearfix grpelem" id="pu184-4"><!-- column -->
									<div class="clearfix colelem" id="u184-4"><!-- content -->
										<p id="u184-2">"Чистит лучше, чем все что я пробовала!"</p>
									</div>
									<div class="clip_frame colelem" id="u160"><!-- image -->
										<img class="block" id="u160_img" src="/img/5stars.png" alt=""
										     data-image-width="89" data-image-height="18">
									</div>
									<div class="clearfix colelem" id="u196-4"><!-- content -->
										<p id="u196-2">Работает лучше, чем все, что я пробовала! У
											нас кот в доме, иногда обильно линяющий, шерсть повсюду. Почистила все
											диваны, времени на уборку теперь трачу ГОРАЗДО меньше. Обязательно куплю
											еще мини щетку, что бы и с собой брать. Спасибо!</p>
									</div>
									<div class="clearfix colelem" id="u199-4"><!-- content -->
										<p id="u199-2">Елена и Кинг, г. Киев</p>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix colelem" id="pu195"><!-- group -->
							<div class="rounded-corners clearfix grpelem" id="u195"><!-- group -->
								<div class="clip_frame grpelem" id="u193"><!-- image -->
									<img class="block" id="u193_img" src="/img/66-crop-u193.jpg" alt=""
									     data-image-width="185" data-image-height="198">
								</div>
								<div class="clearfix grpelem" id="pu157-4"><!-- column -->
									<div class="clearfix colelem" id="u157-4"><!-- content -->
										<p id="u157-2">"Гораздо эффективнее липких роликов!"</p>
									</div>
									<div class="clip_frame colelem" id="u182"><!-- image -->
										<img class="block" id="u182_img" src="/img/5stars.png" alt=""
										     data-image-width="89" data-image-height="18">
									</div>
									<div class="clearfix colelem" id="u158-4"><!-- content -->
										<p id="u158-2">Немного&nbsp; скептически отнеслась к
											рекламе, но щетка действительно отлично работает!!! У меня ретривер,
											шерсти в&nbsp; период линьки&nbsp; очень много. Чищу коврики, покрывала,
											диван. Удобнее и гораздо&nbsp; эффективнее липких роликов, а про
											экономию и не говорю! Довольна покупкой на 200%!</p>
									</div>
									<div class="clearfix colelem" id="u192-4"><!-- content -->
										<p id="u192-2">Даша и Нора, г. Полтава</p>
									</div>
								</div>
							</div>
							<div class="clearfix grpelem" id="u173"><!-- group -->
								<div class="rounded-corners clearfix grpelem" id="u174"><!-- column -->
									<div class="position_content" id="u174_position_content">
										<div class="clearfix colelem" id="u179-4"><!-- content -->
											<p id="u179-2">"Прекрасно очищает от шерсти и ворса!"</p>
										</div>
										<div class="clip_frame colelem" id="u177"><!-- image -->
											<img class="block" id="u177_img" src="/img/5stars.png" alt=""
											     data-image-width="89" data-image-height="18">
										</div>
										<div class="clearfix colelem" id="u176-4"><!-- content -->
											<p id="u176-2">Прекрасно очищает от шерсти и ворса!
												Быстро&nbsp; вычищает шерсть с дивана и ковров. Очень понравился тот
												факт, что щетка очищается сама. Прям великое изобретение:) Рекомендую к
												покупке всем, у кого есть домашние питомцы, убираться стало намного
												проще и быстрее!</p>
										</div>
										<div class="clearfix colelem" id="u175-4"><!-- content -->
											<p id="u175-2">Татьяна, Джесси и Марс, г. Хмельницкий</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clip_frame grpelem" id="u180"><!-- image -->
								<img class="block" id="u180_img" src="/img/deayw9j-crop-u180.jpg" alt=""
								     data-image-width="186" data-image-height="198">
							</div>
						</div>
						<div class="clearfix colelem" id="ppu200"><!-- group -->
							<div class="clearfix grpelem" id="pu200"><!-- group -->
								<div class="clearfix grpelem" id="u200"><!-- group -->
									<div class="rounded-corners clearfix grpelem" id="u204"><!-- column -->
										<div class="position_content" id="u204_position_content">
											<div class="clearfix colelem" id="u203-4"><!-- content -->
												<p id="u203-2">"Пользоваться легко, очищается сама!"</p>
											</div>
											<div class="clip_frame colelem" id="u201"><!-- image -->
												<img class="block" id="u201_img" src="/img/5stars.png" alt=""
												     data-image-width="89" data-image-height="18">
											</div>
											<div class="clearfix colelem" id="u206-4"><!-- content -->
												<p id="u206-2">Эта щетка просто НЕОБХОДИМА всем у кого
													есть любимцы! Пользоваться легко, очищается сама! Отлично очищает
													покрывала и пледы, шторы, мебель. Во время линьки это просто
													спасение)</p>
											</div>
											<div class="clearfix colelem" id="u205-4"><!-- content -->
												<p id="u205-2">Света и Мини, г. Одесса</p>
											</div>
										</div>
									</div>
								</div>
								<div class="clip_frame grpelem" id="u197"><!-- image -->
									<img class="block" id="u197_img" src="/img/shpic-na-divane-crop-u197.jpg"
									     alt="" data-image-width="186" data-image-height="199">
								</div>
							</div>
							<div class="clearfix grpelem" id="u185"><!-- group -->
								<div class="rounded-corners clearfix grpelem" id="u187"><!-- column -->
									<div class="position_content" id="u187_position_content">
										<div class="clearfix colelem" id="u191-4"><!-- content -->
											<p id="u191-2">"Реально крутая и полезная вещь!"</p>
										</div>
										<div class="clip_frame colelem" id="u188"><!-- image -->
											<img class="block" id="u188_img" src="/img/5stars.png" alt=""
											     data-image-width="89" data-image-height="18">
										</div>
										<div class="clearfix colelem" id="u186-4"><!-- content -->
											<p id="u186-2">Реально крутая и полезная вещь! Работает
												очень хорошо, причем на любых поверхностях! Диван почистить от шерсти
												намного проще, чем пылесосом или обычной щеткой.&nbsp;&nbsp; Заказал еще
												один комплект для автомобиля. В общем продукт отличный, доволен.
												Спасибо!</p>
										</div>
										<div class="clearfix colelem" id="u190-4"><!-- content -->
											<p id="u190-2">Александр и Ричард, г. Львов</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clip_frame grpelem" id="u154"><!-- image -->
								<img class="block" id="u154_img" src="/img/na-krovati-pes-crop-u154.jpg" alt=""
								     data-image-width="185" data-image-height="201">
							</div>
						</div>
					</div>
					<a class="anchor_item colelem" id="dostavka-oplata"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="browser_width colelem" id="u207-bw">
		<div class="shadow" id="u207"><!-- column -->
			<div class="clearfix" id="u207_align_to_page">
				<div class="clearfix colelem" id="pu219"><!-- group -->
					<div class="grpelem" id="u219"><!-- simple frame --></div>
					<div class="clearfix grpelem" id="u217-4"><!-- content -->
						<p>КАК ОФОРМИТЬ ЗАКАЗ</p>
					</div>
					<div class="grpelem" id="u218"><!-- simple frame --></div>
				</div>
				<div class="clearfix colelem" id="pu208"><!-- group -->
					<div class="clip_frame grpelem" id="u208"><!-- image -->
						<img class="block" id="u208_img" src="/img/kak2.png" alt="" width="104" height="110">
					</div>
					<div class="clip_frame grpelem" id="u212"><!-- image -->
						<img class="block" id="u212_img" src="/img/kak3.png" alt="" width="104" height="110">
					</div>
					<div class="clip_frame grpelem" id="u214"><!-- image -->
						<img class="block" id="u214_img" src="/img/kak4.png" alt="" width="104" height="110">
					</div>
					<div class="clip_frame grpelem" id="u210"><!-- image -->
						<img class="block" id="u210_img" src="/img/kak5.png" alt="" width="104" height="110">
					</div>
					<div class="clearfix grpelem" id="u261"><!-- group -->
						<div class="clip_frame grpelem" id="u262"><!-- image -->
							<img class="block" id="u262_img" src="/img/kak1.png" alt="" width="104" height="110">
						</div>
						<div class="grpelem" id="u264"><!-- simple frame --></div>
					</div>
					<img class="grpelem" id="u265" alt="" src="/img/1600%25202-u265.png" data-image-width="49">
					<!-- rasterized frame -->
				</div>
				<div class="clearfix colelem" id="pu220-4"><!-- group -->
					<div class="clearfix grpelem" id="u220-4"><!-- content -->
						<p>Нажмите на кнопку "ЗАКАЗАТЬ"</p>
					</div>
					<div class="clearfix grpelem" id="u221-7"><!-- content -->
						<p>Оставьте</p>
						<p>заявку на сайте</p>
						<p>&nbsp;</p>
					</div>
					<div class="clearfix grpelem" id="u224-4"><!-- content -->
						<p>Менеджер уточнит детали заказа и отправки</p>
					</div>
					<div class="clearfix grpelem" id="u223-4"><!-- content -->
						<p>Доставим по Украине в течение 1-2 дней</p>
					</div>
					<div class="clearfix grpelem" id="u222-4"><!-- content -->
						<p>Оплачиваете при получении</p>
					</div>
				</div>
				<div class="clearfix colelem" id="ppu226-4"><!-- group -->
					<div class="clearfix grpelem" id="pu226-4"><!-- group -->
						<div class="shadow rounded-corners clearfix grpelem" id="u226-4"><!-- content -->
							<p id="u226-2">ОПЛАТА</p>
						</div>
						<div class="clearfix grpelem" id="u231-4"><!-- content -->
							<p>Без предоплаты, оплата при получении заказа, курьеру или в отделении Новой почты</p>
						</div>
					</div>
					<div class="shadow rounded-corners clearfix grpelem" id="u225-4"><!-- content -->
						<p id="u225-2">ДОСТАВКА</p>
					</div>
					<div class="shadow rounded-corners clearfix grpelem" id="u227-4"><!-- content -->
						<p id="u227-2">ГАРАНТИИ</p>
					</div>
					<div class="clearfix grpelem" id="u229-4"><!-- content -->
						<p>Доставка осуществляется Новой почтой (в течение 1-2 дней)</p>
					</div>
					<div class="clearfix grpelem" id="u230-4"><!-- content -->
						<p>Обмен и возврат в течение 14 дней со дня получения заказа</p>
					</div>
				</div>
				<div class="clearfix colelem" id="u228-6"><!-- content -->
					<p id="u228-4"><span id="u228">ОСТАЛИСЬ ВОПРОСЫ? ЗВОНИТЕ ПО НОМЕРУ</span><span
								id="u228-2"> </span><span id="u228-3">+38 (067) 887-22-54</span></p>
				</div>
			</div>
			<div class="button">
				<div class="clearfix colelem" id="u112"><!-- group -->
					<div class="clearfix colelem" id="u116-9"><!-- content -->
						<p id="u116-3"><span id="u116">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</span></p>
					</div>
					<div class="timer-line">
						<script src="/js/timer_002.js"></script>
						<div id="timer572b398854165f2fe88ea60a89ef76b900000"
						     style="min-width: 266px; height: 67px; text-align: center;"><span class="timer-element"
						                                                                       id="timer-element-572b398854165f2fe88ea60a89ef76b900000-days"
						                                                                       style="display: none; line-height: 1; margin: 0px;"><span
										id="timer-number-572b398854165f2fe88ea60a89ef76b900000-days"
										style="display: none; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
											id="timer-number-value-572b398854165f2fe88ea60a89ef76b900000-days"
											style="display: none;">0</span><span
											id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900000-days"
											class="timer-flipchart-inner timer-flipchart-animate"><span
												class="timer-flipchart-card" style="display:none;"><span
													class="timer-flipchart-front timer-flipchart-face"></span><span
													class="timer-flipchart-back timer-flipchart-face">0</span><span
													class="timer-flipchart-top timer-flipchart-face">0</span><span
													class="timer-flipchart-bottom timer-flipchart-face"></span><span
													class="timer-flipchart-bounding">8</span></span></span></span><span
										id="timer-text-572b398854165f2fe88ea60a89ef76b900000-days"
										style="display: none; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">дней</span></span><span
									class="timer-separator"
									id="timer-separator-572b398854165f2fe88ea60a89ef76b900000-hours"
									style="display: none; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
									class="timer-element" id="timer-element-572b398854165f2fe88ea60a89ef76b900000-hours"
									style="display: inline-block; line-height: 1; margin: 0px;"><span
										id="timer-number-572b398854165f2fe88ea60a89ef76b900000-hours"
										style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
											id="timer-number-value-572b398854165f2fe88ea60a89ef76b900000-hours"
											style="display: none;">7</span><span
											id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b900000-hours"
											class="timer-flipchart-inner timer-flipchart-animate"
											style="margin-right: 1px;"><span class="timer-flipchart-card"
						                                                     style="display:none;"><span
													class="timer-flipchart-front timer-flipchart-face"></span><span
													class="timer-flipchart-back timer-flipchart-face">0</span><span
													class="timer-flipchart-top timer-flipchart-face">0</span><span
													class="timer-flipchart-bottom timer-flipchart-face"></span><span
													class="timer-flipchart-bounding">8</span></span></span><span
											id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900000-hours"
											class="timer-flipchart-inner timer-flipchart-animate"><span
												class="timer-flipchart-card" style="display:none;"><span
													class="timer-flipchart-front timer-flipchart-face"></span><span
													class="timer-flipchart-back timer-flipchart-face">7</span><span
													class="timer-flipchart-top timer-flipchart-face">7</span><span
													class="timer-flipchart-bottom timer-flipchart-face"></span><span
													class="timer-flipchart-bounding">8</span></span></span></span><span
										id="timer-text-572b398854165f2fe88ea60a89ef76b900000-hours"
										style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">часов</span></span><span
									class="timer-separator"
									id="timer-separator-572b398854165f2fe88ea60a89ef76b900000-minutes"
									style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
									class="timer-element"
									id="timer-element-572b398854165f2fe88ea60a89ef76b900000-minutes"
									style="display: inline-block; line-height: 1; margin: 0px;"><span
										id="timer-number-572b398854165f2fe88ea60a89ef76b900000-minutes"
										style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
											id="timer-number-value-572b398854165f2fe88ea60a89ef76b900000-minutes"
											style="display: none;">28</span><span
											id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b900000-minutes"
											class="timer-flipchart-inner timer-flipchart-animate"
											style="margin-right: 1px;"><span class="timer-flipchart-card"
						                                                     style="display:none;"><span
													class="timer-flipchart-front timer-flipchart-face"></span><span
													class="timer-flipchart-back timer-flipchart-face">2</span><span
													class="timer-flipchart-top timer-flipchart-face">2</span><span
													class="timer-flipchart-bottom timer-flipchart-face"></span><span
													class="timer-flipchart-bounding">8</span></span></span><span
											id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900000-minutes"
											class="timer-flipchart-inner timer-flipchart-animate"><span
												class="timer-flipchart-card" style="display:none;"><span
													class="timer-flipchart-front timer-flipchart-face">9</span><span
													class="timer-flipchart-back timer-flipchart-face">8</span><span
													class="timer-flipchart-top timer-flipchart-face">8</span><span
													class="timer-flipchart-bottom timer-flipchart-face">9</span><span
													class="timer-flipchart-bounding">8</span></span></span></span><span
										id="timer-text-572b398854165f2fe88ea60a89ef76b900000-minutes"
										style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">минут</span></span><span
									class="timer-separator"
									id="timer-separator-572b398854165f2fe88ea60a89ef76b900000-secundes"
									style="display: inline-block; vertical-align: top; line-height: 1; margin: 0px; padding: 0px 4px; font-size: 27px; color: rgb(255, 255, 255);"></span><span
									class="timer-element"
									id="timer-element-572b398854165f2fe88ea60a89ef76b900000-secundes"
									style="display: inline-block; line-height: 1; margin: 0px;"><span
										id="timer-number-572b398854165f2fe88ea60a89ef76b900000-secundes"
										style="display: inline-block; line-height: 1; margin: 0px; font-size: 27px; color: rgb(255, 255, 255);"><span
											id="timer-number-value-572b398854165f2fe88ea60a89ef76b900000-secundes"
											style="display: none;">10</span><span
											id="timer-number-flipchart1-572b398854165f2fe88ea60a89ef76b900000-secundes"
											class="timer-flipchart-inner timer-flipchart-animate"
											style="margin-right: 1px;"><span class="timer-flipchart-card"
						                                                     style="display:none;"><span
													class="timer-flipchart-front timer-flipchart-face">2</span><span
													class="timer-flipchart-back timer-flipchart-face">1</span><span
													class="timer-flipchart-top timer-flipchart-face">1</span><span
													class="timer-flipchart-bottom timer-flipchart-face">2</span><span
													class="timer-flipchart-bounding">8</span></span></span><span
											id="timer-number-flipchart0-572b398854165f2fe88ea60a89ef76b900000-secundes"
											class="timer-flipchart-inner timer-flipchart-animate"><span
												class="timer-flipchart-card" style="display:none;"><span
													class="timer-flipchart-front timer-flipchart-face">1</span><span
													class="timer-flipchart-back timer-flipchart-face">0</span><span
													class="timer-flipchart-top timer-flipchart-face">0</span><span
													class="timer-flipchart-bottom timer-flipchart-face">1</span><span
													class="timer-flipchart-bounding">8</span></span></span></span><span
										id="timer-text-572b398854165f2fe88ea60a89ef76b900000-secundes"
										style="display: block; line-height: 1; margin: 0px; font-size: 12px; color: rgb(255, 255, 255); font-family: Roboto;">секунд</span></span>
						</div>
					</div>
					<p id="u116-3"><span id="u116">HURRICANE FUR WIZARD </span><span id="u116-2">-53%</span></p>
					<p id="u116-6"><span id="u116-4"><s>970 грн</s> </span> <span id="u116-5"> 399 грн</span></p>
					<div class="pointer_cursor shadow rounded-corners gradient clearfix grpelem" id="u113">
						<!-- group -->
						<a class="nonblock nontext clearfix grpelem" id="u114-4" href="#win1"><!-- content --><p
									id="u114-2">ЗАКАЗАТЬ СО СКИДКОЙ -53%</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="browser_width colelem" id="u1522-bw">
		<div class="gradient" id="u1522"><!-- column -->
			<div class="clearfix" id="u1522_align_to_page">
				<div class="footer center">

					<p></p>
					<a href="/politics.html" target="blank"><p><span id="u1526">Политика конфиденциальности</span>
						</p></a>
				</div>
			</div>
		</div>
	</div>
</div>

<a href="#x" class="overlay" id="win1"></a>
<div class="popup">
	<p style="font-size: 24px; margin-bottom: 20px;">FUR WIZARD СО СКИДКОЙ -53%</p>
	<form action="zakaz.php" method="post">
		<p class="kolvo">Щётка Fur Wizard<br>Стоимость: 399 грн</p>
		<div id="param_1" class="add_product_param" style="visibility: hidden; height: 1px; width: 1px;">
			<div id="1pcs" class="pcs">
				<input name="idtov" id="order_param_1[11]" value="Щётка Fur Wizard" onchange="change_adds_1(1)"
				       checked="checked" type="radio">
			</div>
		</div>
		<input class="text" name="name" required="" placeholder="Введите Ф.И.О.*">
		<input class="text" name="phone" required="" placeholder="Введите Ваш телефон*">
		<input class="submit" value="ЗАКАЗАТЬ"
		       style="width: 60%;height: 50px;font-size: 24px;font-weight:bold; cursor:pointer;border-radius: 5px;background-color: #f8931f;"
		       type="submit">
	</form>
	<a class="close" title="Закрыть" href="#close"></a>
</div>

<a href="#x" class="overlay" id="win2"></a>
<div class="popup">
	<p style="font-size: 24px; margin-bottom: 20px;">FUR WIZARD СО СКИДКОЙ -53%</p>
	<form action="zakaz.php" method="post">
		<p class="kolvo">Щётка Fur Wizard + Перчатка<br>Общая стоимость: 549 грн</p>
		<div id="param_1" class="add_product_param" style="visibility: hidden; height: 1px; width: 1px;">
			<div id="1pcs" class="pcs">
				<input name="idtov" id="order_param_1[11]" value="Щётка Fur Wizard + Перчатка"
				       onchange="change_adds_1(1)" checked="checked" type="radio">
			</div>
		</div>
		<input class="text" name="name" required="" placeholder="Введите Ф.И.О.*">
		<input class="text" name="phone" required="" placeholder="Введите Ваш телефон*">
		<input class="submit" value="ЗАКАЗАТЬ"
		       style="width: 60%;height: 50px;font-size: 24px;font-weight:bold; cursor:pointer;border-radius: 5px;background-color: #f8931f;"
		       type="submit">
	</form>
	<a class="close" title="Закрыть" href="#close"></a>
</div>

<a href="#x" class="overlay" id="win3"></a>
<div class="popup">
	<p style="font-size: 24px; margin-bottom: 20px;">FUR WIZARD СО СКИДКОЙ -53%</p>
	<form action="zakaz.php" method="post">
		<p class="kolvo">2 щётки Fur Wizard<br>Общая стоимость: 698 грн</p>
		<div id="param_1" class="add_product_param" style="visibility: hidden; height: 1px; width: 1px;">
			<div id="1pcs" class="pcs">
				<input name="idtov" id="order_param_1[11]" value="2 щетки Fur Wizard" onchange="change_adds_1(1)"
				       checked="checked" type="radio">
			</div>
		</div>
		<input class="text" name="name" required="" placeholder="Введите Ф.И.О.*">
		<input class="text" name="phone" required="" placeholder="Введите Ваш телефон*">
		<input class="submit" value="ЗАКАЗАТЬ"
		       style="width: 60%;height: 50px;font-size: 24px;font-weight:bold; cursor:pointer;border-radius: 5px;background-color: #f8931f;"
		       type="submit">
	</form>
	<a class="close" title="Закрыть" href="#close"></a>
</div>

<script>
	beforetime = 2;    // сколько дней вычесть т.е. дата С
	aftertime = 0;  // сколько дней добавить дата после
	var d = new Date;
	d.setDate(d.getDate() - beforetime);
	addd = ['ЯНВАРЯ', 'ФЕВРАЛЯ', 'МАРТА', 'АПРЕЛЯ', 'МАЯ', 'ИЮНЯ', 'ИЮЛЯ', 'АВГУСТА', 'СЕНТЯБРЯ', 'ОКТЯБРЯ', 'НОЯБРЯ', 'ДЕКАБРЯ'][d.getMonth()];
	(new Date());
	var b = new Date;
	b.setDate(b.getDate() + aftertime);
	dayb = b.getDate;
	addb = ['ЯНВАРЯ', 'ФЕВРАЛЯ', 'МАРТА', 'АПРЕЛЯ', 'МАЯ', 'ИЮНЯ', 'ИЮЛЯ', 'АВГУСТА', 'СЕНТЯБРЯ', 'ОКТЯБРЯ', 'НОЯБРЯ', 'ДЕКАБРЯ'][b.getMonth()];
	message = 'С ' + d.getDate() + ' ' + addd + ' ПО ' + b.getDate() + ' ' + addb;
	var elements = document.getElementsByClassName('oferdays');
	for (i = 0; i < elements.length; i++) {
		elements[i].innerHTML = message;
	}
</script>

<div class="yvedw">
	<div class="yved yvedf1" style="display: none;"><img src="/img/yico.png" alt="" class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Кирилл, г.Чернигов, сделал заказ на сумму 698 грн, число 2 шт</div>
		</div>
	</div>
	<div class="yved yvedf1" style="display: none;"><img src="/img/yico.png" alt="" class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Анна, г.Днепр, сделала заказ на сумму 698 грн, число 2 шт</div>
		</div>
	</div>
	<div class="yved yvedf1" style="display: none;"><img src="/img/yico.png" alt="" class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Стас, г.Хмельницкий, сделал заказ на сумму 399 грн, число 1 шт</div>
		</div>
	</div>
	<div class="yved yvedf1" style="display: block; opacity: 0.2864;"><img src="/img/yico.png" alt=""
	                                                                       class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Татьяна, г.Каменское, сделала заказ на сумму 1097 грн, число 3 шт</div>
		</div>
	</div>
	<div class="yved yvedf1"><img src="/img/yico.png" alt="" class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Дмитрий, г.Херсон, сделал заказ на сумму 399 грн, число 1 шт</div>
		</div>
	</div>
	<div class="yved yvedf1"><img src="/img/yico.png" alt="" class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Люция, г.Львов, сделала заказ на сумму 698 грн, число 2 шт</div>
		</div>
	</div>
	<div class="yved yvedf1"><img src="/img/yico.png" alt="" class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Елена, г.Киев, сделала заказ на сумму 399 грн, число 1 шт</div>
		</div>
	</div>
	<div class="yved yvedf1"><img src="/img/yico.png" alt="" class="yvedi">
		<div class="yvedvt">
			<div class="yvedt">Виктор, г.Харьков, сделал заказ на сумму 1097 грн, число 3 шт</div>
		</div>
	</div>
</div>

<div id="overlay-popup-m1">
	<div id="m1-form" class="m1modal in" style="display: block;" aria-hidden="false">
		<a class="close-m1" href="javascript:void(0)"
		   onclick="document.getElementById('overlay-popup-m1').style.display='none';"></a>
		<div>
			<div class="popup-m1-title">Вам понравилось это предложение?</div>
			<div class="popup-m1-cont">
				<div class="popup-m1-text1">Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим
					с подходящими акционными предложениями!
				</div>
				<form method="POST" action="zakaz.php" class="popup-m1-form">
					<div id="param_1" class="add_product_param" style="visibility: hidden; height: 1px; width: 1px;">
						<div id="1pcs" class="pcs">
							<input name="idtov" id="order_param_1[11]" value="перезвонить" onchange="change_adds_1(1)"
							       checked="checked" type="radio">
						</div>
					</div>
					<input name="name" placeholder="Введите ваше имя" required="" type="text">
					<input name="phone" placeholder="Введите телефон" required="" type="text">
					<button>Перезвоните мне</button>
				</form>
				<div class="popup-m1-text2">Оператор перезвонит Вам через 5-10 минут</div>
			</div>
		</div>
	</div>
</div>

<!--script>
  $(document).mouseleave(function(){$('#overlay-popup-m1').show();});
</script-->

<div id="overlay-popup-timeout">
	<div id="m1-form" class="m1modal in" style="display: block;" aria-hidden="false">
		<a class="close-m1" href="javascript:void(0)"
		   onclick="document.getElementById('overlay-popup-timeout').style.display='none';"></a>
		<div>
			<div class="popup-m1-title">Оставьте заявку прямо сейчас!</div>
			<div class="popup-m1-cont">
				<div class="popup-m1-text1">
					<p>И получите скидку -53% на щётку для очистки одежды Fur Wizard.<br>Цена всего 399 грн!</p>
				</div>
				<form method="POST" action="zakaz.php" class="popup-m1-form">
					<div id="param_1" class="add_product_param" style="visibility: hidden; height: 1px; width: 1px;">
						<div id="1pcs" class="pcs">
							<input name="idtov" id="order_param_1[11]" value="перезвонить" onchange="change_adds_1(1)"
							       checked="checked" type="radio">
						</div>
					</div>
					<input name="name" placeholder="Введите ваше имя" required="" type="text">
					<input name="phone" placeholder="Введите телефон" required="" type="text">
					<button>Перезвоните мне</button>
				</form>
				<div class="popup-m1-text2">Оператор перезвонит Вам через 5-10 минут</div>
			</div>
		</div>
	</div>
</div>

<!--script type="text/javascript">
  setTimeout(function(){$('#overlay-popup-timeout').fadeIn('fast')},25000); //10000 = 10 секунд
</script-->
<script src="/js/TimeCircles.html"></script>
<script src="/init.html"></script>

<div id="selenium-highlight"></div>
</body>
</html>