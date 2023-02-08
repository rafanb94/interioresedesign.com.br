<?// Template name: pisos laminados?>
<?php get_header();?>
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
						<div x-show="activeTab === 'pisoLaminado' || activeTab === 'allTabs'" class="pisoLaminado">
								<header class="product-title my-5">
									<h2>Pisos Laminados</h2>
								</header>
								<?php 
									$config = array ('posts_per_page' => '6', 'post_type' => 'pisos-laminados', 'category_name' => 'eucafloor', 'order'=> 'DESC');
									$query_posts = new WP_Query($config);
								?>
								<div class="row flex-wrap mb-10">
									<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
								<a href="<?php the_permalink()?>">
									<div class="card-produto">
										<div class="card-img mb-4">	
											<img src="<?php the_field('produto_thumbmail'); ?>" 
											alt="<?php the_field('texto_alternativo_thumbmail'); ?>">
										</div>
										<div class="card-content d-flex jc-between ai-center">
											<h3><?php the_title()?></h3>
											<a class="d-flex jc-between ai-center" href="<?php the_permalink()?>">Saiba mais <img  class="icon" src="<?php echo get_template_directory_uri()?>/img/icon-saiba-mais.svg" alt=""></a>
										</div>
									</div>
								</a>
								<?php endwhile; endif; wp_reset_query()?>
								</div>
							</div>
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