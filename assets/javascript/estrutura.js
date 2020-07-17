	/* 
	Hello, guys!! :)
	JS desenvolvido pela bs.agency em 2020. 

	Façam bom uso :)
*/

jQuery(document).ready(function() {

	// Variáveis:
		var BreakPoint = 1030;
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

	
	// Executando versionamentos
		if(WidthDevice <= 1029) { MobileVersion(); } else { DesktopVersion(); }

		if(WidthDevice <= 1029) { 
			$('.DesktopItem').css('display','none');
			$('.MobileItem').css('display','block');
		} else { 
			$('.DesktopItem').css('display','block');
			$('.MobileItem').css('display','none');			
		}
	
	// Funções executadas apenas na versão Desktop:
		function DesktopVersion() {			
			
			$('.Filtros select').on('mousedown', function(e) {
				e.preventDefault();		
				$('.FiltrosOpen').slideToggle();
				$('#filtros').toggleClass('selectcima');
			 });

		}
	// :Funções executadas apenas na versão Desktop


	// Funções executadas apenas na versão Mobile:
		function MobileVersion() {			
			$('.BackTop').on('click', function(){
				$("html, body").animate({ scrollTop: 0 }, "slow");
			})

			$('.SaibaMais .Wrapper').slick({
				infinite: true,
				slidesToShow: 1,
				fade: false,
				arrows: false,
				cssEase: 'linear',
				centerMode: false,
				adaptiveHeight: false
			});

			$('.Filtros select').on('mousedown', function(e) {
				e.preventDefault();		
				$('.FiltrosOpen').show();
				$('#filtros').toggleClass('selectcima');
				$('.Alterar, .Filtros, #BtnTopo').css('display','none');
				$('.Calculadora3 h2').text('Filtros')
			 });

		}
	// :Funções executadas apenas na versão Mobile


	// Menu:
		function FecharMenu() {
			$('.MenuAberto').removeClass('MenuAberto');
			$('#ClicarForaMenu').hide();
			$('.MenuWrapper').css('right','-100%');
		}

		$('#ClicarForaMenu').click(function() {FecharMenu()});

		$('#AbrirMenu').click(function() {
			if($(this).hasClass('MenuAberto')) {
				FecharMenu();
			} else {
				$(this).addClass('MenuAberto');				
				$('#ClicarForaMenu').show();
				$('.MenuWrapper').css('right','0');
			}
		});

		$('#FecharMenu').click(function() {
			FecharMenu();
		});		
	// :Menu


	// Accordeon
		$(document).ready(function(){
			$('.Accordeon-mini-box-info a').on( 'click', function() {
				$(this).parent().next().slideToggle( 'fast' );
				$(this).next().toggleClass( 'setacima','setabaixo' );					
			})
		});
	// :Accordeon

	
	// FadeIn da página após o carregamento.
		$('body').fadeIn('slow');
	// ScrollTop
	// $('html, body').animate({scrollTop: '0px'}, 600);
	


	// Popup
	if ($('body').hasClass('Calculadora3')) {
		$('.open-popup-link').magnificPopup({			
			type: 'inline',			
			mainClass: 'mfp-fade'
		});
	}
	
	/* Slider Range */
	$( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 1500,
        values: [ 240, 1000],
        slide: function( event, ui ) {
            $( "#amount" ).val( "De " + ui.values[ 0 ] + " litros" + " Até " + ui.values[ 1 ] + " litros" );
        }
    });
    $( "#amount" ).val( "De " + $( "#slider-range" ).slider( "values", 0 ) + " litros" +
        " Até " + $( "#slider-range" ).slider( "values", 1 ) + " litros" );
	
	
	$( "#slider-range2" ).slider({
		range: true,
		min: 0,
		max: 700,
		values: [ 80, 500],
		slide: function( event, ui ) {
			$( "#amount2" ).val( "R$ " + ui.values[ 0 ] + " - R$ " + ui.values[ 1 ] );
		}
    });
	$( "#amount2" ).val( "De R$" + $( "#slider-range2" ).slider( "values", 0 ) +
	" Até R$" + $( "#slider-range2" ).slider( "values", 1 ) );


	$( "#slider-range3" ).slider({
		range: true,
		min: 0,
		max: 7000,
		values: [ 800, 5000],
		slide: function( event, ui ) {
			$( "#amount3" ).val( "R$ " + ui.values[ 0 ] + " - R$ " + ui.values[ 1 ] );
		}
	});
	$( "#amount3" ).val( "De R$" + $( "#slider-range3" ).slider( "values", 0 ) +
	" Até R$" + $( "#slider-range3" ).slider( "values", 1 ) );
	

	$( "#slider-tarifa" ).slider({ range: true, min: 0, max: 100, values: [ 0, 5] });	
	$( "#slider-tarifa2" ).slider({ range: true, min: 0, max: 100, values: [ 0, 20] });
	$( "#slider-tarifa3" ).slider({ range: true, min: 0, max: 100, values: [ 0, 40] });	
	$( "#slider-tarifa4" ).slider({ range: true, min: 0, max: 100, values: [ 0, 60] });	
	$( "#slider-tarifa5" ).slider({ range: true, min: 0, max: 100, values: [ 0, 70] });	
	$( "#slider-tarifa6" ).slider({ range: true, min: 0, max: 100, values: [ 0, 97] });	

	$( "#slider-efeitos" ).slider({ range: true, min: 0, max: 100, values: [ 0, 5] });
	$( "#slider-efeitos2" ).slider({ range: true, min: 0, max: 100, values: [ 0, 20] });
	$( "#slider-efeitos3" ).slider({ range: true, min: 0, max: 100, values: [ 0, 20] });
	$( "#slider-efeitos4" ).slider({ range: true, min: 0, max: 100, values: [ 0, 47] });
	$( "#slider-efeitos5" ).slider({ range: true, min: 0, max: 100, values: [ 0, 74] });
	$( "#slider-efeitos6" ).slider({ range: true, min: 0, max: 100, values: [ 0, 100] });

	if ( $('#slider-efeitos6 .ui-slider-range').css('width') == "622px" ) {
		$('.ui-widget-header').css('border-radius','10px 10px 10px 10px');		
	}


	// Botão de interrogação
	$('.BtnInfo').click( function() {
		$(this).find('.PopupInfo').slideToggle('fast').toggleClass('open');		
	
		if ($('.PopupInfo').hasClass('open')) {
			$('.masktransp').show();
		} else {
			$('.masktransp').hide();			
		}

	});	

	// Clique em alterar
	$('.LinkInfo').click( function() {
		// $(this).find('.PopupInfo').slideToggle('fast').toggleClass('open');	
		$(this).parent().find('.PopupLinkInfo').slideToggle('fast').toggleClass('open');	
	
		if ($('.PopupLinkInfo').hasClass('open')) {
			
			$('.mask').toggle();
		} else {
			$('.mask').hide();			
		}

	});

	// Ver mais informacoes Card
	$('.VerMaisLink').click( function() {
		
		$(this).parent().find('.PopupLinkInfo').slideToggle('fast').toggleClass('open');	
	
		if ($('.PopupLinkInfo').hasClass('open')) {
			
			$(this).parent().find('.mask').toggle();
		} else {
			$(this).parent().find('.mask').hide();			
		}

	});

	
	// TabelaResInscrever
	$('#TabelaResInscrever').click( function() {
		$(this).next().slideToggle('fast').toggleClass('open');
	
		if ($('.PopupInfo').hasClass('open')) {
			$('.masktransp').show();			

			if ( $( '.WrapperResText' ).hasClass('sucesso') ) {
				$('.sucesso').show();				
				$('.Ok').show();
			} else {
				$('.erro').show()
				$('.Ok').show();
			}

		} else {
			$('.masktransp').hide();			
		}

	});
	
	

	// Botao Insira seu proprio produto
	$('#BtnTopo').click( function() {
		
		$('.NaoEncontrou').slideToggle('fast').toggleClass('open');	
	
		if ($('.NaoEncontrou').hasClass('open')) {
			
			$('.maskcinza').toggle();
			$('span').on('click', function() { $('.NaoEncontrou').fadeOut().removeClass('open');  $('.maskcinza').hide() } )

		} else {
			('.maskcinza').hide();			
		}

	});

	$('.BtnTopo').click( function() {
		
		$(window).scrollTop( $('.NaoEncontrou').offset().top);

		$('.NaoEncontrou').slideToggle('fast').toggleClass('open');	
	
		if ($('.NaoEncontrou').hasClass('open')) {
			
			$('.maskcinza').toggle();
			$('span').on('click', function() { $('.NaoEncontrou').fadeOut().removeClass('open');  $('.maskcinza').hide() } )

		} else {
			('.maskcinza').hide();			
		}

	});

	// Máscara
	$('.mask').click( function() {

		if ( $('.PopupInfo').hasClass('open') ) {
						
			$('.PopupInfo').fadeOut().removeClass('open'); 
			$('.mask').toggle()
		
		} 		

		if ( $('.PopupLinkInfo').hasClass('open') ) {
						
			$('.PopupLinkInfo').fadeOut().removeClass('open'); 
			$('.mask').toggle();

			$('span').on('click', function() { $('.PopupLinkInfo').fadeOut().removeClass('open');  $('.mask').hide() } )
		
		} else {
			$('.mask').hide();						
		}

	})

	$('.masktransp').click( function() {

		if ( $('.PopupInfo').hasClass('open') ) {
						
			$('.PopupInfo').fadeOut().removeClass('open'); 
			$('.masktransp').toggle();
		} else {
			$('.masktransp').hide();
		}
	} )

	$('.maskcinza').click( function() {

		if ( $('.NaoEncontrou').hasClass('open') ) {
			
			$('.NaoEncontrou').fadeOut().removeClass('open'); 
			$('.maskcinza').toggle()
		}

	})

	$('.CardInside').parent().find('.mask').click( function() {

		if ( $('.PopupInfo').hasClass('open') ) {
						
			$('.PopupInfo').fadeOut().removeClass('open'); 			
			$('.mask').toggle();
		} else {
			$('.mask').hide();
		}
	}) 		

	


	
	






});