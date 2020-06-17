	/* 
	Hello, guys!! :)
	JS desenvolvido pela bs.agency em 2020. 

	Façam bom uso :)
*/

jQuery(document).ready(function() {

	// Variáveis:
		var BreakPoint = 1050;
		var WidthDevice = $(window).width();
		var heightDevice = $(window).height();
		var PosicaoScrollAtual = $(window).scrollTop();

	// :Variáveis

	// Reload no resize da página:
		var screen = '';
		if (WidthDevice < BreakPoint) {
			screen = 'mobile';
		} else if (WidthDevice > BreakPoint) { 
			screen = 'desktop';
		}

		$(window).resize(function(){
			var cur_width = $(window).width();
			if(cur_width < BreakPoint && screen == 'desktop'){
				location.reload(); 
			} else if(cur_width > BreakPoint && screen == 'mobile'){
				location.reload();
			}
		});
	// :Reload no resize da página

	// Decodificando SVG:
		$('img.svg').each(function() {
			var $img = $(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');
			$.get(imgURL, function(data) { var $svg = $(data).find('svg'); 
			if(typeof imgID !== 'undefined') {$svg = $svg.attr('id', imgID);} 
			if(typeof imgClass !== 'undefined') {$svg = $svg.attr('class', imgClass+' replaced-svg');}$svg = $svg.removeAttr('xmlns:a'); 
			if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))} $img.replaceWith($svg);}, 'xml');
		});
	// :Decodificando SVG

	// Verificando Android ou IOS:
		function getMobileOperatingSystem() {
			var userAgent = navigator.userAgent || navigator.vendor || window.opera;
			if(/windows phone/i.test(userAgent)) { // Windows Phone
				$('.iOS').remove();
			} else if(/android/i.test(userAgent)) { // Android
				$('.iOS').remove();
			} else if(/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) { // iOS
				$('.Android').remove();
			}
		}getMobileOperatingSystem();
	// :Verificando Android ou IOS

	// Funções executadas apenas na versão Desktop:
		function DesktopVersion() {
			
			$('.TerceiraSessaoWrapper').slick({
				infinite: false,
				slidesToShow: 4,
				fade: false,
				arrows: true,
				prevArrow: '<button type="button" class="sobreprev"></button>',
				nextArrow: '<button type="button" class="sobrenext"></button>',
				cssEase: 'linear'
			});

		}
	// :Funções executadas apenas na versão Desktop


	// Menu
		function FecharMenu() {
			$('.MenuAberto').removeClass('MenuAberto');
			$('#ClicarForaMenu').hide();
		}

		$('#ClicarForaMenu').click(function() {FecharMenu()});

		$('#AbrirMenu').click(function() {
			if($(this).hasClass('MenuAberto')) {
				FecharMenu();
			} else {
				$(this).addClass('MenuAberto');
				$('nav').addClass('MenuAberto');
				$('#ClicarForaMenu').show();
			}
		});

		// Colocando BG no header
		$(window).scroll(function(event) {
			PosicaoScrollAtual = $(window).scrollTop();

			if(PosicaoScrollAtual <= heightDevice/4) {
				$('.bg').removeClass('bg');
			} else {
				$('header').addClass('bg');
			}
		});

	// Funções executadas apenas na versão Mobile:
		function MobileVersion() {			

		}
	// :Funções executadas apenas na versão Mobile

	// Executando versionamentos
		if(WidthDevice <= 1029) { MobileVersion(); } else { DesktopVersion(); }

		if(WidthDevice <= 1029) { 
			$('.DesktopItem').css('display','none');
			$('.MobileItem').css('display','block');
		} else { 
			$('.DesktopItem').css('display','block');
			$('.MobileItem').css('display','none');
			$('.Mobile').css('display','none');
		}

		if(WidthDevice <= 1029 && WidthDevice >=450) {
			$('.Mobile').css('display','none');
			$('.TabletItem').css('display','block');			
		} else {			
			$('.TabletItem').css('display','none');			
		}


		if(WidthDevice <= 450) {
			$('.DesktopText').css('display','none');

			if($('body').hasClass('Expertises')) { 
				$('.Slider').slick({
					infinite: false,
					slidesToShow: 1,
					fade: false,
					arrows: true,
					cssEase: 'linear'
				});
			}

			$('.Boxes').slick({
				infinite: true,
				slidesToShow: 1,
				fade: false,
				arrows: false,
				cssEase: 'linear',
				centerMode: true,				
				adaptiveHeight: false				
			});	

			$('.TerceiraSessaoWrapper').slick({
				infinite: false,
				slidesToShow: 2,
				rows: 2,
				fade: false,
				arrows: false,
				prevArrow: '<button type="button" class="sobreprev"></button>',
				nextArrow: '<button type="button" class="sobrenext"></button>',
				cssEase: 'linear'				
			});

		}

		if(WidthDevice >= 450 && WidthDevice <= 1029 ) {
			
			$('.TerceiraSessaoWrapper').slick({
				infinite: false,
				slidesToShow: 2,
				rows: 2,
				fade: false,
				arrows: true,
				prevArrow: '<button type="button" class="sobreprev"></button>',
				nextArrow: '<button type="button" class="sobrenext"></button>',
				cssEase: 'linear'
			});

		}
		
		
	// FadeIn da página após o carregamento.
		$('body').fadeIn('slow');
	// ScrollTop
		// $('html, body').animate({scrollTop: '0px'}, 600);


	// Executando funções em páginas específicas
		if($('body').hasClass('Home')) { // Página Inicial
			$('#SliderHome').slick({
				infinite: true,
				slidesToShow: 1,
				fade: true,
				cssEase: 'ease-in-out',
				speed: 2000,				
				autoplay: true,
  				autoplaySpeed: 4000
			});

		} else if($('body').hasClass('Home')) { // Página Dois
			//
		}
		else {}

		if ($('body').hasClass('Sobre')) {
			$('.popup-issuu').magnificPopup({
				// disableOn: 700,
				type: 'iframe',
				mainClass: 'mfp-fade'
			});
		}
		
		if (WidthDevice < 450 && $('div').hasClass('ChamaContato')) {
			$('.esq > .Mobile').addClass('MobileItem');
		}

});