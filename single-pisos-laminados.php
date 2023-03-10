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
							<?php if( get_field('single_image_color_1') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_1');?>" alt="<?php the_field('single_name_color_1'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_1') ): ?>
										<h3><?php the_field('single_name_color_1'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_2') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_2');?>" alt="<?php the_field('single_name_color_2'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_2') ): ?>
										<h3><?php the_field('single_name_color_2'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_3') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_3');?>" alt="<?php the_field('single_name_color_3'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_3') ): ?>
										<h3><?php the_field('single_name_color_3'); ?></h3>
										<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_4') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_4');?>" alt="<?php the_field('single_name_color_4'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_4') ): ?>
										<h3><?php the_field('single_name_color_4'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_5') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_5');?>" alt="<?php the_field('single_name_color_5'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_5') ): ?>
										<h3><?php the_field('single_name_color_5'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_6') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_6');?>" alt="<?php the_field('single_name_color_6'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_6') ): ?>
										<h3><?php the_field('single_name_color_6'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_7') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_7');?>" alt="<?php the_field('single_name_color_7'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_7') ): ?>
										<h3><?php the_field('single_name_color_7'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_8') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_8');?>" alt="<?php the_field('single_name_color_8'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_8') ): ?>
										<h3><?php the_field('single_name_color_8'); ?></h3>
									</header>
								<?php endif; ?>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_9') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_9');?>" alt="<?php the_field('single_name_color_9'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_9') ): ?>
										<h3><?php the_field('single_name_color_9'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_name_color_10') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_10');?>" alt="<?php the_field('single_name_color_10'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_10') ): ?>
										<h3><?php the_field('single_name_color_10'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_11') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_11');?>" alt="<?php the_field('single_name_color_11'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_11') ): ?>
										<h3><?php the_field('single_name_color_11'); ?></h3>
									<?php endif; ?>
									</header>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="d-flex jc-between ai-center">
							<?php if( get_field('single_image_color_12') ): ?>
								<img width="590" height="370" src="<?php the_field('single_image_color_12');?>" alt="<?php the_field('single_name_color_12'); ?>"/>
							<?php endif; ?>
								<div style="width:36%; text-align:center;">
									<header>
									<?php if( get_field('single_name_color_12') ): ?>
										<h3><?php the_field('single_name_color_12'); ?></h3>
									<?php endif; ?>
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
						<?php if( get_field('single_image_color_1') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_1');?>" alt="<?php the_field('single_name_color_1'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_2') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_2');?>" alt="<?php the_field('single_name_color_2'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_3') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_3');?>" alt="<?php the_field('single_name_color_3'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_4') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_4');?>" alt="<?php the_field('single_name_color_4'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_5') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_5');?>" alt="<?php the_field('single_name_color_5'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_6') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_6');?>" alt="<?php the_field('single_name_color_6'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_7') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_7');?>" alt="<?php the_field('single_name_color_7'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_8') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_8');?>" alt="<?php the_field('single_name_color_8'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_9') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_9');?>" alt="<?php the_field('single_name_color_9'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_10') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_10');?>" alt="<?php the_field('single_name_color_10'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_11') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_11');?>" alt="<?php the_field('single_name_color_11'); ?>"/>
						<?php endif; ?>
						</swiper-slide>
						<swiper-slide>
						<?php if( get_field('single_image_color_12') ): ?>
							<img width="295" height="185" src="<?php the_field('single_image_color_12');?>" alt="<?php the_field('single_name_color_12'); ?>"/>
						<?php endif; ?>
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