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
	<body class="Efeitos Questionario SegQuestionario SegQuestionario5">
        
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
                    <div class="BoxEmissoesTopo DesktopItemGrid">
                        <p class="DestaqueInterno Destaque2">Resultado anterior:</p>
                        <div class="BlocoResultado">0.0</div>
                        <p>ton CO2 eq</p>
                    </div>

                    <div class="BoxEmissoesTopo DesktopItemGrid">
                        <p class="DestaqueInterno Destaque2">Redução até agora:</p>
                        <div class="BlocoResultado">0.0</div>
                        <p>ton CO2 eq</p>
                    </div>
                </div>
                
                
                <form action="">
                    <div class="Grupo">

                        <div class="WrapperBlock">
                            <p>Quais mudanças está disposto a fazer para tornar o uso de eletricidade mais eficiente na sua casa?</p>
                        </div>
                        
                        <div class="WrapperBlock">
                            <p>Quantos dias da semana poderia não comer carne bovina?</p>
                            
                            <div class="quantity">
                                <input class="quantity" type="number" name="" id="">                            
                                <button onclick="$(this).prev()[0].stepDown();preventDefault()" class="btnminus1">-</button>
                                <button onclick="$(this).prev().prev()[0].stepUp();preventDefault()" class="btnadd1">+</button>
                            </div>

                        </div>
                        
                        <div class="Wrapper">
                            <p>Poderia separar os resíduos sólidos para reciclagem?</p>

                            <a class="BtnInfo" href="javascript:void()">
                                <div class="PopupInfo" style="width:175px">
                                    <span></span>
                                    <p>Considere cada trecho como uma viagem e somente as realizadas por motivos pessoais no último ano.</p>
                                </div> 
                            </a>                           
                        </div>
                        
                        <div class="WrapperBlock">                            
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
                            <p>Poderia fazer compostagem dos resíduos sólidos?</p>

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
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Efeitos_Segundo_Questionario4 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque2" href="<? echo $Efeitos_Segundo_Questionario_Resultado_1 ?>">Próximo</a>
                </div>

                <div class="BoxEmissoesTopo MobileItemGrid">
                    <p class="DestaqueInterno Destaque2">Resultado parcial:</p>
                    <div class="BlocoResultado">-0.0</div>
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