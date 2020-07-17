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
	<body class="Efeitos Questionario Questionario1">
        
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

                <p class="Topo">
                    A calculadora de emissões é uma ferramenta de reflexão sobre o quanto esse consumo equivale em emissão de gases de efeito estufa e, ao mesmo tempo, dá dicas de como reduzir-la. Preencha sua informações abaixo e descubra sua pegada de carbono.
                </p>

                <div class="BoxEmissoesTopo DesktopItemGrid">
                    <p class="DestaqueInterno Destaque2">Resultado parcial:</p>
                    <div class="BlocoResultado">0.0</div>
                    <p>ton CO2 eq</p>
                </div>
                
                <div class="Sliders">
                    <div class="content">                        
                        <div id="slider-efeitos"></div>
                        <div id="slider-efeitos-dir"></div>
                        <label for="amount" class="price"></label>
                    </div>

                    <p>Residência</p>

                </div>

                <form action="">
                    <div class="Grupo">

                        <div class="WrapperBlock">
                            <p>Selecione seu estado:</p>
                            <select class="Reduzido" name="" id="">
                                <option value="">AC</option>
                            </select>
                        </div>

                        <div class="WrapperBlock">
                            <p>Selecione seu município:</p>
                            <select class="Btn-Small" name="" id="">
                                <option value="">Selecione</option>
                            </select>
                        </div>

                        <div class="WrapperBlock">
                            <p>Quantas pessoas moram na sua casa?</p>
                            <input type="number" name="" id="">                            
                        </div>
                        
                        <div class="Wrapper">                    
                            <p>Você quer calcular sua emissão individual ou da sua família?</p>
                            
                            <a class="BtnInfo" href="javascript:void()">
                                <div class="PopupInfo" style="width:216px">
                                    <span></span>
                                    <p>Mesmo optando pelo cálculo individual de suas emissões, informe o número total de pessoas que vivem na mesma casa.</p>
                                </div> 
                            </a>
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

                <a class="Btn Btn-Default Btn-Destaque2" href="<? echo $Efeitos_Questionario2 ?>">Próximo</a>

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