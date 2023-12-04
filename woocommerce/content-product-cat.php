<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



?>

<div <?php wc_product_cat_class( 'col-md-6 mb-5 project-entry', $category ); ?>>
	<?php
	/**
	 * The woocommerce_before_subcategory hook.
	 *
	 * @hooked woocommerce_template_loop_category_link_open - 10
	 */
	do_action( 'woocommerce_before_subcategory', $category );
	echo '<div class="figure rounded shadow">';

	/**
	 * The woocommerce_before_subcategory_title hook.
	 *
	 * @hooked woocommerce_subcategory_thumbnail - 10
	 */
	do_action( 'woocommerce_before_subcategory_title', $category );
	echo '</div>';

	/**
	 * The woocommerce_shop_loop_subcategory_title hook.
	 *
	 * @hooked woocommerce_template_loop_category_title - 10
	 */
	do_action( 'woocommerce_shop_loop_subcategory_title', $category );

	/**
	 * The woocommerce_after_subcategory_title hook.
	 */
	
	do_action( 'woocommerce_after_subcategory_title', $category );
	
	
	// Определяем минимальную цену товара
	// Получаем название текущей категории
	$cat_name = $category->name;
	$query = new WP_Query( array(
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field'    => 'name', // Поле, по которому ищем термин
				'terms'    => $cat_name
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
	
	
	
	?>
	<div class="row align-items-center">
		<!--div class="col mb-3 mb-lg-0">
			<span class="price">от <?php echo $min_price; ?> руб</span>
		</div-->
		<div class="col"><!-- text-lg-end -->
			<button type="button" class="btn btn-orange" style="width: 175px;">Подробнее</button>
		</div>
	</div>
	<?php
	/**
	 * The woocommerce_after_subcategory hook.
	 *
	 * @hooked woocommerce_template_loop_category_link_close - 10
	 */
	do_action( 'woocommerce_after_subcategory', $category );
	?>
</div>


<!--div class="col-md-6 mb-5 project-entry">
	<a href="https://unistyle-mebel.ru/product-category/%d0%ba%d1%83%d1%85%d0%bd%d0%b8-%d0%bd%d0%b0-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7/">
		<div class="figure rounded shadow">
			<img src="https://unistyle-mebel.ru/wp-content/uploads/kitchen-zitti.jpg" class="img-fluid">
		</div>
	</a>
	<h3 class="mb-3">Кухни на заказ</h3>
	<div class="row align-items-center">
		<div class="col mb-3 mb-lg-0">
			<span class="price">от 35 000 руб</span>
		</div>
		<div class="col text-lg-end">
			<a href="https://unistyle-mebel.ru/product-category/%d0%ba%d1%83%d1%85%d0%bd%d0%b8-%d0%bd%d0%b0-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7/" type="button" class="btn btn-orange" style="width: 175px;">Подробнее</a>
		</div>
	</div>
</div>
<div class="col-md-6 mb-5 project-entry">
	<a href="https://unistyle-mebel.ru/product-category/%d0%b3%d0%be%d1%82%d0%be%d0%b2%d1%8b%d0%b5-%d0%ba%d1%83%d1%85%d0%bd%d0%b8/">
		<div class="figure rounded shadow">
			<img src="https://unistyle-mebel.ru/wp-content/uploads/kitchen-order-brik.jpg" class="img-fluid">
		</div>
	</a>
	<h3 class="mb-3">Готовые кухни</h3>
	<div class="row align-items-center">
		<div class="col mb-3 mb-lg-0">
			<span class="price">от 24 960 руб</span>
		</div>
		<div class="col text-lg-end">
			<a href="https://unistyle-mebel.ru/product-category/%d0%b3%d0%be%d1%82%d0%be%d0%b2%d1%8b%d0%b5-%d0%ba%d1%83%d1%85%d0%bd%d0%b8/" type="button" class="btn btn-orange" style="width: 175px;">Подробнее</a>
		</div>
	</div>
</div>
<div class="col-md-6 mb-5 project-entry">
	<a href="https://unistyle-mebel.ru/product-category/%d1%88%d0%ba%d0%b0%d1%84%d1%8b-%d0%bd%d0%b0-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7/">
		<div class="figure rounded shadow">
			<img src="https://unistyle-mebel.ru/wp-content/uploads/shkaf-integra-2-1.jpg" class="img-fluid">
		</div>
	</a>
	<h3 class="mb-3">Шкафы на заказ</h3>
	<div class="row align-items-center">
		<div class="col mb-3 mb-lg-0">
			<span class="price">от 30000 руб</span>
		</div>
		<div class="col text-lg-end">
			<a href="https://unistyle-mebel.ru/product-category/%d1%88%d0%ba%d0%b0%d1%84%d1%8b-%d0%bd%d0%b0-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7/" type="button" class="btn btn-orange" style="width: 175px;">Подробнее</a>
		</div>
	</div>
</div>
<div class="col-md-6 mb-5 project-entry">
	<a href="https://unistyle-mebel.ru/product-category/%d0%b3%d0%be%d1%82%d0%be%d0%b2%d1%8b%d0%b5-%d1%88%d0%ba%d0%b0%d1%84%d1%8b/">
		<div class="figure rounded shadow">
			<img src="https://unistyle-mebel.ru/wp-content/uploads/kitchen-order-2.jpg" class="img-fluid">
		</div>
	</a>
	<h3 class="mb-3">Готовые шкафы</h3>
	<div class="row align-items-center">
		<div class="col mb-3 mb-lg-0">
			<span class="price">от 22 400 руб</span>
		</div>
		<div class="col text-lg-end">
			<a href="https://unistyle-mebel.ru/product-category/%d0%b3%d0%be%d1%82%d0%be%d0%b2%d1%8b%d0%b5-%d1%88%d0%ba%d0%b0%d1%84%d1%8b/" type="button" class="btn btn-orange" style="width: 175px;">Подробнее</a>
		</div>
	</div>
</div-->
				


<!--div class="col-md-4 mb-5 project-entry">
	<a href="archive-kitchen-cat.html">
		<div class="figure rounded shadow">
			<img src="img/product-cat-1.jpg" class="img-fluid">
		</div>
	</a>
	<h3 class="mb-3">Кухни</h3>
	<div class="row align-items-center">
		<div class="col mb-3 mb-lg-0">
			<span class="price">от 41 500 руб</span>
		</div>
		<div class="col text-lg-end">
			<button type="button" class="btn btn-orange" style="width: 175px;">Подробнее</button>
		</div>
	</div>
</div>
<div class="col-md-4 mb-5 project-entry">
	<a href="archive-kitchen-cat.html">
		<div class="figure rounded shadow">
			<img src="img/product-cat-2.jpg" class="img-fluid">
		</div>
	</a>
	<h3 class="mb-3">Шкафы-купе и гардеробные</h3>
	<div class="row align-items-center">
		<div class="col mb-3 mb-lg-0">
			<span class="price">от 31 500 руб</span>
		</div>
		<div class="col text-lg-end">
			<button type="button" class="btn btn-orange" style="width: 175px;">Подробнее</button>
		</div>
	</div>
</div>
<div class="col-md-4 mb-5 project-entry">
	<a href="archive-kitchen-cat.html">
		<div class="figure rounded shadow">
			<img src="img/product-cat-3.jpg" class="img-fluid">
		</div>
	</a>
	<h3 class="mb-3">Корпусная мебель</h3>
	<div class="row align-items-center">
		<div class="col mb-3 mb-lg-0">
			<span class="price">от 15 500 руб</span>
		</div>
		<div class="col text-lg-end">
			<button type="button" class="btn btn-orange" style="width: 175px;">Подробнее</button>
		</div>
	</div>
</div-->
