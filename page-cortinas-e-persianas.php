<?// Template name: cortinas e persianas?>
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
			<p>Para sua casa , escritório ou fábrica, Persiana vertical, horizontal de tecido, P.V.C ou alumínio. Fabricado com o maior controle de qualidade, reunindo beleza, durabilidade e sofisticação deixando o ambiente leve e agradável.</p>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container-lg">
			<div class="cortinas">
				<header class="product-title my-5">
					<h2>Cortinas</h2>
				</header>
				<?php 
					$config = array (
					'posts_per_page' => '-1', 
					'post_type' => 'cortinas',
					'order'=> 'ASC');
					$query_posts = new WP_Query($config);
				?>
				<div class="grid my-5">
					<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
						<div class="card-produto">
							<div class="card-img">	
								<img width="410" height="197" 	src="<?php the_field('custompost_image_background'); ?>" 
									alt="<?php the_field('custompost_alt_text_thumbmail'); ?>">
							</div>
						</div>
					<?php endwhile; endif; wp_reset_query()?>
				</div>
			</div>
			<div class="persianas mt-10">
				<header class="product-title my-5">
					<h2>Persianas</h2>
				</header>
				<?php 
					$config = array (
					'posts_per_page' => '-1', 
					'post_type' => 'persianas',
					'order'=> 'ASC');
					$query_posts = new WP_Query($config);
				?>
				<div class="grid my-5">
					<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
						<div class="card-produto">
							<div class="card-img">	
								<img width="410" height="197" 	src="<?php the_field('custompost_image_background'); ?>" 
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