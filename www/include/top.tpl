<?
	$spf = isset($_GET['spf']) && $_GET['spf'] === 'navigate';
	if ($spf) ob_start();
	$path =  str_replace('.php', '', substr($_SERVER['SCRIPT_NAME'], 1));

	// Remove .php extention 
	if (strpos($_SERVER['REQUEST_URI'], '.php') !== false) {
		header('Location: ' . str_replace('.php', '', $_SERVER['REQUEST_URI']));
		exit;
	}

?>

<? if (!$spf): ?>
<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns#">

	<!-- META -->
	<title>CAVSOC<?=$page_title ? " • $page_title" : ""?></title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="edge" />
	<meta http-equiv="cache-control" content="public" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="content-language" content="en-UK,en-US" />
	<meta charset='utf-8' />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="description" content="CAVSOC are specialists in music videos and fashion photography." />

	<!-- OPEN GRAPH DATA -->
	<meta property="og:url" content="http://www.cavsoc.com/" />
	<meta property="og:title" content="CAVSOC" />
	<meta property="og:image" content="http://www.cavsoc.com/images/og-image.png" />
	<meta property="og:image:width" content="1800" />
	<meta property="og:image:height" content="1039" />
	<meta property="og:description" content="Music Videos • Fashion Photography" />

	<!-- INCLUDES -->
	<link rel="stylesheet" type="text/css" href="/style/style.css?v=0.19" />
	<link rel="stylesheet" type="text/css" href="/style/socicon/socicon.css" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" />
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

</head>
<body id="body" data-page="<?=$path?>">

	<header>
		<h1 id="logo" class="cavsoc-heading">
			<a href="/"><em>CAV</em>SOC</a>
		</h1>
		<div>Music Videos • Fashion Editorials • Branded Content</div>
	</header>

	<div class="social-links">
		<a class="social-link" href="https://vimeo.com/cavsoc" target="_blank"><span class="socicon-vimeo"></span></a>
		<a class="social-link" href="https://www.instagram.com/cavsoc" target="_blank"><span class="socicon-instagram"></span></a>
		<a class="social-link" href="https://www.twitter.com/cavalrysociety" target="_blank"><span class="socicon-twitter"></span></a>
		<a class="social-link" href="https://www.linkedin.com/company/cavsoc" target="_blank"><span class="socicon-linkedin"></span></a>
	</div>

	<div id="main">
<? endif; ?>