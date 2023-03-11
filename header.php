<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plugins.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.min.css"/>
		<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/favicon.svg">
		<!-- Primary Meta Tags -->
		<!-- <title><?php wp_title( '|', true, 'right' );?><?php bloginfo( 'name' )?></title>
		<meta name="title" content="<?php wp_title( '|', true, 'right' );?><?php bloginfo( 'name' )?>"> -->
		<title>Os melhores itens para sua casa e escritório | Interior e Design</title>
		<meta name="title" content="Os melhores itens para sua casa e escritório | Interior e Design">
		<meta name="description" content="Conheça nosso catálogo de Pisos Laminados, Cortinas de tecidos e Persianas, Pisos Vinílico e Box de Vidro - Entre em contato - (11) 98709-4252.">

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://interioresedesign.com.br/">
		<meta property="og:title" content="Os melhores itens para sua casa e escritório | Interior e Design">
		<meta property="og:description" content="Conheça nosso catálogo de Pisos Laminados, Cortinas de tecidos e Persianas, Pisos Vinílico e Box de Vidro - Entre em contato - (11) 98709-4252.">
		<meta property="og:image" content="<?php echo get_template_directory_uri()?>/social-share.jpg">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="http://interioresedesign.com.br/">
		<meta property="twitter:title" content="Os melhores itens para sua casa e escritório | Interior e Design">
		<meta property="twitter:description" content="Conheça nosso catálogo de Pisos Laminados, Cortinas de tecidos e Persianas, Pisos Vinílico e Box de Vidro - Entre em contato - (11) 98709-4252.">
		<meta property="twitter:image" content="<?php echo get_template_directory_uri()?>/social-share.jpg">
		<?php wp_head();?>
	</head>
	<body>
	<header id="js-header" class="header">
			<div class="container d-flex flex-col">
				<div class="row jc-center">
					<div class="logo">
						<a href="/"><img class="logo__img" src="<?php echo get_template_directory_uri()?>/img/logo-interior-e-design.svg" alt="Logo acferramentas.com.br"/></a>
					</div>
					<button id="js-btn-mobile" class="hamburger hamburger--boring" type="button" aria-label="botão menu mobile">
						<p class="hamburger-label">Menu</p>
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<div class="row jc-center ai-center">
					<nav class="navbar-desktop d-flex grow jc-center ai-center mt-7">
						<ul class="menu-desktop d-flex">
							<!-- <li class="menu-desktop__item p-1">
								<a class="menu-desktop__link" href="/">Papéis de Paredes</a>
							</li> -->
							<li class="menu-desktop__item p-1 ml-3">
								<a class="menu-desktop__link" href="<?php echo get_permalink(get_page_by_path("pisos laminados"))?>">Piso Laminado</a>
							</li>
							<li class="menu-desktop__item p-1 ml-3">
								<a class="menu-desktop__link" href="<?php echo get_permalink(get_page_by_path("pisos vinilicos"))?>">Piso Vinílico</a>
							</li>
							<li class="menu-desktop__item p-1 ml-3">
								<a class="menu-desktop__link" href="<?php echo get_permalink(get_page_by_path("cortinas e persianas"))?>">Cortinas de tecidos e Persianas</a>
							</li>
							<li class="menu-desktop__item p-1 ml-3">
								<a class="menu-desktop__link" href="<?php echo get_permalink(get_page_by_path("box de vidro"))?>">Box de Vidro</a>
							</li>
							<li class="menu-desktop__item p-1 ml-3">
								<a class="menu-desktop__link" href="<?php echo get_permalink(get_page_by_path("sobre"))?>">Sobre</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<nav class="navbar-mobile p-2 d-flex jc-center">
				<ul class="menu-mobile d-flex flex-col ai-center jc-evenly">
					<li class="menu-mobile__item py-1">
						<a class="menu-mobile__link" href="/">Home</a>
					</li>
					<li class="menu-mobile__item py-1">
						<a class="menu-mobile__link" href="<?php echo get_permalink(get_page_by_path("pisos laminados"))?>">Pisos Laminados</a>
					</li>
					<li class="menu-mobile__item py-1">
						<a class="menu-mobile__link" href="<?php echo get_permalink(get_page_by_path("pisos vinilicos"))?>">Pisos Vinilicos</a>
					</li>
					<li class="menu-mobile__item py-1 txt-center">
						<a class="menu-mobile__link" href="<?php echo get_permalink(get_page_by_path("cortinas e persianas"))?>">Cortinas e Persianas</a>
					</li>
					<li class="menu-mobile__item py-1">
						<a class="menu-mobile__link" href="<?php echo get_permalink(get_page_by_path("box de vidro"))?>">Box de Vidro</a>
					</li>
					<li class="menu-mobile__item py-1">
						<a class="menu-mobile__link" href="<?php echo get_permalink(get_page_by_path("sobre"))?>">Sobre</a>
					</li>
				</ul>
			</nav>
		</header>
