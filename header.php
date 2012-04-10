<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<title><?php wp_title('-', true, 'right'); bloginfo() ?></title>

	<!-- DNS Prefetching -->
	<link rel="dns-prefetch" href="//ajax.googleapis.com" />
	<link rel="dns-prefetch" href="//thiagobelem-blog.s3.amazonaws.com" />

	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="keywords" content="..." />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Stylesheets -->
	<link rel="stylesheet/less" href="<?php bloginfo('template_url') ?>/css/estilo.less" />
	<link rel="stylesheet/less" href="<?php bloginfo('template_url') ?>/css/mobile.less" media="screen and (max-width: 480px)" />

	<!-- LESS -->
	<script src="<?php bloginfo('template_url') ?>/js/less-1.3.0.min.js" type="text/javascript"></script>

	<!-- RSS & Atom -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo() ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo() ?> - Atom" href="<?php bloginfo('atom_url') ?>" />

	<!-- Author -->
	<link rel="author" href="https://plus.google.com/108724422355747527461" />
	<meta name="google-site-verification" content="6bmTj_ZRXwDRmc_1FQRXrDieEICwliTKpk_IWoxoNbc" />
</head>
<body <?php body_class() ?>>

	<header class="header">
		<hgroup>
			<h1><a href="<?php bloginfo('url') ?>"><?php bloginfo() ?></a></h1>
			<h2><?php bloginfo('description') ?></h2>
		</hgroup>
	</header>