<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)

    Aqui embaixo ta o cabecalho propriamente dito
-->

<html>
	<head>
		<title><?php bloginfo('name').wp_title('|') ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <?php wp_head() ?>
	</head>

	<body class="is-preload">

		<!-- Cabecalho propriamente visivel e o menu que fica aparecendo ali 
		encima sempre pra gente poder andar -->

			<header id="header">
				<a class="logo" href="index.html">Industrious</a>
				<?php $args = array(
					'theme_location' => 'primary',
					'menu_class' => 'menu_class',
					'container_class' => 'container_class',
					'menu' => '',
					'container' => 'nav',
					'container_class' => '',
					'container_id' => 'nav',
					'menu_class' => '',
					'menu_id' => 'nav'
				); ?>
				<?php wp_nav_menu($args); ?>
			</header>
