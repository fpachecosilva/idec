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
	<body class="Tarifa Resultado2">
		
        <?php include 'assets/header.php'; ?>

        <section class="LogoCalc">
            <a href="<? echo $url ?>">
                <? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
            </a>
        </section>

        
        <section class="Sessao1">
            <article class="nivel3">
                <h2>
                    Você têm <strong>baixa</strong> possibilidade de ser beneficiado pela tarifa branca!
                </h2> 
                
                <img src="<? echo $images ?>tarifa-resultado.svg" alt="">

                <p>
                    Sua rotina indica que você provavelmente <strong>consome mais energia elétrica durante os horários de ponta,</strong> o que resultaria numa conta de luz mais cara caso aderisse à tarifa branca. Para a mudança valer a pena, seria necessário alterar seus hábitos de consumo de energia para o período fora do ponta. Verifique com sua distribuidora de energia essa opção.
                </p>

                <p class="DestaqueInterno Destaque3">
                    Como economizar energia?
                </p>                
            </article>

            <article class="nivel2">
                <p>
                    Os aparelhos que mais contribuem com o consumo de energia no período de ponta são o chuveiro elétrico, ar-condicionado e aquecedores. A possibilidade de utilizá-los nos períodos de fora de ponta será fundamental para definir se a adesão à Tarifa Branca pode ser vantajosa. <strong>Saiba como reduzir seu gasto energético com nossa calculadora!</strong>
                </p>

                <a class="Btn Btn-Big Btn-Destaque3" href="<? echo $Eqp_Calculadora1 ?>">Acesse a calculadora de equipamentos econômicos</a>

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