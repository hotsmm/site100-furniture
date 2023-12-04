<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<!-- Header -->
<header id="header-catalogy" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col py-5">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title mb-3"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>
				<h2 class="mb-4 mb-md-5 header-sub-title">Готовая и на заказ по Вашим размерам</h2>
				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				//do_action( 'woocommerce_archive_description' );
				?>
				<!--p class="home-description mb-0">Собственное производство в Санкт-Петербурге жалюзи и рулонных штор, готовых и на заказ от 540 руб./м2. Оформляем окна любого размера и конфигурации. Бесплатный выезд замерщика с образцами. Срок изготовления и доставки от 2 до 5 дней. Гарантия 2 года. Европейская фурнитура.</p-->
				<!--button type="button" class="btn btn-lg btn-orange mt-4">Вызвать замерщика</button-->
				<!-- Home advantages -->
				<div class="row pb-2">
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="row align-items-center">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arounded-advantage-3.png">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Собственное производство</h3>
								<p class="text-light mb-0">Сроком от 5 дней</p>
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
				
				<button type="button" class="btn btn-lg btn-orange mt-3 mt-md-4" data-bs-toggle="modal" data-bs-target="#measurerModal" style="width: 200px;">Вызвать дизайнера</button>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	//do_action( 'woocommerce_before_main_content' );
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	//do_action( 'woocommerce_after_main_content' );
?>

<?php
	/**
	 * woocommerce_sidebar hook.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	//do_action( 'woocommerce_sidebar' );
?>


<!-- Process -->
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Как купить</h2>
				<div class="title-line mb-5"></div>
				<div class="row justify-content-around">
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/process-1.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Заявка</h3>
								<p class="mb-0">Оставьте заявку на замер на нашем сайте или позвоните нам по телефону.</p>
							</div>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/process-2.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Замер</h3>
								<p class="mb-0">Замерщик приедет в удобное для Вас время со всеми каталогами и образцами.</p>
							</div>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/process-3.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Производство</h3>
								<p class="mb-0">Вы подтверждаете свой выбор и вносите предоплату, заказ поступает в производство.</p>
							</div>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/process-4.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Установка</h3>
								<p class="mb-0">После изготовления, монтажник доставит и установит Ваш заказ.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<section class="bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col d-none d-md-block">
				<img src="https://unistyle-mebel.ru/wp-content/themes/unistyle-mebel/img/actions/rassrochka.webp" class="w-100">
			</div>
			<div class="col d-md-none">
				<img src="https://unistyle-mebel.ru/wp-content/themes/unistyle-mebel/img/actions/rassrochka-mobail.webp" class="w-100">
			</div>
		</div>
	</div>
</section>


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
				<p style="max-width: 570px;">Хотите, мы свяжемся с вами в течение 10 минут и все подробно расскажем?</p>
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


<?php get_footer( 'shop' ); ?>