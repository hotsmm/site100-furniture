<?php
	
	/*
		Template Name: Наши работы 1 (архив)
		С ОТДЕЛЬНОЙ СТРАНИЦЕЙ для каждого портфолио
		Template Post Type: portfolio
	*/
	
	include 'header.php';
	
?>
		
		
<!-- Header -->
<header id="archive-portfolio-header" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col py-5">
				<h1 class="woocommerce-products-header__title page-title mb-3">Наши работы 1</h1>
				<p class="home-description mb-0">Представлены фото выполненных работ, установленные нашими монтажниками. Собственное производство в Санкт-Петербурге. Делаем кухни и шкафы любого размера и конфигурации. Европейская фурнитура.</p>
				<!--button type="button" class="btn btn-lg btn-orange mt-4">Вызвать замерщика</button-->
				<button type="button" class="btn btn-lg btn-orange mt-3 mt-md-4" data-bs-toggle="modal" data-bs-target="#measurerModal" style="width: 200px;">Вызвать дизайнера</button>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Portfolio -->
<section class="pt-4 pb-5">
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
				<h2 class="text-center mb-3">Наши работы</h2>
				<div class="title-line mb-5"></div>
				<div class="row">
					<?php
						
						/*
						$query = new WP_Query( array(
							'post_type' => 'portfolio'
						) );
						while ( $query->have_posts() ) { $query->the_post(); ?>
							<div class="col-md-6 mb-5 project-entry">
								<a href="<?php echo get_permalink(); ?>">
									<div class="figure rounded shadow" style="width: 100%; height: 375px; overflow: hidden;">
										<img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class="img-fluid" loading="lazy" style="width: 100%; height: 100%; o-object-fit: cover; object-fit: cover; object-position: center;">
									</div>
								</a>
								<h3 class="mb-4"><?php the_title(); ?></h3>
								<!--a href="<?php echo get_permalink(); ?>" type="button" class="btn btn-orange">Подробнее</a-->
							</div>
						<?php }
						*/
						
						while( have_posts()) : the_post(); ?>
						
							<div class="col-md-6 mb-5 project-entry">
								<a href="<?php echo get_permalink(); ?>">
									<div class="figure rounded shadow" style="width: 100%; height: 375px; overflow: hidden;">
										<img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class="img-fluid" loading="lazy" style="width: 100%; height: 100%; o-object-fit: cover; object-fit: cover; object-position: center;">
									</div>
								</a>
								<h3 class="mb-4"><?php the_title(); ?></h3>
								<!--a href="<?php echo get_permalink(); ?>" type="button" class="btn btn-orange">Подробнее</a-->
							</div>
						
						<?php endwhile;

						
						
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio -->


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