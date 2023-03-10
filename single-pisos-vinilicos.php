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
				</div>
				<div class="row flex-col">
					<?php the_content()?>
				</div>
				<div class="row flex-col mt-3">
					<header class="mb-3">
						<h2>Fornecedor</h2>
					</header>
						<img style="max-width:180px" src="<?php the_field('single_provider'); ?>" alt="">
				</div>
				<div class="product-colors mt-5">
					<header>
						<h2>Cores Disponíveis</h2>
					</header>
					<swiper-container style="--swiper-navigation-color: #D1FFA2; --swiper-pagination-color: #D1FFA2" class="mySwiper mt-3"
						thumbs-swiper=".mySwiper2" space-between="4" navigation="true" slides-per-view="1">
						<?php if( get_field('single_image_color_1') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_1');?>" alt="<?php the_field('single_name_color_1'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
											<?php if( get_field('single_name_color_1') ): ?>
												<h3><?php the_field('single_name_color_1'); ?></h3>
											<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_2') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_2');?>" alt="<?php the_field('single_name_color_2'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
											<?php if( get_field('single_name_color_2') ): ?>
												<h3><?php the_field('single_name_color_2'); ?></h3>
											<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_3') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_3');?>" alt="<?php the_field('single_name_color_3'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
											<?php if( get_field('single_name_color_3') ): ?>
												<h3><?php the_field('single_name_color_3'); ?></h3>
											<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_4') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_4');?>" alt="<?php the_field('single_name_color_4'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_4') ): ?>
											<h3><?php the_field('single_name_color_4'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_5') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_5');?>" alt="<?php the_field('single_name_color_5'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_5') ): ?>
											<h3><?php the_field('single_name_color_5'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_6') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_6');?>" alt="<?php the_field('single_name_color_6'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_6') ): ?>
											<h3><?php the_field('single_name_color_6'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_7') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_7');?>" alt="<?php the_field('single_name_color_7'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_7') ): ?>
											<h3><?php the_field('single_name_color_7'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_8') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_8');?>" alt="<?php the_field('single_name_color_8'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_8') ): ?>
											<h3><?php the_field('single_name_color_8'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_9') ): ?>
							<swiper-slide>
							<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_9');?>" alt="<?php the_field('single_name_color_9'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
											<?php if( get_field('single_name_color_9') ): ?>
												<h3><?php the_field('single_name_color_9'); ?></h3>
											<?php endif; ?>
											</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>
							
						<?php if( get_field('single_name_color_10') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_10');?>" alt="<?php the_field('single_name_color_10'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_10') ): ?>
											<h3><?php the_field('single_name_color_10'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_11') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_11');?>" alt="<?php the_field('single_name_color_11'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_11') ): ?>
											<h3><?php the_field('single_name_color_11'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>

						<?php if( get_field('single_image_color_12') ): ?>
							<swiper-slide>
								<div class="d-flex jc-between ai-center">
									<img width="590" height="370" src="<?php the_field('single_image_color_12');?>" alt="<?php the_field('single_name_color_12'); ?>"/>
									<div style="width:36%; text-align:center;">
										<header>
										<?php if( get_field('single_name_color_12') ): ?>
											<h3><?php the_field('single_name_color_12'); ?></h3>
										<?php endif; ?>
										</header>
									</div>
								</div>
							</swiper-slide>
						<?php endif; ?>
					</swiper-container>

					<swiper-container class="mySwiper2" space-between="8" slides-per-view="3" free-mode="true"
						atch-slides-progress="true">
						<?php if( get_field('single_image_color_1') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_1');?>" alt="<?php the_field('single_name_color_1'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_2') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_2');?>" alt="<?php the_field('single_name_color_2'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_3') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_3');?>" alt="<?php the_field('single_name_color_3'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_4') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_4');?>" alt="<?php the_field('single_name_color_4'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_5') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_5');?>" alt="<?php the_field('single_name_color_5'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_6') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_6');?>" alt="<?php the_field('single_name_color_6'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_7') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_7');?>" alt="<?php the_field('single_name_color_7'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_8') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_8');?>" alt="<?php the_field('single_name_color_8'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_9') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_9');?>" alt="<?php the_field('single_name_color_9'); ?>"/>
								<?php endif; ?>
							</swiper-slide>
						<?php if( get_field('single_image_color_10') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_10');?>" alt="<?php the_field('single_name_color_10'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_11') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_11');?>" alt="<?php the_field('single_name_color_11'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
						<?php if( get_field('single_image_color_12') ): ?>
							<swiper-slide>
								<img width="295" height="185" src="<?php the_field('single_image_color_12');?>" alt="<?php the_field('single_name_color_12'); ?>"/>
							</swiper-slide>
						<?php endif; ?>
					</swiper-container>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();?>			