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
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/estilo.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/mobile.css" media="screen and (max-width: 480px)" />

	<!-- RSS & Atom -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />

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