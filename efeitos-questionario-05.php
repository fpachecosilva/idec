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
	<body class="Efeitos Questionario Questionario5">
        
        <?php include 'assets/header.php'; ?>

        <section class="LogoCalc">
            <a href="<? echo $url ?>">
                <? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
            </a>
        </section>
        
        <section class="Sessao1">

            <article class="nivel2">    
                <h2>
                    Cálculo de emissões
                </h2>

                
                <div class="BoxEmissoesTopo">
                    <p class="DestaqueInterno Destaque2">Resultado parcial:</p>
                    <div class="BlocoResultado">0.0</div>
                    <p>ton CO2 eq</p>
                </div>
                
                <div class="Sliders">
                    <div class="content">                        
                        <div id="slider-tarifa"></div>
                        <div id="slider-tarifa-dir"></div>
                        <label for="amount" class="price"></label>
                    </div>

                    <p>Resíduos sólidos</p>

                </div>

                <form action="">
                    <div class="Grupo">

                        <div class="WrapperBlock">
                            <p>Suas compras para alimentação costumam ser:</p>
                            
                            <select name="" id="">
                                <option value="">Selecione</option>
                            </select>
                        </div>

                        <div class="WrapperBlock">
                            <p>Você separa e destina os seus resíduos para reciclagem ou compostagem?</p>
                            
                            <select name="" id="">
                                <option value="">Selecione</option>
                            </select>
                        </div>

                       
                        
                    </div>
                </form>

                <div class="WrapperButtons">
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Efeitos_Questionario4 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque2" href="<? echo $Efeitos_Questionario6 ?>">Próximo</a>
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