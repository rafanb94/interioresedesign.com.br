<?php get_header();?>
<?php setPostViews(get_the_ID());?>
<main id="pageSingle">
	<section class="s-hero" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-hero.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row jc-center">
				<div class="row">
					<img class="bg-image" src="<?php the_field('single_product_image_background'); ?>" alt="<?php the_field('single_alt_text_image_background'); ?>">
				</div>
			</div>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container-lg">
			<div class="product-content">
				<div class="row flex-col">
					<header class="mb-3">
						<h1><?php the_title()?></h1>
					</header>
					<p>Trabalhamos com as melhores marcas de Piso Laminado do mercado, com profissionais altamente capacitados e credenciados pelos fabricantes, preparados para a instalação desse material com rapidez e qualidade.</p>
				</div>
				<div class="row flex-col mt-5">
					<header class="mb-3">
						<h2>Benefícios</h2>
					</header>
					<ul>
						<li>Feito com madeira reflorestada</li>
						<li>Conforto acústico</li>
						<li>Conforto térmico</li>
						<li>Limpeza ainda mais fácil</li>
						<li>Rápida instalação</li>
						<li>Qualidade garantida Duratex</li>
						<li>Proteção antibacteriana (Protekto)</li>
						<li>Resistente a cupins</li>
					</ul>
				</div>
				<div class="row flex-col mt-5">
						<header class="mb-3">
							<h2>Indicações</h2>
						</header>
						<p class="mb-2">Áreas residenciais de grande circulação como quartos, salas, corredores e halls.</p>	
				</div>
				<div class="row flex-col mt-5">
						<header class="mb-3">
							<h2>Fornecedor</h2>
						</header>
						<img width=180 height=180 src="<?php the_field('single_provider'); ?>" alt="">
				</div>
				<div class="product-colors">
					<header>
						<h2>Cores Disponíveis</h2>
					</header>
						<div class="grid mt-5">
							<div class="color">	
								<img src="<?php the_field('single_color_1');?>" alt="">
								<header>
									<h3><?php the_field('single_color_name_1'); ?></h3>
								</header>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();?>			