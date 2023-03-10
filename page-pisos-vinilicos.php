<?// Template name: pisos vinilicos?>
<?php get_header();?>
<main id="pageSingle">
	<section class="s-hero" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-hero.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row jc-center">
				<div class="row">
					<img class="bg-image" src="<?php the_field('page_image_background'); ?>" alt="<?php the_field('page_alt_text_background'); ?>">
				</div>
			</div>
		</div>
	</section>
	<section class="description mt-10">
		<div class="container-lg">
			<header class="mb-3">
				<h1><?php the_title()?></h1>
			</header>
			<p>O piso vinílico é um dos revestimentos mais versáteis que existe. Por esse motivo, ele está presente em vários cômodos da casa. Eles são uma ótima escolha para os projetos de arquitetura e decoração já que garantem conforto térmico e acústico, resistência a riscos e manchas, além do excelente custo-benefício.O piso vinílico Durafloor é resistente à água, feito à base de PVC 100% reciclável e ideal para quem não abre mão da beleza nem da praticidade.</p>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container-lg">
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
			<div class="ospefloor mt-5">
				<header class="product-title d-flex ai-center my-5">
						<h2>Pisos Vinilicos Ospefloor</h2>
						<img class="ml-2" width=80 height=80 src="<?php the_field('page_provider_ospefloor'); ?>" alt="">
				</header>
					<?php 
						$config = array ('posts_per_page' => '6', 'post_type' => 'pisos-vinilicos', 'category_name' => 'ospefloor', 'order'=> 'DESC');
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
		</div>
	</section>
</main>
<?php get_footer();?>			