<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designers
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('description'); ?></title>
	<?php wp_head(); ?>

</head>

<body>
	<div class="wrapper">
		<header>
			<section class="header-section">
				<div role="logotype" class="header-logo-mobile">
					<a arial-label="logotype" href="index.html">
						<picture>
							<source srcset="<?php bloginfo('template_url'); ?>/assets/img/logo_for_phone.svg" type="image/webp"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo_for_phone.svg" alt="logo">
						</picture>
					</a>
				</div>
				<div role="logotype" class="header-logo-desktop">
					<a arial-label="logotype" href="index.html">
						<picture>
							<source srcset="<?php bloginfo('template_url'); ?>/assets/img/logo-desktop.svg" type="image/webp"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo-desktop.svg" alt="logo">
						</picture>
					</a>
				</div>
				<div role="navigation" class="header-menu">
					<nav class="navigation">
						<ul>
							<li><a arial-label="Перейти на главную" href="#">Главная</a></li>
							<li><a class="services" arial-label="Перейти к услугам" href="#">Услуги</a></li>
							<li><a class="about-us" arial-label="Перейти о нас" href="#">О нас</a></li>
							<li><a class="contacts-link" arial-label="Перейти к контактам" href="#">Контакты</a></li>
						</ul>
					</nav>
					<menu class="menu">
						<button class="close hide"></button>
						<ul class="menu-links hide">
							<li><a arial-label="Перейти на главную" href="#">Главная</a><img style="display: none;" src="<?php bloginfo('template_url'); ?>/assets/img/menu_item_ellipse.svg" alt="menu item icon"></li>
							<li><a class="services" arial-label="Перейти к услугам" href="#">Услуги</a><img style="display: none;" src="<?php bloginfo('template_url'); ?>/assets/img/menu_item_ellipse.svg" alt="menu item icon"></li>
							<li><a class="about-us" arial-label="Перейти о нас" href="#">О нас</a><img style="display: none;" src="<?php bloginfo('template_url'); ?>/assets/img/menu_item_ellipse.svg" alt="menu item icon"></li>
							<li><a class="contacts-link" arial-label="Перейти к контактам" href="#">Контакты</a><img style="display: none;" src="<?php bloginfo('template_url'); ?>/assets/img/menu_item_ellipse.svg" alt="menu item icon"></li>
						</ul>
					</menu>
				</div>
			</section>
		</header>