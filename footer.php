	<section class="s-map my-10">
		<div class="container">
			<div class="row jc-between ai-center mt-10">
				<div class="box-left">
					<p class="subhead">Ficou alguma dúvida?</p>
					<h2>Entre em contato</h2>
					<div class="row flex-col mt-4">
						<div class="email">
							<div class="row">
								<img class="icon" src="<?php echo get_template_directory_uri()?>/img/icon-mail.svg" alt="">
								<div class="email__content ml-1">
									<p class="email__content__title">Nosso e-mail</p>
									<p>vendas@interioresedesign.com.br</p>
								</div>
							</div>
						</div>
						<div class="whatsapp">
							<div class="row">
								<img class="icon" src="<?php echo get_template_directory_uri()?>/img/icon-whatsapp.svg" alt="">
								<div class="email__content ml-1">
									<p class="email__content__title">Whatsapp</p>
									<p>(11) 98709-4252</p>
								</div>
							</div>
						</div>
						<div class="endereco">
							<div class="row">
								<img class="icon" src="<?php echo get_template_directory_uri()?>/img/icon-map.svg" alt="">
								<div class="email__content ml-1">
									<p class="email__content__title">Endereço</p>
									<p>Rua Azevedo Soares, 925 - Tatuapé - São Paulo - SP</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-right">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5407668272574!2d-46.5699300843312!3d-23.549014167023042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e91617df317%3A0x4a59e1c4d05b2c79!2sR.%20Azevedo%20Soares%2C%20925%20-%20Vila%20Gomes%20Cardim%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003322-001!5e0!3m2!1spt-BR!2sbr!4v1667333889421!5m2!1spt-BR!2sbr" width="615" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
			</div>
		</div>
	</section>
	<section class="s-contato py-15" style="background:url(<?php echo get_template_directory_uri()?>/img/bg-contato.jpg); background-size: 100% 100%; background-position: top;">
		<div class="container">
			<div class="row flex-col ai-center">
				<img src="<?php echo get_template_directory_uri()?>/img/logo-interior-e-design.svg" alt="">
				<h2 class="txt-center">Construímos a casa ou</br>escrítório dos seus sonhos</h2>
				<?php if(!is_page("Home")) {?>
				<a class="btn btn-primary--lg" 
					href="https://wa.me/5511987094252?text=Gostaria%20de%20um%20orçamento%20do%20produto%20<?php the_title()?>">solicitar orçamento</a>
				<?php } else {?>
					<a class="btn btn-primary--lg" 
					href="https://wa.me/5511987094252?text=Gostaria%20de%20um%20orçamento">solicitar orçamento</a>
				<?php }?>
			</div>
		</div>
	</section>

	<footer class="py-5">
		<div class="container d-flex flex-wrap 	jc-between">
			<div class="sitemap">
				<ul>
					<li><b>SITEMAP</b></li>
					<li><a href="<?php echo get_permalink(get_page_by_path("pisos laminados"))?>">Piso Laminado</a></li>
					<li><a href="<?php echo get_permalink(get_page_by_path("pisos vinilicos"))?>">Piso Vinilico</a></li>
					<li><a href="<?php echo get_permalink(get_page_by_path("cortinas e persianas"))?>">Cortinas de Tecidos e Persianas</a></li>
					<li><a href="<?php echo get_permalink(get_page_by_path("box de vidro"))?>">Box de Vidro</a></li>
					<li><a href="<?php echo get_permalink(get_page_by_path("sobre"))?>">Sobre</a></li>
				</ul>
			</div>
			<div class="footer-contato">
				<ul>
					<li><b>CONTATO</b></li>
					<li>(11) 2094-6628</li>
					<li>(11) 2227-1255</li>
					<li>(11) 11 98709-4252</li>
				</ul>
			</div>
		</div>
		</div>
	</footer>
	<style>
		@media screen and (max-width: 960px) {
			.mySwiper h3 {
			display:none;
		}
     }
    .mySwiper2 {
      padding-top:.8rem;
    }

    .mySwiper2 swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper2 .swiper-slide-thumb-active {
      opacity: 1;
    }

   /* .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    } */
  </style>
	</style>

		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
		<script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
		<script>
      var swiper = new Swiper(".mySwiper3", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
				breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
				navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
		<script src="<?php echo get_template_directory_uri()?>/js/app.min.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/plugins.min.js"></script>
    <?php wp_footer();?>
	</body>
</html>