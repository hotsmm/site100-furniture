<?php
	
	/*
		Template Name: Наши работы
		Template Post Type: portfolio
	*/
	
	include 'header.php';
	
?>
		
		
<!-- Header -->
<header id="archive-portfolio-header">
	<div class="container">
		<div class="row align-items-center text-start">
			<div class="col-lg-10 py-5">
				<h1 class="mb-3">Наши работы</h1>
				<!--p class="home-description mb-0">Разрабатываем ежемесячные промо-программы. Срок изготовления 2 дня. Гарантия 2 года.</p-->
				<button type="button" class="btn btn-lg btn-orange mt-4">Вызвать замерщика</button>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Actions -->
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

				<div class="row justify-content-center">
					<div class="col-md-8 mb-3 mb-md-0">
						<div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-indicators" style="bottom: 5%;">
								<?php
									for ( $i=1; $i<=9; $i++ ) {
										if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
											<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="<?php echo $i-1; ?>" <?php if ( $i == 1 ) echo ' class="active"'; ?> aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
										<?php }
									}
								?>
							</div>
							<div class="carousel-inner">
								<?php
									for ( $i=1; $i<=9; $i++ ) {
										if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
											<div class="carousel-item mb-4 <?php if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="100000">
												<a onClick="galleryOn('num-<?php echo $i; ?>');">	
													<!--div class="light" style="position: relative;"-->
														<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="shadow rounded" alt="..." loading="lazy">
														<div class="magnifier" style="position: absolute; background: url(https://gyard.ru/wp-content/themes/houses-construction/images/icons/private-eye-magnifying-glass.png) no-repeat center; top: 0; bottom: 0; left: 0; right: 0;">
														</div>
													<!--/div-->
												</a>
											</div>
										<?php }
									}
								?>	
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"  data-bs-slide="prev">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-left.png">
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"  data-bs-slide="next">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-right.png">
							</button>
						</div>
					</div>
					<div class="col-md-4">
						<?php
							while ( have_posts() ) { the_post(); ?>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
							<?php }
						?>
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


<!-- Галерея -->
<div id="gallery" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">

	<div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;" data-interval="false" data-bs-interval="999999999">
		<div class="carousel-indicators">
			<?php
				for ( $j=1; $j<=9; $j++ ) {
					if ( get_post_meta($post->ID, '_img-'.$j ) ) { ?>
						<button id="ind<?php echo $j-1; ?>" class="carouselIndicator carouselIndicator-2" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="<?php echo $j-1; ?>" <?php //if () { echo ' class="active"'; } ?> aria-current="true" aria-label="Slide <?php echo $j; ?>"></button>
					<?php }
				}
			?>
			
			
			
			<!--button id="ind0" class="carouselIndicator carouselIndicator-2" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button id="ind1" class="carouselIndicator carouselIndicator-2" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="ind2" class="carouselIndicator carouselIndicator-2" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button-->
		
		
		</div>
		<div class="carousel-inner h-100">
			<?php
				for ( $j=1; $j<=9; $j++ ) {
					if ( get_post_meta($post->ID, '_img-'.$j ) ) { ?>
						
						<!--div class="carousel-item <?php if ( $j == 1 ) echo ' active'; ?>">
							<a href="#" onClick="galleryOn('num-<?php echo $j; ?>');">	
								<div class="light" style="position: relative;">
									<img src="<?php echo get_post_meta($post->ID, '_img-'.$j )[0]; ?>" class="d-block w-100" alt="...">
									<div class="magnifier" style="position: absolute; background: url(https://gyard.ru/wp-content/themes/houses-construction/images/icons/private-eye-magnifying-glass.png) no-repeat center; top: 0; bottom: 0; left: 0; right: 0;">
									</div>
								</div>
							</a>
						</div-->
						
						<div id="item<?php echo ($j-1); ?>" class="carousel-item carousel-item-2 h-100">
							<div class="row align-items-center h-100">
								<div class="col text-center">
									<img src="<?php echo get_post_meta($post->ID, '_img-'.$j )[0]; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
								</div>
							</div>
						</div>
					<?php }
				}
			?>
			
			
			
			<!--div id="item1" class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="img/portfolio-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
					</div>
				</div>
			</div>
			<div id="item2" class="carousel-item carousel-item-2 h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="img/portfolio-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
					</div>
				</div>
			</div-->

			
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
	</div><!-- End id="carouselExampleIndicators" -->
</div>

<script>
	function galleryOn(gallery) {
		document.getElementById('gallery').style.display = 'block';
		document.getElementById('carouselExampleIndicators3').style.display = 'block';
		<?php
			for ( $j=1; $j<=9; $j++ ) {
				if ( get_post_meta($post->ID, '_img-'.$j ) ) { ?>
					if ( gallery == <?php echo '"num-'.$j.'"'; ?> ) {
						document.getElementById(<?php echo '"item'.($j-1).'"'; ?>).classList.add("active");
						document.getElementById(<?php echo '"ind'.($j-1).'"'; ?>).classList.add("active");
					}
				<?php }
			}
		?>
		
		/*if ( gallery == "num-0" ) {
			document.getElementById("item0").classList.add("active");
			document.getElementById("ind0").classList.add("active");
		}if ( gallery == "num-1" ) {
			document.getElementById("item1").classList.add("active");
			document.getElementById("ind1").classList.add("active");
		}if ( gallery == "num-2" ) {
			document.getElementById("item2").classList.add("active");
			document.getElementById("ind2").classList.add("active");
		} */
		
	}

	/* Кнопка закрытия галереи */
	function closeGallery() {
		document.getElementById('gallery').style.display = 'none';
		document.getElementById('carouselExampleIndicators3').style.display = 'none';
		
		// All classes active delete
		var elements = document.getElementsByClassName("carousel-item-2");
		for (var i = 0; i < elements.length; i++) {
			elements[i].classList.remove("active");
		}
		var elements2 = document.getElementsByClassName("carouselIndicator-2");
		for (var i = 0; i < elements2.length; i++) {
			elements2[i].classList.remove("active");
		}
	}
</script>
		
		
<?php include 'footer.php'; ?>