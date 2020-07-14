<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Tarifa - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Tarifa">
		
        <?php include 'assets/header.php'; ?>

        <section class="Banner">
			<article>				
                <a href="<? echo $url ?>">
					<? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
				</a>
                <h1>Descubra como funciona a tarifa branca! </h1>
			</article>			
        </section>
        
        <section class="Sessao1">
            <article class="nivel3">
                <h2>
                    Você sabia que sua conta de luz pode ficar mais barata? 
                </h2>

                <p class="DestaqueInterno Destaque3">
                    O Idec te explica como.
                </p>

                <p>
                    Desde 1º de janeiro de 2020, a maioria dos domicílios brasileiros com energia elétrica já pode aderir à tarifa branca, um regime de preços que pode <strong>garantir economia na conta de luz,</strong> a depender do tipo de consumo de energia                
                </p>

                <a class="Btn Btn-Big Btn-Destaque3 Space" href="<? echo $Tarifa_Questionario1 ?>">Descubra se você é um possível candidato à tarifa branca!</a>

                
                <p class="LineSub DesktopItem">
                    Antes de optar pela Tarifa Branca, é preciso fazer uma análise do seu perfil de consumo de energia ao longo do dia, comparando-o com os períodos de ponta e intermediário definidos pela distribuidora que o atende. É justamente para te ajudar nisso que o Idec criou essa calculadora!

                    Quanto maior a diferença entre a Tarifa Convencional e a Tarifa Branca fora de ponta, mais vale a pena aderir à Tarifa Branca, e vice-versa. 

                    Uma dica! Os aparelhos que mais contribuem com o consumo de energia no período de ponta são o chuveiro elétrico, ar-condicionado e aquecedores. A possibilidade de utilizá-los nos períodos fora de ponta será fundamental para definir se a adesão à Tarifa Branca pode ser vantajosa. 
                </p>

                <p class="MobileItem">
                    A medida, criada pela Aneel (Agência Nacional de Energia Elétrica) para desafogar o sistema elétrico e tornar a rede mais eficiente, oferece luz mais barata àqueles que a consumirem fora do horário de ponta, período do dia quando o uso é mais intenso. A tarifa é opcional e cabe ao consumidor escolher se adere à mudança.

                </p>

            </article>
        </section>

        <section class="Horarios">
            <article class="nivel2">
                <p class="Destaque Destaque3">
                    Saiba quais os horários para cada distribuidora elétrica:
                </p>

                <div class="WrapperHorarios">
                    <form action="">
                        <select class="Btn-Default" name="" id="">
                            <option value="">Selecione</option>
                        </select>
                    </form>
                    <a class="Btn Btn-Default Btn-Destaque3" href="<? echo $Tarifa_Questionario1 ?>">Descobrir</a>
                </div>
            </article>
        </section>
        
        <section class="Accordeon">    
            <article class="nivel2">

                <p class="Destaque Destaque3">
                    <span class="DesktopItem">Mais dúvidas</span>
                    <span class="MobileItem">Perguntas frequentes</span>
                </p>

                
                <div class="WrapperAcc MobileItem">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Vale a pena?</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <p>
                            Antes de optar pela Tarifa Branca, é preciso fazer uma análise do seu perfil de consumo de energia ao longo do dia, comparando-o com os períodos de ponta e intermediário definidos pela distribuidora que o atende. É justamente para te ajudar nisso que o Idec criou essa calculadora!

                            Quanto maior a diferença entre a Tarifa Convencional e a Tarifa Branca fora de ponta, mais vale a pena aderir à Tarifa Branca, e vice-versa. 

                            Uma dica! Os aparelhos que mais contribuem com o consumo de energia no período de ponta são o chuveiro elétrico, ar-condicionado e aquecedores. A possibilidade de utilizá-los nos períodos fora de ponta será fundamental para definir se a adesão à Tarifa Branca pode ser vantajosa. 
                        </p>

                        <section class="HorariosMobile">                            
                            <p class="Destaque Destaque3">
                                Saiba quais os horários para cada distribuidora elétrica:
                            </p>

                            <div class="WrapperHorarios">
                                <form action="">
                                    <select class="Btn-Default" name="" id="">
                                        <option value="">Selecione</option>
                                    </select>
                                </form>
                                <a class="Btn Btn-Default Btn-Destaque3" href="">Descobrir</a>
                            </div>                            
                        </section>

                        <p>
                            Uma dica! Os aparelhos que mais contribuem com o consumo de energia no período de ponta são o chuveiro elétrico, ar-condicionado e aquecedores. A possibilidade de utilizá-los nos períodos de fora de ponta será fundamental para definir se a adesão à Tarifa Branca pode 
                            ser vantajosa.

                            Essa modalidade é opcional e cabe ao consumidor escolher aderir.  

                            As diferentes tarifas são definidas e publicadas anualmente pela ANEEL, para cada distribuidora. 
                        </p>

                    </div>
                </div>

            
                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">
                        <span class="DesktopItem">Até quanto pode ser reduzido o valor da minha conta?</span> 
                        <span class="MobileItem">Você sabia que sua conta de luz pode ficar mais barata?</span>
                    </a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <p class="LineSub">
                            A tarifa de energia é o preço cobrado pela quantidade de energia que você consome. Ela pode variar, dependendo do perfil do consumidor (convencional, baixa renda etc).   A Tarifa Branca é uma dessas modalidades tarifárias. Ela oferece luz mais barata àqueles que a consumirem fora do horário de ponta (quando o uso é mais intenso). A economia pode chegar a até 11%. Assim, no caso da tarifa convencional, é cobrado um mesmo preço pela energia elétrica em todos os horários e dias da semana. Já pela Tarifa Branca são cobrados valores diferentes de acordo com a 
                            hora e o dia do consumo. 
                        </p>
                    </div>
                </div>
                
                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Como é feita a cobrança?</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <p class="LineSub">
                            A Tarifa Branca diferencia três faixas de consumo e para cada uma o valor cobrado é diferente: horário de ponta (ex: das 18h às 21h), intermediário (ex: das 17h às 18h e das 21h às 22h) e fora do ponta (ex: demais horas). ATENÇÃO! As concessionárias devem informar aos consumidores quais são os intervalos de horário das suas faixas de consumo, pois elas mudam de acordo com a região do país.
                        </p>
                    </div>
                </div>

            </article>            
        </section>

        <?php include 'assets/saibamais.php'; ?>
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(2)').addClass('SessaoAtual');
        </script>
    </body>

</html>