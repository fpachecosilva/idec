<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Efeitos - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Efeitos">
		
        <?php include 'assets/header.php'; ?>

        <section class="Banner">
			<article>				
                <a href="<? echo $url ?>">
					<? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
				</a>
                <h1>Descubra sua pegada de carbono! </h1>
			</article>			
        </section>
        
        <section class="Sessao1">
            <article class="nivel3">
                <h2>
                    Nosso estilo de vida tem 
                    impacto no clima 
                </h2>

                <a href="<? echo $Efeitos_Questionario1 ?>" class="Btn Btn-Destaque2 Btn-Big">Calcule suas emissões de gases do efeito estufa</a>

                <p>
                    Dependendo das escolhas de consumo que fazemos contribuímos mais ou menos com a emissão de gases do efeito estufa. Com a calculadora do Idec, você estima essa quantidade (também conhecida como pegada de carbono) reflete sobre suas escolhas e recebe dicas de como reduzir suas emissões.
                </p>
            </article>
        </section>


        <section class="Sessao2">
            <article class="nivel2">
                <p class="DestaqueInterno Destaque2">Malefícios do carbono</p>
                <p>Diversas ações humanas, como:</p>

                <div class="WrapperBoxesMaleficios">

                    <div class="BoxMaleficios">
                        <div class="Box">
                            <div>
                                <img src="<? echo $images ?>efeitos-maleficios-box-1.svg" alt="">
                                <p>Queima de combustíveis fósseis </p>
                            </div>
                            <div>
                                <img src="<? echo $images ?>efeitos-maleficios-box-2.svg" alt="">
                                <p>Desmatamento das florestas</p>
                            </div>
                        </div>
                    </div>
    
                    <img class="ImgSeparadorMaleficios" src="<? echo $images ?>efeitos-maleficios-box-divisor-1.svg" alt="">
    
                    <div class="BoxMaleficios">
                        <div class="Box">
                            <img src="<? echo $images ?>efeitos-maleficios-box-3.svg" alt="">
                            <p>Aumentam muito a quantidade de emissões de gás carbônico na atmosfera</p>
                        </div>
                    </div>
    
                    <img class="ImgSeparadorMaleficios" src="<? echo $images ?>efeitos-maleficios-box-divisor-2.svg" alt="">
    
                    <div class="BoxMaleficios">
                        <div class="Box">
                            <img src="<? echo $images ?>efeitos-maleficios-box-4.svg" alt="">
                            <p>Com isso, intensifica-se o efeito estufa, gerando um superaquecimento do planeta.</p>
                        </div>
                    </div>

                </div>
                
            </article>
        </section>
       

        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(1)').addClass('SessaoAtual');
        </script>
    </body>

</html>