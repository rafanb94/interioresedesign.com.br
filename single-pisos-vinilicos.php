<?php get_header();?>
<?php setPostViews(get_the_ID());?>
<main id="pageSingle">
	<section class="s-hero" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-hero.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row jc-between">
				<div class="row">
					<img class="bg-image" src="<?php the_field('single_product_image_background'); ?>" alt="<?php the_field('single_alt_text_image_background'); ?>">
				</div>
				<div class="row flex-col jc-center ai-center">
					<h1 class="txt-center"><?php the_title()?></h1>
					<p class="txt-center" style="max-width:520px">O piso vinílico é um dos revestimentos mais versáteis que existe. Por esse motivo, ele está presente em vários cômodos da casa. Eles são uma ótima escolha para os projetos de arquitetura e decoração já que garantem conforto térmico e acústico, resistência a riscos e manchas, além do excelente custo-benefício.O piso vinílico Durafloor é resistente à água, feito à base de PVC 100% reciclável e ideal para quem não abre mão da beleza nem da praticidade.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="s-product mt-10">
		<div class="container-lg">
			<div class="row jc-between">
				<div class="product-content">
					<div class="row flex-col">
						<header class="mb-3">
							<h2>Descrição</h2>
						</header>
						<p class="mb-2">Se você está procurando por um piso durável, fácil de limpar e que oferece uma ampla gama de estilos e opções de cor, então os pisos vinílicos são a escolha perfeita para você. Aqui na interiores e design, oferecemos uma ampla seleção de pisos vinílicos de alta qualidade, com preços acessíveis e instalação fácil.</p>
						</div>
					<div class="row flex-col mt-5">
						<header class="mb-3">
							<h2>Benefícios</h2>
						</header>
						<ul>
							<li>Fácil de limpar</li>
							<li>Não provoca alergias</li>
							<li>Variedade de Texturas e padrões</li>
							<li>Conforto acústico</li>
							<li>Confortável em qualquer temperatura</li>
						</ul>
					</div>
					<div class="row flex-col mt-5">
						<header class="mb-3">
							<h2>Indicações</h2>
						</header>
						<p class="mb-2">Áreas residenciais de grande circulação como quartos, salas, corredores e halls.</p>
						<p>Áreas comerciais com grande circulação de pessoas como teatros, cinemas, casas de espetáculos, escolas, hotéis, shoppings</p>	
					</div>
					<div class="row flex-col mt-5">
						<header class="mb-3">
							<h2>Fornecedor</h2>
						</header>
						<img width=180 height=180 src="<?php the_field('single_provider'); ?>" alt="">
					</div>
				</div>
				<div class="product-colors">
					<header>
						<h2>Cores Disponíveis</h2>
					</header>
						<div class="grid mt-5">
							<div class="color">	
								<img src="<?php the_field('single_image_color_1');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_1'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_2');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_2'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_3');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_3'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_4');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_4'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_5');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_5'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_6');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_6'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_7');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_7'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_8');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_8'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_9');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_9'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_10');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_10'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_11');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_11'); ?></h3>
								</header>
							</div>
							<div class="color">	
								<img src="<?php the_field('single_image_color_12');?>" alt="">
								<header>
									<h3><?php the_field('single_name_color_12'); ?></h3>
								</header>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();?>			