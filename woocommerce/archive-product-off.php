<?php
/**
 * Архив продуктов 1
 * 
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>


<!-- Header -->
<header id="header-catalogy" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col py-5">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title mb-3"><?php woocommerce_page_title(); ?> 1</h1>
				<?php endif; ?>
				<h2 class="mb-4 mb-md-5 header-sub-title">Кухни и шкафы на заказ по Вашим размерам.</h2>
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
				
				<button type="button" class="btn btn-lg btn-orange mt-3 mt-md-4" data-bs-toggle="modal" data-bs-target="#measurerModal" style="width: 200px;">Вызвать дизайнера</button>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->



<!-- Archive product cat -->
<section class="pb-5">
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
				<h2 class="text-center mb-3">Наша продукция</h2>
				<div class="title-line mb-4"></div>
				
				<?php
					/*
						Если категории:
							"Готовые кухни",
							"Кухни на заказ",
							"Готовые шкафы-купе",
							"Шкафы-купе на заказ"
						то выводим дополнительное меню С ДОЧЕРНИМИ КАТЕГОРИЯМИ
					*/
					if ( is_product_category( array(
						'Готовые кухни',
						'Кухни на заказ',
						'Готовые шкафы',
						'Шкафы на заказ'
					) ) ) { // Проверяем название текущей категории
						
						echo '<style>.product-category { display: none!important; }</style>'; // Скрываем карточки категорий и подкатегорий
						
						// Получаем ID текущей категории
						$obj = get_queried_object();
						$current_category_name = $obj->name;
						$term_id = $obj->term_id;
						
						// Получаем дочерние категории текущей категории
						$tax_name    = 'product_cat'; // Таксономия
						$term_childs = get_term_children( $term_id, $tax_name ); // Получаем дочерние категории текущей категории

						// Выводим дочерние категории текущей категории
						echo '<div class="nav-scroller mb-0 mb-md-4" id="navbarSupportedContent2">';
							echo '<ul class="nav justify-content-md-center d-flex m-auto">';
							
							/* Добавляем класс active */
							if ( ( $current_category_name == 'Готовые кухни' ) OR ( $current_category_name == 'Кухни на заказ' ) ) {
								$active = ' active';
							} else {
								$active = '';
							}
							
							
							// Делаем первый пункт дополнительного меню
							echo '<li class="nav-item"><a class="nav-link'.$active.'" href="' . get_term_link( $term_id ) . '">Все ' . esc_html( mb_strtolower( get_the_category_by_ID( $term_id ) ) ) . '</a></li>'; // Делаем текст маленькими буквами, получаем название категории по переданному ID
							
							foreach ( $term_childs as $child ) {

								$term = get_term_by( 'id', $child, $tax_name );

								echo '<li class="nav-item d-none d-xl-inline">
									<span class="nav-link px-1"><img src="'.get_template_directory_uri().'/img/ico/menu-point.png"></span>
								</li>';
								echo '<li class="nav-item"><a class="nav-link" href="' . get_term_link( $term ) . '">' . esc_html( $term->name ) . '</a></li>';
							}
							echo '</ul>';
						echo '</div>'; ?>
						<div class="d-md-none text-center mb-4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/left-right-finger.png" style="opacity: 1; max-width: 25px;">
						</div>
					<?php };
					
					
					/*
						Если категории:
							"Прямые готовые кухни",
							"Угловые готовые кухни",
							"П-образные готовые кухни",
						то выводим дополнительное меню С ДОЧЕРНИМИ КАТЕГОРИЯМИ РАДАТЕЛЬСКОЙ КАТЕГОРИИ
					*/
					
					if ( is_product_category( array(
						'Прямые готовые кухни',
						'Угловые готовые кухни',
						'П-образные готовые кухни',
						'Прямые кухни на заказ',
						'Угловые кухни на заказ',
						'П-образные кухни на заказ',
						//'Готовые шкафы', // Если уровеней подменю у шкафов меньше на 1
						//'Шкафы на заказ' // Если уровеней подменю у шкафов меньше на 1
					) ) ) { // Проверяем название текущей категории
						
						echo '<style>.product-category { display: none!important; }</style>'; // Скрываем карточки категорий и подкатегорий
						
						// Получаем ID радительской категории
						$obj = get_queried_object(); // Получаем объект
						$current_category_name = $obj->name; // Получаем имя текущей категории
						$term_id = $obj->parent; // Получаем ID радительской категории
						
						// Получаем дочерние категории текущей категории
						$tax_name    = 'product_cat'; // Таксономия
						$term_childs = get_term_children( $term_id, $tax_name ); // Получаем дочерние категории текущей категории
						
						//echo $current_category_name; // Выводим имя текущей категории
						//echo get_the_category_by_ID( $term_id ); // Выводим имя родительской категории

						// Выводим дочерние категории текущей категории
						echo '<div class="nav-scroller mb-0 mb-md-4" id="navbarSupportedContent2">';
						echo '<ul class="nav justify-content-md-center d-flex m-auto">';
							
							// Делаем первый пункт дополнительного меню
							echo '<li class="nav-item"><a class="nav-link" href="' . get_term_link( $term_id ) . '">Все ' . esc_html( mb_strtolower( get_the_category_by_ID( $term_id ) ) ) . '</a></li>'; // Делаем текст маленькими буквами, получаем название категории по переданному ID
							
						foreach ( $term_childs as $child ) {

							$term = get_term_by( 'id', $child, $tax_name );
							
							/* Добавляем класс active */
							if ( $current_category_name == $term->name ) {
								$active = ' active';
							} else {
								$active = '';
							}
							
							echo '<li class="nav-item d-none d-xl-inline">
									<span class="nav-link px-1"><img src="'.get_template_directory_uri().'/img/ico/menu-point.png"></span>
								</li>';
							echo '<li class="nav-item"><a class="nav-link'.$active.'" href="' . get_term_link( $term ) . '">' . esc_html( $term->name ) . '</a></li>';
						}
						echo '</ul>';
						echo '</div>';
					}
				?>
				<div class="row">
					
					<?php
					if ( woocommerce_product_loop() ) {

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						//do_action( 'woocommerce_before_shop_loop' );
						
						// Нижее выводятся карточки категорий и подкатегорий
						woocommerce_product_loop_start();
						// Выше выводятся карточки категорий и подкатегорий
						// Нижее выводятся карточки продуктов
						
						//$obj = get_queried_object();
						//print_r($obj);
						//$cat_id = $obj->term_id;

						//$cat_name = $obj->name;
						//$parent_id = $obj->parent;
						//echo $parent_id;
						//echo '<hr>';
						//$paren_cat_name = get_term($parent_id);
						//print_r( $paren_cat_name );
						//echo $paren_cat_name->name;
						
						//echo $cat_id;
						//echo $cat_name;
						//echo $cat_id->product_cat_parent;
						
						//echo get_category_parents( $cat_id );
						//echo $parent_name;
						
						/*$parentcats = get_ancestors($product_cat_id, 'product_cat');
						foreach($parentcats as $parentcat){
							echo $parentcat;
						}*/
						
						
						//echo 'Уровень категории = '.getCategoryLvlById( $cat_id );
						/*
						$level = 0;
						$cat = $obj->parent;
						if ( $cat == 0) {
							echo 'Уровень вложенности'.$level;
						} else {
							$level++;
							echo 'Уровень вложенности'.$level;
							$cat = wp_get_term_taxonomy_parent_id( $cat, 'product_cat' );
							//return getCategoryLvlById( $category, $level );
						}*/
						
						//echo '<hr>';
						// Определяем ID текущей категории
						
						/*
						if ( is_product_category() ) {
							$obj = get_queried_object();
							$cat_id = $obj->term_id;
						}*/
						
						//$cat_parent_id = $obj->parent;
						//echo $cat_id;
						//echo $cat_parent_id;
						//echo get_term( $cat_parent_id )->parent;
						//$cat_next_parent_id = $cat_next_parent_id->parent;
						//echo $cat_next_parent_id;
						//echo $cat_parent_id->parent;
						
						
						
						/*
						if ( is_product_category() ) {
							$level = getCategoryLvlById( $cat_id );
							echo $level;
						}*/
						
						

						/*
						function getCategoryLvlById( $cat_id, $level = 0 ) {
							$cat_parent = get_term( $cat_id );
							$cat_parent_id = $cat_parent->term_id;
							if ( $cat_parent_id == 0 ) {
								return $level;
							} else {
								//$level++;
								//$category = get_category($category->category_parent);
								//return getCategoryLvlById( $cat_id, $level );
							}
						}
						echo getCategoryLvlById( $cat_id ); // Выводим текущий уровень вложенности категории, подставляя id текущей категории 
						*/
						
						
						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();
								
								// Если текущая подкатегория "Готовые кухни", то выводим товары
								if ( is_product_category( array(
									'Готовые кухни',
									'Прямые готовые кухни',
									'Угловые готовые кухни',
									'П-образные готовые кухни',
									'Кухни на заказ',
									'Прямые кухни на заказ',
									'Угловые кухни на заказ',
									'Готовые шкафы',
									'Шкафы на заказ'
								) ) ) {
									wc_get_template_part( 'content', 'product' );
								}
								
								/**
								 * Hook: woocommerce_shop_loop.
								 */
								
								do_action( 'woocommerce_shop_loop' );
								
								/*
								if ( $level < 2 ) {
									wc_get_template_part( 'content', 'product' );
								} else {
									wc_get_template_part( 'content', 'product' );
								}*/
								
								
							}
						}

						woocommerce_product_loop_end();

						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );
					}

					/**
					 * Hook: woocommerce_after_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action( 'woocommerce_after_main_content' );

					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					//do_action( 'woocommerce_sidebar' );

					?>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Portfolio -->
<div id="portfolio-scroll-point" class="scroll-point"></div>
<section class="bg-light pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 py-5">
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
						<a href="https://unistyle-mebel.ru/portfolio/"><button class="btn btn-lg btn-orange ps-3 pe-3">Смотреть все работы</button></a>
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


<section class="bg-white pb-5">
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
<!-- /Archive product cat -->


<?php get_footer( 'shop' ); ?>