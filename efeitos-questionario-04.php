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
	<body class="Efeitos Questionario Questionario4">
        
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

                
                <div class="BoxEmissoesTopo DesktopItemGrid">
                    <p class="DestaqueInterno Destaque2">Resultado parcial:</p>
                    <div class="BlocoResultado">0.0</div>
                    <p>ton CO2 eq</p>
                </div>
                
                <div class="Sliders">
                    <div class="content">                        
                        <div id="slider-efeitos4"></div>
                        <div id="slider-efeitos4-dir"></div>
                        <label for="amount" class="price"></label>
                    </div>

                    <p>Energia</p>

                </div>

                <form action="">
                    <div class="Grupo">

                        <div class="Wrapper">                    
                            <p>Qual o consumo mensal de eletricidade na sua casa?</p>
                            
                            <a class="BtnInfo" href="javascript:void()">
                                <div class="PopupInfo" style="width:175px">
                                    <span></span>
                                    <p>Coloque o total de consumo da casa mesmo que esteja calculando sua emissão individual.</p>
                                </div> 
                            </a>
                        </div>

                        <div class="WrapperBlock">
                            <p>Consumo mensal:</p>
                            <input class="Redondo" type="text" name="" id="">
                            <select class="Medio" name="" id="">
                                <option value="">R$/Mês</option>
                            </select>
                        </div>

                        <div class="Wrapper">                    
                            <p>Qual o consumo mensal de gás na sua casa?</p>
                        </div>

                        <div class="Wrapper">                    
                            <p>Tipo de gás:</p>                            
                            
                            <a class="BtnInfo" href="javascript:void()">
                                <div class="PopupInfo" style="width:240px">
                                    <span></span>
                                    <p>Escolha o tipo de gás que usa. Depois selecione se você quer informar o consumo em R$/mês ou dias de duração do botijão. Coloque o total de consumo da casa mesmo que esteja calculando sua emissão individual.</p>
                                </div> 
                            </a>                            
                        </div>

                        <div class="WrapperBlock">
                            <select class="Medio" name="" id="">
                                <option value="">Selecione</option>
                            </select>
                        </div>

                        <div class="WrapperBlock">
                            <p>Consumo mensal:</p>
                            <input class="Redondo" type="text" name="" id="">
                            <select class="Medio" name="" id="">
                                <option value="">R$/Mês</option>
                            </select>
                        </div>
                        
                    </div>
                </form>

                <div class="WrapperButtons">
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Efeitos_Questionario3 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque2" href="<? echo $Efeitos_Questionario5 ?>">Próximo</a>
                </div>

                <div class="BoxEmissoesTopo MobileItemGrid">
                    <p class="DestaqueInterno Destaque2">Resultado parcial:</p>
                    <div class="BlocoResultado">0.0</div>
                    <p>ton CO2 eq</p>
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