<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Efeitos - Questionário - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Efeitos Questionario SegQuestionario Resultado SegResultado">
        
        <?php include 'assets/header.php'; ?>

        <section class="LogoCalc">
            <a href="<? echo $url ?>">
                <? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
            </a>
        </section>
        
        <section class="Sessao1">

            <article class="nivel2">    
                <h2>
                    Resultado
                </h2>

                <div class="WrapperFlex">
                    <div>
                        <p>Sua redução foi de:</p>
                        <p class="DestaqueInternoTopo">4.187 kg CO2 eq</p>
                    </div>
                </div>

                <?php include 'assets/efeitos-segres-bloco-principal.php'; ?>

                <p>
                    Pois é…. a redução <strong>não foi tão expressiva</strong>  quanto poderia ser. Já parou para pensar em se comprometer aos poucos com mais algumas medidas de redução? Ou, para ser carbono <strong>neutro,</strong>  você deve plantar:
                </p>

                <?php include 'assets/efeitos-bloco-rodape.php'; ?>

                <p>
                    Conheça também algumas dicas para melhorar a eficiência energética dentro de casa e poluir menos:
                </p>

                <a class="Btn Btn-Big Btn-Destaque2" href="<? echo $Efeitos_Segundo_Questionario_Resultado_2 ?>">Melhore sua eficiência energética</a>
    

                <h2>
                    Resultado Atual
                </h2>

                <div class="WrapperFlex">
                    <div>
                        <p>Sua redução foi de:</p>
                        <p class="DestaqueInternoTopo">4.187 kg CO2 eq</p>
                    </div>
                </div>

                <?php include 'assets/efeitos-bloco-principal.php'; ?>

                <p>
                    Você emite <strong>abaixo da média</strong>  dos brasileiros, 6,5 tCO2e/ano. Mesmo assim, todos nós precisamos reduzir de 20 a 40% nossas emissões para manter o aumento de temperatura da atmosfera em até 2ºC. Para ser <strong>carbono neutro,</strong>  você deverá plantar um total de:
                </p>

                <?php include 'assets/efeitos-bloco-rodape.php'; ?>

            </article>

        </section>
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(2)').addClass('SessaoAtual');
        </script>

       

    </body>

</html>