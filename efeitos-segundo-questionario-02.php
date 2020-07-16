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
	<body class="Efeitos Questionario SegQuestionario SegQuestionario2">
        
        <?php include 'assets/header.php'; ?>

        <section class="LogoCalc">
            <a href="<? echo $url ?>">
                <? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
            </a>
        </section>
        
        <section class="Sessao1">

            <article class="nivel2">    
                <h2>
                    COMO MELHORAR SUAS EMISSÕES
                </h2>

                <div class="WrapperEmissoesTopo">
                    <div class="BoxEmissoesTopo">
                        <p class="DestaqueInterno Destaque2">Resultado anterior:</p>
                        <div class="BlocoResultado">0.0</div>
                        <p>ton CO2 eq</p>
                    </div>

                    <div class="BoxEmissoesTopo">
                        <p class="DestaqueInterno Destaque2">Redução até agora:</p>
                        <div class="BlocoResultado">0.0</div>
                        <p>ton CO2 eq</p>
                    </div>
                </div>
                
                
                <form action="">
                    <div class="Grupo">

                        <div class="WrapperBlock">
                            <p>Quantos dias da semana você está disposto a reduzir o uso de cada veículo da casa?</p>
                        </div>
                        
                        <div class="WrapperBlock">
                            <p>Carro: </p>                            
                            <input class="Redondo" type="text" name="" id="">
                        </div>

                        <div class="WrapperBlock">
                            <p>Moto: </p>                            
                            <input class="Redondo" type="text" name="" id="">
                        </div>
                        
                    </div>
                </form>

                <div class="WrapperButtons">
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Efeitos_Segundo_Questionario1 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque2" href="<? echo $Efeitos_Segundo_Questionario3 ?>">Próximo</a>
                </div>
    
            </article>

        </section>
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(2)').addClass('SessaoAtual');
        </script>

       

    </body>

</html>