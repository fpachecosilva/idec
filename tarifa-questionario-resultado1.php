<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Tarifa - Resultado'. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Equipamentos Tarifa Resultado1">
		
        <?php include 'assets/header.php'; ?>

        <section class="LogoCalc">
            <a href="<? echo $url ?>">
                <? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
            </a>
        </section>
        
        <section class="Sessao1">
            <article class="nivel3">
                <h2>
                    Você têm <strong>alta</strong> possibilidade de ser beneficiado pela tarifa branca!
                </h2> 
                
                <img src="<? echo $images ?>tarifa-resultado.svg" alt="">

                <p>
                    Sua rotina indica que você provavelmente consome <strong>menos energia elétrica durante os horários de ponta,</strong> o que resultaria numa conta de luz mais barata caso aderisse à tarifa branca. Para confirmar, distribuidoras elétricas oferecem testes aprofundados.

                </p>
            </article>
        </section>
        
        
        <section class="Accordeon">    
            <article class="nivel2">
            
                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">
                        <span>O que fazer?</span>                         
                    </a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <p class="LineSub">
                        A troca do medidor fica por conta da concessionária e eventuais adequações na entrada de serviço deverão ser providenciadas 
                        pelo consumidor. <br><br>

                        Prazo da Aneel:
                        <span class="circle"></span>Para unidades atendidas: 30 dias<br>
                        <span class="circle"></span>Para novas ligações: máximo de 5 dias em área urbana e 10 dias em área rural<br><br>

                        O consumidor pode se arrepender a qualquer momento, e caso queira voltar novamente para a tarifa branca o prazo é de 180 dias. 
                        </p>
                    </div>
                </div>
                
                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Como economizar energia?</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <p class="LineSub">
                        Os aparelhos que mais contribuem com o consumo de energia no período de ponta são o chuveiro elétrico, ar-condicionado e aquecedores. A possibilidade de utilizá-los nos períodos de fora de ponta será fundamental para definir se a adesão à Tarifa Branca 
                        pode ser vantajosa. <strong>Saiba como reduzir seu gasto energético com nossa calculadora!</strong>
                        </p>

                        <a class="Btn Btn-Destaque3" href="<? echo $Eqp_Calculadora1 ?>">
                            Acesse a calculadora de 
                            equipamentos econômicos
                        </a>
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