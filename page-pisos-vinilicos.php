<?// Template name: pisos vinilicos?>
<?php get_header();?>
<main id="pageSingle">
	<section class="s-hero" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-hero.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row jc-between">
				<div class="row">
					<img class="bg-image" src="<?php the_field('page_image_background'); ?>" alt="<?php the_field('page_alt_text_background'); ?>">
				</div>
				<div class="row flex-col jc-center ai-center">
					<h1 class="txt-center"><?php the_title()?></h1>
					<p class="txt-center" style="max-width:520px">Trabalhamos com as melhores marcas de Piso Laminado do mercado, com profissionais altamente capacitados e credenciados pelos fabricantes, preparados para a instalação desse material com rapidez e qualidade.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="description mt-10">
		<div class="container">
			<header class="mb-3">
				<h2>Descrição</h2>
			</header>
			<p class="mb-2" style="max-width:600px;">Nas linhas de Laminados você encontra padrões contemporâneos que ajudam a criar ambientes sofisticados e  acolhedores. Seus padrões madeirados criam uma sensação única de conforto e são ideais  para ambientes residenciais.</p>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container">
			<div class="durafloor">
				<header class="product-title d-flex ai-center my-5">
						<h2>Pisos Vinilicos Durafloor</h2>
						<img class="ml-2" width=80 height=80 src="<?php the_field('page_provider_durafloor'); ?>" alt="">
				</header>
					<?php 
						$config = array ('posts_per_page' => '6', 'post_type' => 'pisos-vinilicos', 'category_name' => 'durafloor', 'order'=> 'DESC');
						$query_posts = new WP_Query($config);
					?>
					<div class="grid mb-10">
						<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
								<div class="card-produto mb-5">
									<div class="card-img mb-4">	
										<a href="<?php the_permalink()?>">
											<img src="<?php the_field('single_product_thumbmail'); ?>" 
											alt="<?php the_field('single_alt_text_thumbmail'); ?>">
										</a>
									</div>
									<div class="card-content d-flex jc-between ai-center">
										<h3><?php the_title()?></h3>
										<a class="d-flex jc-between ai-center" href="<?php the_permalink()?>">Saiba mais <img  class="icon" src="<?php echo get_template_directory_uri()?>/img/icon-saiba-mais.svg" alt=""></a>
									</div>
								</div>
						<?php endwhile; endif; wp_reset_query()?>
					</div>
			</div>
			<div class="eucafloor mt-10">
				<header class="product-title d-flex ai-center my-5">
					<h2>Pisos Vinilicos Eucafloor</h2>
					<img class="ml-2" width=80 height=80 src="<?php the_field('page_provider_eucafloor'); ?>" alt="">
				</header>
					<?php 
						$config = array ('posts_per_page' => '-1', 'post_type' => 'pisos-vinilicos', 'category_name' => 'eucafloor', 'order'=> 'DESC');
						$query_posts = new WP_Query($config);
					?>
					<div class="grid mb-10">
						<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
								<div class="card-produto mb-5">
									<div class="card-img mb-4">	
										<a href="<?php the_permalink()?>">
											<img src="<?php the_field('single_product_thumbmail'); ?>" 
											alt="<?php the_field('single_alt_text_thumbmail'); ?>">
										</a>
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
	</section>
</main>
<?php get_footer();?>			