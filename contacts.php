<?php
	
	/*
		Template Name: Контакты
		Template Post Type: page
	*/
	
	include 'header.php';
	
?>


<!-- Header -->
<header id="header-contacts" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start">
			<div class="col-lg-10 py-5">
				<h1>Контакты</h1>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<section class="pt-4 pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs pb-3">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col mb-5">
				
				<!--
				<h2 class="text-center mb-3">Контакты</h2>
				<div class="title-line mb-4"></div>
				-->
				
				<ul class="nav justify-content-lg-center">
					<li class="nav-item mb-3 mb-lg-0 me-3 text-dark">
						<div class="contacts-li-float-left text-md-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location.png"></div>
						<div class="contacts-li-float-right">
							Санкт-Петербург, 16-я линия В.О. д 7
						</div>
						<div style="clear: both;"></div>	
					</li>
					<li class="nav-item mb-3 mb-lg-0 me-3 text-dark">
						<div class="contacts-li-float-left text-md-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png">
						</div>
						<div class="contacts-li-float-right">
							<strong>Оператор:</strong> ПН-ВС с 9:00 до 21:00
							<br>
							<strong>Замерщик:</strong> ПН-ВС 9:00 до 21:00
							<br>
							<strong>Офис:</strong> ПН-ПТ с 9:00 до 18:00
						</div>
						<div style="clear: both;"></div>
					</li>
					
					<li class="nav-item mb-3 mb-lg-0 me-3">
						<a href="tel:+78123362245" class="text-dark text-decoration-none">
							<div class="contacts-li-float-left text-md-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobail-phone-ico.png">
							</div>
							<div class="contacts-li-float-right">
								+7 (812) 336-22-45
							</div>
							<div style="clear: both;"></div>
						</a>
					</li>
					<li class="nav-item">
						<a href="mailto:unistyle-mebel@bk.ru" class="text-dark text-decoration-none">
							<div class="contacts-li-float-left text-md-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png">
							</div>
							<div class="contacts-li-float-right">
								unistyle-mebel@bk.ru
							</div>
							<div style="clear: both;"></div>
						</a>
					</li>
				</ul>
				
				<!--div class="row justify-content-center text-center">
					<div class="col pt-3">
						<a class="ico-button pe-2" href="whatsapp://send?phone=+79112365102"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg"></a>
						<a class="ico-button pe-2" href="tg://resolve?domain=unistyle_spb"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg"></a>
						<!--a class="ico-button pe-2" href="#"><img src="img/ico/inst-ico.png"></a>
						<a class="ico-button" href="#"><img src="img/ico/vk-ico.png"></a--
					</div>
				</div-->
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div id="map2"></div>
			</div>
		</div>
	</div>
</section>


<!-- API Yandex Map -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
	// Функция ymaps.ready() будет вызвана, когда
	// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
	ymaps.ready(init);
	/* На разную ширину экрана разное приближение карты */
	var screenWidth = document.documentElement.clientWidth;
	if ( screenWidth > 1000 ) {
		var center = [59.9345,30.27268161904903];
		var zoom = 17;
	} else {
		var center = [59.9345,30.27268161904903];
		var zoom = 15;
	}
	
	function init() {
		// Создание карты.
		var myMap = new ymaps.Map("map2", {
			// Координаты центра карты.
			// Порядок по умолчанию: «широта, долгота».
			// Чтобы не определять координаты центра карты вручную,
			// воспользуйтесь инструментом Определение координат.
			center: center, // Map center
			// Уровень масштабирования. Допустимые значения:
			// от 0 (весь мир) до 19.
			zoom: zoom
		});
		var myPlacemark = new ymaps.Placemark( [59.934061343644714,30.27268161904903], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/placemark.webp',
			iconImageSize: [286, 246],
			iconImageOffset: [-143, -230]
		});
		myMap.behaviors.disable('scrollZoom'); // Disable zoom on scroll
		//myMap.behaviors.disable('multiTouch'); // Disable zoom
		//myMap.behaviors.disable('drag'); // Disable drag
		myMap.geoObjects.add(myPlacemark);
	}
</script>
<!-- /API Yandex Map -->
	
		
<?php include 'footer.php'; ?>