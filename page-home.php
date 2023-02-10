<?// Template name: home?>
<?php get_header();?>
		<main id="pageHome">
			<section class="s-hero" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-hero.jpg); background-repeat: no-repeat; background-size: cover;">
				<div class="container">
					<div class="row flex-col ai-center">
						<h1 class="txt-center">A melhor escolha para a<span style="display:block"><span style="color:#99D85C;">sua casa</span> e o <span style="color:#99D85C;">seu escritório</span></span></h1>
						<a class="btn btn-primary--lg" href="https://wa.me/5511987094252?text=Gostaria%20de%20um%20orçamento">Entre em contato</a>
						<h2 class="txt-center">Veja também nossos catálogos de produtos <span style="display:block">dos mais diversos modelos e gostos.</span></h2>
					</div>
				</div>
			</section>
			<section class="s-produtos my-10">
				<div class="container">
					<h2 class="mb-5">Produtos</h2>
					<div x-data="{ activeTab: 'allTabs' }" class="allTabs">
						<nav class="tabnav">
							<ul class="d-flex ai-center jc-between">
								<li class="txt-center"><div @click.prevent="activeTab = 'allTabs'" 
									:class="{ 'active': activeTab === 'allTabs' }" 
									href="#allTabs">
									<img class=" m-auto pb-1" src="<?php echo get_template_directory_uri()?>/img/products-menu-icon.png" alt="">Exibir todos</div>
								</li>
								<!-- <li class="txt-center"><div @click.prevent="activeTab = 'papeisParede'"
										:class="{ 'active': activeTab === 'papeisParede' }" 								
										href="#papeisParede">
										<img class="m-auto pb-1" src="<?php echo get_template_directory_uri()?>/img/papeis-de-paredes.png">Papéis de Parede</div>
								</li> -->
								<li class="txt-center"><div @click.prevent="activeTab = 'pisoLaminado'"
										:class="{ 'active': activeTab === 'pisoLaminado' }" 								
										href="#pisoLaminado">
										<img class="m-auto pb-1" src="<?php echo get_template_directory_uri()?>/img/piso-laminado.png">Piso Laminado</div>
								</li>
								<li class="txt-center"><div @click.prevent="activeTab = 'cortinas'"
										:class="{ 'active': activeTab === 'cortinas' }"
										href="#cortinas">
										<img class="m-auto pb-1" src="<?php echo get_template_directory_uri()?>/img/cortinas-de-tecidos-e-persianas.png">Cortinas de tecidos</div>
								</li>
								<!-- <li class="txt-center"><div @click.prevent="activeTab = ''"
										:class="{ 'active': activeTab === '' }" 								
										href="#">
										<img class="m-auto pb-1" src="<?php echo get_template_directory_uri()?>/img/piso-vinilico.png">Piso Vinílico</div>
								</li>							 -->
								<li class="txt-center"><div @click.prevent="activeTab = 'boxVidro'"
										:class="{ 'active': activeTab === 'boxVidro' }" 								
										href="#boxVidro">
										<img class="m-auto pb-1" src="<?php echo get_template_directory_uri()?>/img/box-de-vidro.png">Box de Vidro</div>
								</li>	
								<!-- <li class="txt-center"><div @click.prevent="activeTab = ''"
										:class="{ 'active': activeTab === '' }" 								
										href="#papeisParede">
										<img class="m-auto pb-1" src="<?php echo get_template_directory_uri()?>/img/molduras-de-isopor.png">Molduras de Isopor</div>
								</li>																	 -->
							</ul>
						</nav>
						<div class="row flex-col"> 
							<div x-show="activeTab === 'pisoLaminado' || activeTab === 'allTabs'" class="pisoLaminado">
								<?php 
									$config = array (
									'meta_key' => 'post_views_count',
									'posts_per_page' => '5', 
									'post_type' => 'pisos-laminados',
									'orderby' => 'meta_value_num', 
									'order'=> 'DESC');
									$query_posts = new WP_Query($config);
								?>
								<header class="product-title my-5">
									<h2>Pisos Laminados</h2>
								</header>
								<div class="grid mb-10">
									<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
										<div class="card-produto">
											<div class="card-img mb-4">	
												<a href="<?php the_permalink();?>">
													<img src="<?php the_field('single_product_thumbmail'); ?>" 
													alt="<?php the_field('single_alt_text_thumbmail'); ?>"/>
												</a>
											</div>
											<div class="card-content d-flex jc-between ai-center">
												<h3><?php the_title()?></h3>
												<a class="d-flex jc-between ai-center" href="<?php the_permalink()?>">Saiba mais <img  class="icon" src="<?php echo get_template_directory_uri()?>/img/icon-saiba-mais.svg" alt=""></a>
											</div>
										</div>
									<?php endwhile; endif; wp_reset_query()?>
									<a class="card-moreInfo d-flex jc-center ai-center" href="<?php echo get_permalink(get_page_by_path("pisos laminados"))?>">Outros Modelos<img  class="icon ml-1" src="<?php echo get_template_directory_uri()?>/img/icon-saiba-mais.svg" alt=""></a>
								</div>
							</div>

							<div x-show="activeTab === 'cortinas' || activeTab === 'allTabs'" class="cortinas">
								<?php 
									$config = array (
										'posts_per_page' => '5', 
										'post_type' => 'cortinas',
										 'order'=> 'ASC');
									$query_posts = new WP_Query($config);
								?>
								<header>
									<h2>Cortinas e Persianas</h2>
								</header>
								<div class="grid my-5">
									<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
										<div class="card-produto">
											<div class="card-img">	
												<a href="<?php echo get_permalink(get_page_by_path("cortinas e persianas"))?>">
													<img src="<?php the_field('custompost_image_background'); ?>" 
													alt="<?php the_field('custompost_alt_text_thumbmail'); ?>">
												</a>
											</div>
										</div>
									<?php endwhile; endif; wp_reset_query()?>
									<a class="card-moreInfo d-flex jc-center ai-center" href="<?php echo get_permalink(get_page_by_path("cortinas e persianas"))?>">Saiba mais <img  class="icon ml-1" src="<?php echo get_template_directory_uri()?>/img/icon-saiba-mais.svg" alt=""></a>
								</div>
							</div>

							<div x-show="activeTab === 'boxVidro' || activeTab === 'allTabs'" class="boxVidro">
								<?php 
									$config = array (
										'posts_per_page' => '5', 
										'post_type' => 'box-de-vidro',
										 'order'=> 'ASC');
									$query_posts = new WP_Query($config);
								?>
								<header>
									<h2>Box de Vidro</h2>
								</header>
								<div class="grid my-5">
									<?php if(have_posts()):while($query_posts -> have_posts()):$query_posts -> the_post();?>
									<div class="card-produto">
										<div class="card-img">	
											<a href="<?php echo get_permalink(get_page_by_path("box de vidro"))?>">
												<img width="410" height="197" 	src="<?php the_field('custompost_image_background'); ?>" 
												alt="<?php the_field('custompost_alt_text_thumbmail'); ?>">
											</a>
										</div>
									</div>
									<?php endwhile; endif; wp_reset_query()?>
									<a class="card-moreInfo d-flex jc-center ai-center" href="<?php echo get_permalink(get_page_by_path("box de vidro"))?>">Saiba mais <img  class="icon ml-1" src="<?php echo get_template_directory_uri()?>/img/icon-saiba-mais.svg" alt=""></a>
								</div>
							</div>
						</div>
				</div>
			</section>
			<section class="s-catalogos my-10 py-5">
				<div class="container">
					<h2 class="txt-center pb-5"><span>Catálogos</span></h2>
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<a href="<?php echo get_template_directory_uri()?>/download/vip-wiler-k.pdf" download>
									<img src="<?php echo get_template_directory_uri()?>/download/vip-wilerk-decoracao.jpg" alt="">
								</a>	
							</div>
							<div class="swiper-slide">
								<a href="<?php echo get_template_directory_uri()?>/download/texture-wiler-k.pdf" download>
									<img src="<?php echo get_template_directory_uri()?>/download/texture-wilerk-decoracao.jpg" alt="">
								</a>	
							</div>	
							<div class="swiper-slide">
								<a href="<?php echo get_template_directory_uri()?>/download/roll-in-stones-2-wiler-k.pdf" download>
									<img src="<?php echo get_template_directory_uri()?>/download/roll-in-stones-2-wilerk-decoracao.jpg" alt="">
								</a>	
							</div>
							<div class="swiper-slide">
								<a href="<?php echo get_template_directory_uri()?>/download/livina-wiler-k.pdf" download>
									<img src="<?php echo get_template_directory_uri()?>/download/livina-wilerk-decoracao.jpg" alt="">
								</a>	
							</div>
							<div class="swiper-slide">
								<a href="<?php echo get_template_directory_uri()?>/download/colorkey-wiler-k.pdf" download>
									<img src="<?php echo get_template_directory_uri()?>/download/colorkey-wilerk-decoracao.jpg" alt="">
								</a>	
							</div>
							<div class="swiper-slide">
								<a href="<?php echo get_template_directory_uri()?>/download/castellani-lançamento-edantex.pdf" download>
									<img src="<?php echo get_template_directory_uri()?>/download/castellani-decoracao.jpg" alt="">
								</a>	
							</div>
						</div>
						<div class="swiper-button-next"></div>
      			<div class="swiper-button-prev"></div>
					</div>
				</div>
			</section>
			<section class="s-fornecedores">
				<div class="container">
					<img class="gallery" src="<?php echo get_template_directory_uri()?>/img/gallery-fornecedores.jpg" alt="">
				</div>
			</section>
		</main>
<?php get_footer();?>	