<?// Template name: box de vidro?>
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
					<p class="txt-center" style="max-width:520px">Estilo, elegância, conforto e segurança, valorizando cada detalhe da sua residência, com uma grande resistência e durabilidade, o Box e portas de Vidro tem um design moderno e exclusivo, e estão disponíveis em diversas cores, trabalhamos com Box de Vidro e Acrilico.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="description mt-10">
		<div class="container">
			<header class="mb-3">
				<h2>Descrição</h2>
			</header>
			<p class="mb-2" style="max-width:600px;">O box de vidro é a escolha perfeita para quem procura um banheiro elegante e moderno. Além de ser uma opção de revestimento mais sofisticada, o vidro oferece muitas vantagens práticas, como fácil limpeza e maior durabilidade em comparação com outros materiais.</p>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container">
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