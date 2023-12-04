<?php
	
	/*
		Template Name: Оплата
		Template Post Type: page
	*/
	
	include 'header.php';
	
?>


<!-- Header -->
<header id="header-payments" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col-lg-10 py-5">
				<h1 class="mb-3"><?php wp_title( "", true ); ?></h1>
				<p class="home-description mb-0">Компания «Унистайл» прилагает все усилия, чтобы сделать свою работу максимально удобной для любой категории покупателей. Мы принимаем заказы как от физических, так и от юридических лиц, предоставляя каждому право выбрать тот вариант оплаты, который ему больше всего подходит.</p>
				<!--button type="button" class="btn btn-lg btn-orange mt-4">Вызвать замерщика</button-->
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Actions -->
<section class="delivery-section pt-4 pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs py-4">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php
					while( have_posts() ){ the_post();
						the_content();
					}
				?>
			</div>
		</div>
	</div>
</section>
<!-- /Actions -->


<!-- Our proizvodstvo --
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наше производство</h2>
				<div class="title-line mb-5"></div>
				<div class="row text-center">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/about-1.jpg" class="img-fluid rounded shadow mb-3">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/about-2.jpg" class="img-fluid rounded shadow mb-3">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/about-3.jpg" class="img-fluid rounded shadow mb-3">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/about-4.jpg" class="img-fluid rounded shadow mb-3 mb-md-0">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/about-5.jpg" class="img-fluid rounded shadow">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our proizvodstvo -->


<!-- Our proizvodstvo --
<section class="advantages bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Сертификаты</h2>
				<div class="title-line mb-5"></div>
				<div class="row text-center">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-3">
								<a href="<?php echo get_template_directory_uri(); ?>/img/certificate-1.jpg">
									<img src="<?php echo get_template_directory_uri(); ?>/img/certificate-1.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
							<div class="col-md-3">
								<a href="<?php echo get_template_directory_uri(); ?>/img/certificate-2.jpg">
									<img src="<?php echo get_template_directory_uri(); ?>/img/certificate-2.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
							<div class="col-md-3">
								<a href="<?php echo get_template_directory_uri(); ?>/img/certificate-3.jpg">
									<img src="<?php echo get_template_directory_uri(); ?>/img/certificate-3.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
							<div class="col-md-3">
								<a href="<?php echo get_template_directory_uri(); ?>/img/certificate-4.jpg">
									<img src="<?php echo get_template_directory_uri(); ?>/img/certificate-4.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our proizvodstvo -->


<!-- Our clients --
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наши клиенты</h2>
				<div class="title-line mb-5"></div>
				
				<div class="row justify-content-center text-center">
					<div class="col-md-8">
						<div class="row justify-content-center">
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-1.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-2.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-3.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-4.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-5.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-6.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-7.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-8.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-9.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-10.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-11.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-12.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-13.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-14.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-15.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-16.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/p-17.jpg" class="img-fluid mb-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our clients -->


<!-- Advantages -->
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Преимущества покупки мебели у нас</h2>
				<div class="title-line mb-5"></div>
				<div class="row">
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Собственное производство</h3>
								<p class="mb-0">Приобретайте напрямую у производителя с опытом работы более 8 лет, без переплаты посредникам.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-9.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Бесплатный замер</h3>
								<p class="mb-0">Бесплатный замер и 3d дизайн-проект в Санкт-Петербурге и Лен. области, без выходных с 9:00 до 20:00, с каталогами материалов.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Европейское качество</h3>
								<p class="mb-0">Экологичные и безопасные материалы с гарантией 2 года.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-8.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Доставляем и устанавливаем</h3>
								<p class="mb-0">Установка "под ключ". Самовывоз (Санкт-Петербург). Доставка по России.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-5.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Рассрочка 0%</h3>
								<p class="mb-0">Благодаря собственному производству предлагаем беспроцентную рассрочку на 12 месяцев.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-6.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Удобная оплата</h3>
								<ul class="mb-0 text-orange ps-0" style="">
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Банковской картой на замере (по банковскому терминалу)</li>
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Наличными </li>
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Онлайн</li>
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Безналичный расчет</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5 mb-md-0">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-7.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Большой выбор готовой продукции и материалов</h3>
								<p class="mb-0">Более 900 готовых изделий, декоров и фасадов.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-0">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-10.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Регулярные акции и подарки</h3>
								<p class="mb-0">Регулярно проводим акции, делаем существенные скидки, дарим подарки.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Advantages -->


<!-- Order -->
<section class="bg-white order-section">
	<div class="container">
		<div class="row">
			<div class="d-none d-md-block col-md-6" style="position: relative;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ico/men.png">
			</div>
			<div class="col-md-6">
				<h2>Остались вопросы?</h2>
				<p style="max-width: 570px;">Здравствуйте! Хотите, мы свяжемся с вами в ближайшее время и все подробно расскажем?</p>
				<div class="title-line mb-5" style="margin: unset;"></div>
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/order-mail.php">
					<div class="row">
						<div class="col-md-4">
							<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
							<input type="text" name="name" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="col-md-4">
							<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
							<input type="text" name="tel" class="form-control telMask" id="exampleFormControlInput2" required>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<button type="submit" class="btn btn-orange mt-3">Хорошо, жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /Order -->
		
		
<?php include 'footer.php'; ?>