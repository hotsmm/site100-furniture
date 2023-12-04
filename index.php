<?php
	
	/*
		Template Name: Главная
		Template Post Type: page
	*/
	
	include 'header.php';
	
?>
		
		
<!-- Header -->
<header>
	<div id="header-slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="99999">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#header-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#header-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<!--button type="button" data-bs-target="#header-slider" data-bs-slide-to="2" aria-label="Slide 3"></button-->
		</div>
		<div class="carousel-inner">
			<div id="header-slide-1" class="carousel-item active">
				<div class="container">
					<div class="row align-items-center text-start">
						<div class="col py-5">
							<h1 class="mb-3">Кухни, шкафы купе и другая корпусная мебель</h1>
							<h2 class="mb-4 mb-md-5 header-sub-title">Готовая и на заказ по Вашим размерам</h2>
							
							<!-- Home advantages -->
							<div class="row pb-2">
								<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-3.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Собственное производство</h3>
											<p class="home-advantage-description">Сроком от 10 дней</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-7.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Европейское качество</h3>
											<p class="home-advantage-description">Экологические и безопасные материалы</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-1.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Бесплатный замер</h3>
											<p class="home-advantage-description">С образцами материалов</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-4.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Монтаж с гарантией</h3>
											<p class="home-advantage-description">2 года!</p>
										</div>
									</div>
								</div>
							</div>
							<!-- /Home advantages -->
						</div>
					</div>
				</div>
			</div>
			<div id="header-slide-2" class="carousel-item">
				<div class="container">
					<div class="row align-items-center text-start">
						<div class="col py-5">
							<h1 class="mb-3">Кухни, шкафы купе и другая корпусная мебель</h1>
							<h2 class="mb-4 mb-md-5 header-sub-title">Готовая и на заказ по Вашим размерам</h2>
							
							<!-- Home advantages -->
							<div class="row pb-2">
								<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-3.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Собственное производство</h3>
											<p class="text-light mb-0">Сроком от 10 дней</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-2.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Рассрочка 0%</h3>
											<p class="text-light mb-0">До 12 месяцев</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-1.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Бесплатный замер</h3>
											<p class="text-light mb-0">С образцами материалов</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-md-0">
									<div class="row align-items-center">
										<div class="col-2 col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-4.png">
										</div>
										<div class="col-10 col-md-9">
											<h3 class="text-light mb-0">Монтаж с гарантией</h3>
											<p class="text-light mb-0">2 года!</p>
										</div>
									</div>
								</div>
							</div>
							<!-- /Home advantages -->
						</div>
					</div>
				</div>
			</div>
			<!--
			<div id="header-slide-3" class="carousel-item">
				<div class="container">
					<div class="row align-items-center text-start">
						<div class="col py-5">
							<h1 class="mb-3">Бесплатный замер</h1>
							<h2 class="mb-3">С образцами ткани и систем</h2>
							<p class="home-description mb-0">Замерщик приедет абсолютно бесплатно!</p>
							<p class="home-description">Специальные условия для пригородов и Ленинградской области.</p>
							<button type="button" class="btn btn-lg btn-orange mt-3">Вызвать замерщика</button>
						</div>
					</div>
				</div>
			</div>
			-->
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#header-slider" data-bs-slide="prev" style="position: relative; z-index: 2;">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#header-slider" data-bs-slide="next" style="position: relative; z-index: 2;">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</header>
<!-- /Header -->


<!-- Products -->
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наша продукция</h2>
				<div class="title-line mb-5"></div>
				<div class="row">
					<?php
						
						$args = [ 
							'taxonomy' => [ 'product_cat' ], 
							'orderby'  => 'term_group', // Упорядочиваем как в админке
							'order'    => 'ASC',
						];
						
						$terms = get_terms( $args );
						
						foreach( $terms as $term ) {
							
							
							// Определяем минимальную цену товара
							// Получаем название текущей категории
							$query = new WP_Query( array(
								'tax_query' => array(
									array(
										'taxonomy' => 'product_cat',
										'field'    => 'name', // Поле, по которому ищем термин
										'terms'    => $term->name
									)
								)
							) );
							$min_price = 999999999;								
							while ( $query->have_posts() ) { $query->the_post();
								$price = get_post_meta( get_the_ID(), '_regular_price', true);
								if ( $price < $min_price ) {
									$min_price = $price;
								}
							}
							// Закончили определять минимальную цену товара
							
							
							if ( $term->parent == 0 ) {
								$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
								$image = wp_get_attachment_url( $thumbnail_id );
								?>
								<div class="col-md-6 mb-5 project-entry">
									<a href="<?php echo get_category_link( $term->term_id, $taxonomy = 'product_cat' ); ?>">
										<div class="figure rounded shadow">
											<img src="<?php echo $image; ?>" class="img-fluid">
										</div>
									</a>
									<h3 class="mb-3"><?php echo $term->name; ?></h3>
									<div class="row align-items-center">
										<div class="col mb-3 mb-lg-0">
											<span class="price">от <?php echo $min_price; ?> руб</span>
										</div>
										<div class="col text-lg-end">
											<a href="<?php echo get_category_link( $term->term_id, $taxonomy = 'product_cat' ); ?>" type="button" class="btn btn-orange" style="width: 175px;">Подробнее</a>
										</div>
									</div>
								</div>
							<?php }
						}
					?>
				</div>
				<div class="row">
					<div class="col d-none d-md-block">
						<img src="<?php echo get_template_directory_uri(); ?>/img/actions/rassrochka.webp" class="w-100">
					</div>
					<div class="col d-md-none">
						<img src="<?php echo get_template_directory_uri(); ?>/img/actions/rassrochka-mobail.webp" class="w-100">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Products -->


