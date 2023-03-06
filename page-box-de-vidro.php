<?// Template name: box de vidro?>
<?php get_header();?>
<main id="pageSingle">
	<section class="s-hero" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-hero.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row jc-center">
				<div class="row">
					<img class="bg-image" height=525 src="<?php the_field('page_image_background'); ?>" alt="<?php the_field('page_alt_text_background'); ?>">
				</div>
			</div>
		</div>
	</section>
	<section class="description mt-10">
		<div class="container-lg">
			<header class="mb-3">
				<h1><?php the_title()?></h1>
			</header>
			<p>Estilo, elegância, conforto e segurança, valorizando cada detalhe da sua residência, com uma grande resistência e durabilidade, o Box e portas de Vidro tem um design moderno e exclusivo, e estão disponíveis em diversas cores, trabalhamos com Box de Vidro.</p>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container-lg">
			<div class="boxVidro">
				<header class="product-title my-5">
					<h2>Box de Vidro</h2>
				</header>
				<?php 
					$config = array (
					'posts_per_page' => '6', 
					'post_type' => 'box-de-vidro',
					'order'=> 'ASC');
					$query_posts = new WP_Query($config);
				?>
				<div class="grid my-5">
					<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
						<div class="card-produto">
							<div class="card-img">	
								<img width="410" height="546" src="<?php the_field('custompost_image_background'); ?>" 
									alt="<?php the_field('custompost_alt_text_thumbmail'); ?>">
							</div>
						</div>
					<?php endwhile; endif; wp_reset_query()?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();?>			