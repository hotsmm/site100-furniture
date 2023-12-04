/* Функция "Прилипало" */
onscroll = function prilipalo() {
	var prokrutka = window.pageYOffset;
	if ( window.screen.width >= 769 ) {
		if ( prokrutka > 50 ) {
			document.getElementById('top-menu-2').classList.add('fixed-top');
			document.getElementById('top-menu-2').style.position = 'fixed';
			document.getElementById('top-menu-2').style.top = 0;
		} else {
			document.getElementById('top-menu-2').classList.remove('fixed-top');
			document.getElementById('top-menu-2').style.position = 'absolute';
			document.getElementById('top-menu-2').style.top = '59px';
		}
	} else {
		document.getElementById('top-menu-2').style.position = '';
		document.getElementById('top-menu-2').style.top = 0;
		document.getElementById('top-menu-2').classList.add('fixed-top');
	}
}


/* Убираем сообщение об успешной отправки */
function modalClose () {
	document.getElementById('background-msg').style.display = 'none';
	document.getElementById('message').style.display = 'none';
	document.getElementById('btn-close').style.display = 'none';
}