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
				<div class="product-colors mt-5">
					<header>
						<h2>Cores Disponíveis</h2>
					</header>
					<swiper-container style="--swiper-navigation-color: #D1FFA2; --swiper-pagination-color: #D1FFA2" class="mySwiper mt-3"
						thumbs-swiper=".mySwiper2" space-between="4" navigation="true" slides-per-view="1">
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
								<img width="590" height="370" src="<?php the_field('single_image_color_1');?>" alt="<?php the_field('single_name_color_1'); ?>"/>
								<div style="width:36%; text-align:center;">
									<header>
										<h3><?php the_field('single_name_color_1'); ?></h3>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
								<img width="590" height="370" src="<?php the_field('single_image_color_2');?>" alt="<?php the_field('single_name_color_2'); ?>"/>
								<div style="width:36%; text-align:center;">
									<header>
										<h3><?php the_field('single_name_color_2'); ?></h3>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
								<img width="590" height="370" src="<?php the_field('single_image_color_3');?>" alt="<?php the_field('single_name_color_3'); ?>"/>
								<div style="width:36%; text-align:center;">
									<header>
										<h3><?php the_field('single_name_color_3'); ?></h3>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
								<img width="590" height="370" src="<?php the_field('single_image_color_4');?>" alt="<?php the_field('single_name_color_4'); ?>"/>
								<div style="width:36%; text-align:center;">
									<header>
										<h3><?php the_field('single_name_color_2'); ?></h3>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
								<img width="590" height="370" src="<?php the_field('single_image_color_5');?>" alt="<?php the_field('single_name_color_5'); ?>"/>
								<div style="width:36%; text-align:center;">
									<header>
										<h3><?php the_field('single_name_color_5'); ?></h3>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
								<img width="590" height="370" src="<?php the_field('single_image_color_6');?>" alt="<?php the_field('single_name_color_6'); ?>"/>
								<div style="width:36%; text-align:center;">
									<header>
										<h3><?php the_field('single_name_color_6'); ?></h3>
									</header>
								</div>
							</div>
						</swiper-slide>
						<!-- <swiper-slide>
							<div class="d-flex jc-between ai-center">
								<img width="590" height="370" src="https://swiperjs.com/demos/images/nature-2.jpg" />
								<div style="width:36%; text-align:center;"><p>Nome da Cor</p></div>
							</div>
						</swiper-slide> -->
  				</swiper-container>

					<swiper-container class="mySwiper2" space-between="8" slides-per-view="3" free-mode="true"
						watch-slides-progress="true">
						<swiper-slide>
							<img width="295" height="185" src="<?php the_field('single_image_color_1');?>" alt="<?php the_field('single_name_color_1'); ?>"/>
						</swiper-slide>
						<swiper-slide>
							<img width="295" height="185" src="<?php the_field('single_image_color_2');?>" alt="<?php the_field('single_name_color_2'); ?>"/>
						</swiper-slide>
						<!-- <swiper-slide>
							<img width="295" height="185" src="https://swiperjs.com/demos/images/nature-2.jpg" />
						</swiper-slide> -->
					</swiper-container>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();?>			