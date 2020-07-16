<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Efeitos - Questionário - Resultado - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Efeitos Questionario Resultado">
        
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
                        <p>Sua emissão hoje é de:</p>
                        <p class="DestaqueInternoTopo">358 kg CO2 eq</p>
                    </div>
                </div>
                
                <?php include 'assets/efeitos-bloco-principal.php'; ?>

                <p>Clique abaixo para receber dicas de como reduzir esse dano.</p>

                <a class="Btn Btn-Destaque2 Btn-Medium" href="<? echo $Efeitos_Segundo_Questionario1 ?>">Descubra como melhorar sua pegada!</a>
                   
                <p>
                    Você emite <strong>abaixo da média</strong>  dos brasileiros, 6,5 tCO2e/ano. Mesmo assim, todos nós precisamos reduzir de 20 a 40% nossas emissões para manter o aumento de temperatura da atmosfera em até 2ºC. Para ser <strong>carbono neutro,</strong>  você deverá plantar um total de:
                </p>
                
                <a class="Btn Btn-Default Btn-Destaque2" href="<? echo $Efeitos_Segundo_Questionario1 ?>">Próximo</a>
                
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