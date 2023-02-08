<?php get_header();?>
<?php setPostViews(get_the_ID());?>
<main id="pageSingle">
	<section class="s-hero" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-hero.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row jc-between">
				<div class="row">
					<img src="<?php the_field('produto_image_background'); ?>" alt="<?php the_field('texto_alternativo_produto_image_background'); ?>">
				</div>
				<div class="row flex-col jc-center ai-center">
					<h1 class="txt-center"><?php the_title()?></h1>
					<p class="txt-center" style="max-width:520px">Trabalhamos com as melhores marcas de Piso Laminado do mercado, com profissionais altamente capacitados e credenciados pelos fabricantes, preparados para a instalação desse material com rapidez e qualidade.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container">
			<div class="row jc-between">
				<div class="product-content">
					<div class="row flex-col">
						<header class="mb-3">
							<h2>Descrição</h2>
						</header>
						<p class="mb-2">Na linha Durafloor Link você encontra padrões contemporâneos que ajudam a criar ambientes sofisticados e  acolhedores. Seus padrões madeirados criam uma sensação única de conforto e são ideais  para ambientes residenciais.</p>
						<p>Categoria: Pisos Laminados Tags: Linha Link, piso laminado Linha Link, pisos laminado, pisos laminados duratex, pisos laminados para residência</p>
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
						<img width=180 height=180 src="<?php echo get_template_directory_uri()?>/img/durafloor.jpg" alt="">
					</div>
				</div>
				<div class="product-colors">
					<div class="container">
						<img src="<?php the_field('tipos_de_piso'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();?>			