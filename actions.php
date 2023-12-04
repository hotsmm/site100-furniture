<?php
	
	/*
		Template Name: Акции
		Template Post Type: page
	*/
	
	include 'header.php';
	
?>


<!-- Header -->
<header id="header-actions" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col py-5">
				<h1 class="woocommerce-products-header__title page-title mb-3">Акции</h1>
				<p class="home-description mb-0">Фабрика «Унистайл » регулярно проводит различные акции. Мы готовы предложить вам качественную и красивую мебель со скидками, а также подарки.</p>
				<!--button type="button" class="btn btn-lg btn-orange mt-4">Вызвать замерщика</button-->
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Actions -->
<section class="actions-section py-5">
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
				<h2 class="text-center mb-3">Наши акции</h2>
				<div class="title-line mb-5"></div>
				<div class="row">
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-1.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">Выезд замерщика и 3D-проект абсолютно бесплато!</h3>
						<!--p></p-->
						<button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызвать замерщика</button>
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-2.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Cкидка 10% на шторы и жалюзи</h3>
						<p>При покупке любой мебели в <a href="https://unistyle-spb.ru"><strong>Унистайл</strong></a></p>
						<a href="https://unistyle-spb.ru" type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#orderModal">На сайт жалюзи</a>
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-3.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Рассрочка на все 0%</h3>
						<p>Первоначальный взнос 0 руб. Переплата 0 руб. Рассрочка от 6 до 12 месяцев.</p>
						<button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#orderModal">Оставить заявку</button>
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-4.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">Бесплатная доставка в пределах КАД</h3>
						<!--p></p-->
						<button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#orderModal">Оставить заявку</button>
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-5.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Индивидуальные подарки</h3>
						<p>Варочные панели, вытяжки, посудомойки и др.</p>
						<button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#orderModal">Оставить заявку</button>
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-6.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Индивидуальная скидка 10%</h3>
						<p>При заказе 2-х и более предметов мебели.</p>
						<button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#orderModal">Оставить заявку</button>
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-img-7.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">Скидки новоселам</h3>
						<!--p></p-->
						<button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#orderModal">Оставить заявку</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Actions -->


<!-- Order -->
<section class="bg-light order-section">
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