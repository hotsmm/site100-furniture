<?php
	session_start();
	$win = "true";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mes = $_POST['mes'];
	mail("vasilyev-r@mail.ru, info@unistyle-spb.ru, unistyle-spb@yandex.ru, fofashkovivan@gmail.com", "Вопрос с сайта unistyle-spb.ru", "
		Клиент: ".$name."\n
		Email: ".$email."\n
		Вопрос: ".$mes."\n
	" );
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Унистайл». В&#160;ближайшее время с Вами свяжется наш специалист.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>