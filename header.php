<?php
	session_start();
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$_SESSION['display'] = "block";
	} else { $_SESSION['display'] = "none"; }
?>
<!doctype html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- Style CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">

		<title>Мебель «Унистайл»</title>
		
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
			k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(94109819, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
			});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/94109819" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>
	<body>
		
		
		<nav class="navbar navbar-expand-xl navbar-light bg-light d-none d-lg-block py-0" style="border-bottom: 1px solid #d7d7d7">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						<li class="nav-item me-3">
							<a class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/location.png" class="me-2">Санкт-Петербург</a>
						</li>
						<li class="nav-item me-3">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link">Ежедневно<br>с 9:00 до 20:00</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-3">
							<a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#measurerModal">
								<div class="row align-items-center">
									<div class="col-2">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vyzov-na-zamer-ico.png" style="position: relative; left: 5px;">
									</div>
									<div class="col-10" id="vyzov-na-zamer-top-menu-line-height">
										<span >Бесплатный вызвов<br>замерщика</span>
									</div>
								</div>
							</a>
						</li>
						<li class="nav-item me-3">
							<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.png" class="me-2">
								Обратный звонок
							</a>
						</li>
						<li class="nav-item me-3">
							<a id="top-menu-tel" class="nav-link" href="tel:+78123362245"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobail-phone-ico.png" class="me-2">+7 (812) 336-22-45</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="whatsapp://send?phone=+79818173666"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
						</li>
						<!--li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
						</>
						<li class="nav-item">
							<a class="nav-link ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li-->
					</ul>
				</div>
			</div>
		</nav>
		<nav id="top-menu-2" class="navbar navbar-expand-xl navbar-light bg-white shadow py-2">
			<div class="container">
				<a class="navbar-brand" href="https://unistyle-mebel.ru"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.svg"></a>
				<div class="d-xl-none">
					<a class="top-menu-tel pt-1 pb-0" style="font-size: 14px;" href="tel:+78123362245">+7 (812) 336-22-45</a>
					<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
						<img src="https://unistyle-spb.ru/wp-content/themes/unistyle-spb/img/ico/clock-ico.webp" style="width: 10px; position: relative; top: -1px;" class="me-1">Пн-Вс 9:00-21:00
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="main-menu">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '
								<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-xl-none">
										<a class="nav-link active" href="" data-bs-toggle="modal" data-bs-target="#measurerModal">Бесплатный вызов замерщика</a>
									</li>
									<li class="nav-item d-xl-none">
										<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="https://unistyle-spb.ru/wp-content/themes/unistyle-spb/img/ico/location.webp" style="width: 10px;" class="me-1">Санкт-Петербург
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-0" href="tel:+78123362245">+7 (812) 336-22-45</a>
										<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="https://unistyle-spb.ru/wp-content/themes/unistyle-spb/img/ico/clock-ico.webp" style="width: 10px; position: relative; top: -1px;" class="me-1">Ежедневно с 9:00 до 21:00
										</div>
									</li>
									<li class="nav-item d-xl-none pt-3">
										<a class="ico-button pe-2" href="whatsapp://send?phone=+79818173666"><img src="'.get_template_directory_uri().'/img/ico/whatsapp-ico.png"></a>
										<!--a class="ico-button pe-2" href="tg://resolve?domain=right_kate"><img src="'.get_template_directory_uri().'/img/ico/telegram-ico.png"></a-->
										<!--a class="ico-button pe-2" href="#"><img src="img/ico/inst-ico.png"></a-->
										<!--a class="ico-button" href="#"><img src="/img/ico/vk-ico.png"></a-->
									</li>
									<!-- End mobile menu -->
								</ul>
							',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
					?>
				</div>
			</div>
		</nav>