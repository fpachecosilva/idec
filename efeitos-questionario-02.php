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
	<body class="Efeitos Questionario Questionario2">
        
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

                    <p>Transporte</p>

                </div>

                <form action="">
                    <div class="Grupo">

                        <div class="WrapperBlock">
                            <p>Qual transporte você utiliza?</p>
                            <select name="" id="">
                                <option value="">Selecione</option>
                            </select>
                        </div>

                        <div class="WrapperBlock">
                            <p>Qual combustível é usado nesse veículo?</p>
                            <select name="" id="">
                                <option value="">Selecione</option>
                            </select>
                        </div>

                        <div class="WrapperBlock">
                            <p>Quanto você gasta por mês com combustível?</p>
                            <input class="Redondo ComDesc" type="text" name="" id="">R$/Mês
                        </div>

                        <a class="Btn Btn-Default Btn-Destaque4 mga" href="">Adicionar transporte</a>

                        <div class="WrapperBlock">                            
                            <p>Você utiliza ônibus?</p>                           

                            <div class="Wrapper">
                                <div>
                                    <input type="checkbox" name="" id="sim">
                                    <label for="sim">Sim</label>
                                </div>
            
                                <div>
                                    <input type="checkbox" name="" id="nao">
                                    <label for="nao">Não</label>
                                </div>
                            </div>
                        </div>

                        <div class="WrapperBlock">                            
                            <p>Você utiliza trem ou metro?</p>                           

                            <div class="Wrapper">
                                <div>
                                    <input type="checkbox" name="" id="sim">
                                    <label for="sim">Sim</label>
                                </div>
            
                                <div>
                                    <input type="checkbox" name="" id="nao">
                                    <label for="nao">Não</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

                <div class="WrapperButtons">
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Efeitos_Questionario1 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque2" href="<? echo $Efeitos_Questionario3 ?>">Próximo</a>
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