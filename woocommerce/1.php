<?php
/**
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

//add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );


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
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<?php //dynamic_sidebar( 'wsidebar-1' ); ?>


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
				<div class="title-line mb-3 mb-md-4"></div>
				<!--div class="nav-scroller mb-0 mb-md-4" id="navbarSupportedContent2">
					<!--ul class="nav justify-content-md-center d-flex m-auto">
						<?php
							
							/* Определяем текущую категорию */
							$obj = get_queried_object(); // Определяем данные текущего объекта
							$cat_name = $obj->name; // Определяем название текущей категории
							// echo $cat_name; // Выводим название текущей категории
							$cat_id = $obj->term_id; // Определяем ID текущей категории
							//echo $cat_id; // Выводим ID текущей категории
							
							
							/* Другой способ определить дочерние категории
							$term_id     = $cat_id; // get_queried_object()->term_id; - ID текущей рубрики (динамически)
							$tax_name    = 'product_cat';
							$term_childs = get_term_children( $term_id, $tax_name );
							echo '<ul>';
							foreach ( $term_childs as $child ) {

								$term = get_term_by( 'id', $child, $tax_name );

								echo '<li><a href="' . get_term_link( $term ) . '">' . esc_html( $term->name ) . '</a></li>';
							}
							echo '</ul>';
							*/
							
							
							/* Опредеяем дочерние категории */
							$args = array(
								'taxonomy' => 'product_cat',
								'get' => 'all',
								'parent'   => 18
							);
							$categories = get_categories($args);
						?>
							<li class="nav-item">
								<a class="nav-link ps-0 active" aria-current="page" href="https://сайт100.рф/unistyle-mebel/product-category/кухни/готовые-кухни/">Все кухни</a>
							</li>
							
						<?php
							foreach ($categories as $category) { ?>
								<li class="nav-item d-none d-xl-inline">
									<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo get_term_link($category->term_id); ?>"><?php echo $category->name; ?></a>
								</li>
							<?php }
						?>
						<!--li class="nav-item">
							<a class="nav-link active ps-0" aria-current="page" href="archive-product.html">Все кухни</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">Прямые</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">Угловые</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">П-образные</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">С барной стойкой</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link pe-0" href="archive-product.html">С островком</a>
						</li--
						
					</ul>
				</div-->
				
				<!-- Готовые кухни -->
				<div class="nav-scroller mb-0 mb-md-4" id="navbarSupportedContent2">
					<ul class="nav justify-content-md-center d-flex m-auto">
						<li class="nav-item">
							<a class="nav-link ps-0<?php if ( isset( $_GET[ 'готовые-кухни' ] ) ) { echo ' active'; }?>" href="archive-product.html">Все кухни</a> <!--aria-current="page"-->
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">Прямые</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">Угловые</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">П-образные</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">С барной стойкой</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link pe-0" href="archive-product.html">С островком</a>
						</li>
					</ul>
				</div>
				<div class="d-md-none text-center mb-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/left-right-finger.png" style="opacity: 1; max-width: 25px;">
				</div>
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

						//woocommerce_product_loop_start();
						
						
						
						
						/**/
						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();
								
								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action( 'woocommerce_shop_loop' );
								
								wc_get_template_part( 'content', 'product' );
								
							}
						}

						//woocommerce_product_loop_end();

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
<!-- /Archive product cat -->


<?php get_footer( 'shop' ); ?>