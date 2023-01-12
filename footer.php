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
				<a class="btn btn-primary--lg" href="">solicitar orçamento</a>
			</div>
		</div>
	</section>

	<footer class="py-5">
		<div class="container d-flex flex-wrap 	jc-between">
			<div class="sitemap">
				<ul>
					<li><b>SITEMAP</b></li>
					<li><a href="">Produtos</a></li>
					<li><a href="">Contato</a></li>
					<li><a href="">Fornecedores</a></li>
					<li><a href="">Localização</a></li>
				</ul>
			</div>
			<div class="categorias">
				<ul>
					<li><b>CATEGORIAS</b></li>
				</ul>
				</div>
				<div class="footer-contato">
					<ul>
						<li><b>CONTATO</b></li>
						<li><a href="">(11) 2954-5400</a></li>
						<li><a href="">(11) 97674 7309</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
		<script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
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