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
	<body class="Efeitos Questionario Questionario3">
        
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

                    <p>Viagens</p>

                </div>

                <form action="">
                    <div class="Grupo">

                        <div class="Wrapper">                    
                            <p>Quantas viagens de avião você fez no último ano?</p>
                            
                            <a class="BtnInfo" href="javascript:void()">
                                <div class="PopupInfo" style="width:175px">
                                    <span></span>
                                    <p>Considere cada trecho como uma viagem e somente as realizadas por motivos pessoais no último ano.</p>
                                </div> 
                            </a>
                        </div>

                        <div class="WrapperBlock">
                            <p>Nacionais:</p>
                            <input class="Redondo" type="text" name="" id="">
                        </div>

                        <div class="WrapperBlock">
                            <p>Internacionais:</p>
                            <input class="Redondo" type="text" name="" id="">
                        </div>
                    
                        <div class="Wrapper">
                            <div>
                                <input type="checkbox" name="" id="sim">
                                <label for="sim">Individual</label>
                            </div>
        
                            <div>
                                <input type="checkbox" name="" id="nao">
                                <label for="nao">Família</label>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="WrapperButtons">
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Efeitos_Questionario2 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque2" href="<? echo $Efeitos_Questionario4 ?>">Próximo</a>
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