<!-- Portfolio -->
<div id="portfolio-scroll-point" class="scroll-point"></div>
<section class="bg-light pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 py-5">
				<h2 class="text-center mb-3">Примеры наших работ</h2>
				<div class="title-line mb-5"></div>
				<div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators" style="bottom: 5%;">
						<?php
							$query = new WP_Query( array(
								'post_type' => 'portfolio'
							) );
							
							$count = 0;
							while ( $query->have_posts() ) { $query->the_post();
								if ( $count == 0 ) { ?>
									<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="<?php echo $count; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $count + 1; ?>"></button>
								<?php $count = $count + 1; } else { ?>
									<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="<?php echo $count; ?>" aria-label="Slide <?php echo $count + 1; ?>"></button>
								<?php $count = $count + 1; }
							}
						?>
					</div>
					<div class="carousel-inner">
						<?php
							$query = new WP_Query( array(
								'post_type' => 'portfolio',
								/*
								'tax_query' => array(
									array(
										'taxonomy' => 'portfolio-cat',
										'field' => 'slug',
										'terms' => 'портфолио-жалюзи-и-рулонных-штор'
									)
								)*/
							) );
							
							$count = 0;
							while ( $query->have_posts() ) { $query->the_post();
								if ( $count == 0 ) { ?>
									<div class="carousel-item mb-4 active" data-bs-interval="100000">
										<img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class="rounded shadow" alt="..." loading="lazy">
									</div>
								<?php $count = $count + 1; } else { ?>
									<div class="carousel-item mb-4">
										<img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class="rounded shadow" alt="..." loading="lazy">
									</div>
								<?php }
							}
						?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-left.png">
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-right.png">
					</button>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row align-items-center text-center">
					<div class="col">
						<a href="https://сайт100.рф/unistyle-mebel/portfolio/"><button class="btn btn-lg btn-orange ps-3 pe-3">Смотреть все работы</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio -->


<!-- Advantages -->
<section class="advantages bg-white py-5">
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
								<p class="mb-0">Бесплатный замер в Санкт-Петербурге и Лен. области, без выходных с 9:00 до 20:00, с каталогами материалов.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Максимальная гарантия в России</h3>
								<p class="mb-0">Мы даем 2 года гарантии.</p>
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


<!-- Frequent questions -->
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<h2 class="text-center mb-3">Вопросы и ответы</h2>
				<div class="title-line mb-5"></div>
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h3 class="accordion-header" id="heading-1">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
								Сколько времени изготавливается кухня?
							</button>
						</h3>
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Срок производства зависит от материалов и составляет 5-10 рабочих дней. Сроки, в обязательном порядке, согласовываются с заказчиком при заключении договора.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-2">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
								Как вызвать специалиста для проведения замера?
							</button>
						</h2>
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Вызвать замерщика вы можете любым из способов: лично посетить один из выставочных залов, оставить онлайн-заявку на нашем сайте, написать на электронный адрес: <a target="_blank" href="mailto:info@unistyle-spb.ru" itemprop="email">info@unistyle-spb.ru</a>, позвонить ☎ <a href="tel:+78123362246">+7 (812) 336-22-46</a> или оставить заявку на обратный звонок.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-3">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
								Сколько стоит вызов замерщика?
							</button>
						</h2>
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Нисколько!</p>
								<p>Выезд нашего дизайнера-конструктора бесплатный в пределах Санкт-Петербурга (за переделы Санкт-Петербурга выезд сотрудника бесплатный при условии заключения договора).</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
								Если эскиз кухни уже есть, можно ли по нему получить расчет?
							</button>
						</h2>
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Такой вариант возможен!</p>
								<p>Направьте эскиз с вашей кухней на нашу электронную почту: <a target="_blank" href="mailto:info@unistyle-spb.ru" itemprop="email">info@unistyle-spb.ru</a>, дополнительно указав в письме материал фасадов, комплектацию, габариты мебели и мы предоставим расчет в ответном письме. Или приезжайте в наши шоу-румы, в которых сделаете расчет на месте и параллельно выберите материалы.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-5">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
								Разработка дизайна кухни - это платная услуга?
							</button>
						</h2>
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Нет, вызов дизайнера на объект и разработка им 3D-проекта - это бесплатные услуги. При разработке дизайнер учтет особенности помещения кухни и все ваши личные пожелания.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-6">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
								Можно ли приобрести товар в рассрочку или в кредит?
							</button>
						</h2>
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Да, конечно, и эта услуга очень популярна. Мы предоставляем беспроцентную рассрочку на покупку нашей кухни на срок до 12 месяцев.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-7">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
								У вас цены ниже, чем обычно по городу. Почему?
							</button>
						</h2>
						<div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Наличие двух собственных производств, оптовые закупки расходных материалов и большое количество заказов позволяют нам сохранять цены на докризисном уровне и делать нашим клиентам предложения на самых выгодных условиях.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-8">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
								Какая модель кухни самая популярная?
							</button>
						</h2>
						<div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Предпочтения наших клиентов настолько разнообразны, а творческий потенциал наших дизайнеров настолько велик, что выделить какую-либо модель достаточно сложно. При разработке проекта мы учитываем все ваши пожелания, а благодаря широчайшей коллекции фасадов и столешниц могут быть сотни вариаций. В одном можем уверить точно: какая бы ни была кухня от нашей фабрики по стилю или конфигурации, она идеально впишется в ваш интерьер и прослужит долгие годы.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Frequent questions -->


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
				<form method="post" action="">
					<div class="row">
						<div class="col-md-4">
							<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
							<input type="text" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="col-md-4">
							<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
							<input type="text" class="form-control telMask" id="exampleFormControlInput2">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<button type="button" class="btn btn-orange mt-3">Хорошо, жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /Order -->
		
		
<?php include 'footer.php'; ?>