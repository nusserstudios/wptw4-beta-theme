<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta charset="utf-8">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//ajax.googleapis.com">
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<link rel="dns-prefetch" href="//apis.google.com">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Balefire Marketing + Advertising">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-zinc-100 dark:bg-zinc-900 dark:text-zinc-100 text-zinc-900' ); ?>>

<?php get_template_part( 'inc/header', 'nav' ); ?>

<div id="page" class="flex">

	<main class="px-6 mx-auto mt-12 h-screen">
