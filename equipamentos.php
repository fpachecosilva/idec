<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Equipamentos - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Equipamentos">
		
        <?php include 'assets/header.php'; ?>

        <section class="Banner">
			<article>				
                <a href="<? echo $url ?>">
					<? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
				</a>
                <h1>Reduza custos e melhore o meio ambiente!</h1>
			</article>			
        </section>
        
        <section class="Sessao1">
            <article class="nivel3">
                <h2>
                    QUANTO MENOR O CONSUMO, MAIS EFICIENTE
                </h2>  
                <p>
                Aqui você consegue calcular a eficiência energética de um equipamento. Isto é, a quantidade de energia que ele usa para funcionar. <strong>Quanto menos energia, mais eficiente e mais econômico.</strong> Também é possível comparar com a classificação de outros países, saber o tempo de retorno do investimento e quanto o equipamento deveria custar para valer a pena. <br><br>

                Todo aparelho traz uma etiqueta indicando sua classificação de A (mais eficiente) a G (menos eficiente). Os equipamentos com melhor classificação, em geral, são mais caros. Mas a médio prazo, por consumirem menos energia. Podem compensar essa diferença.<br>
                <strong>Faça o cálculo do seu!</strong>
                </p>
            </article>
        </section>

        <section class="Sessao2">
            <article>
                <p class="Destaque Destaque1">
                    Acesse a calculadora equipamentos econômicos
                </p>
                <div class="Boxes">
                    <div class="Box">
                        <p> 01.</p>                       
                        <p>
                            <strong>Escolha</strong> o tipo 
                            de eletrodoméstico.
                        </p>                       
                    </div>
                    <div class="Box">                       
                        <p>02.</p>                    
                        <p>
                            <strong>Selecione</strong> sua distribuidora e média de uso do aparelho.                                
                        </p>                       
                    </div>
                    <div class="Box">                       
                        <p>03.</p>                    
                        <p>
                            <strong>Selecione</strong> até três produtos e clique em “comparar” 
                            para visualizar as diferenças em eficiência energética
                        </p>                       
                    </div>
                </div>                
            
                <form action="">
                    <p class="Destaque Destaque1">
                        Selecione o equipamento:
                    </p>
                    <article class="nivel3">
                        <div>
                            <select class="Btn-Default" name="" id="">
                                <option value="">Selecione</option>
                                <option value="">Selecione</option>
                                <option value="">Selecione</option>
                            </select>
                            <a href="<? echo $Eqp_Customizar ?>" class="Btn Btn-Destaque1 Btn-Default">Continuar</a>
                        </div>
                    </article>                    
                </form>

            </article>
        </section>

        <section class="Sessao3">
            <article class="nivel2">
                <h2>
                    Por que eficiência energética é importante?
                </h2>
                <div class="Boxes">
                    <div class="esq">
                        <p class="Destaque Destaque1">
                            Meio ambiente
                        </p>
                        <p>
                            A produção de energia causa impacto ambiental de várias formas, por exemplo:
                        </p>
                        <div class="Internas">
                            <div>
                                <? echo '<img src="' .$images. 'eqp-internas-1.svg" />' ?>
                                <p>
                                    Com grandes alagamentos 
                                    na construção de hidrelétricas
                                </p>
                            </div>

                            <div>
                                <? echo '<img src="' .$images. 'eqp-internas-2.svg" />' ?>
                                <p>
                                    Emissão de gases de efeito estufa durante o funcionamento de uma termelétrica
                                </p>
                            </div>

                            <div>
                                <? echo '<img src="' .$images. 'eqp-internas-3.svg" />' ?>
                                <p>
                                    Produção de lixo radioativo pela usina nuclear
                                </p>
                            </div>
                        </div>

                        <p>
                        Assim, quanto menos energia for preciso produzir, menos usinas são necessárias e menos impacto é gerado.
                        </p>
                    </div>

                    <div class="dir">
                        <p class="Destaque Destaque1">
                            Redução de custos
                        </p>
                        <p>
                        Quanto menos energia um equipamento necessita para funcionar, mais você economiza na conta de luz. Precisa dizer mais?
                        </p>
                        <? echo '<img src="' .$images. 'eqp-internas-4.svg" />' ?>
                    </div>
                </div>

                <div class="DicasBotoes">
                    <a class="Btn Btn-Default Btn-Destaque1" href="<? echo $Eqp_Dicas ?>">Dicas para poupar seu dinheiro e o meio ambiente</a>
                    <a class="Btn Btn-Default Btn-Destaque1" href="<? echo $Eqp_NotaMetodologica ?>">Nota metodológica</a>
                </div>
            </article>

            
        </section>
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <!-- <script type="text/javascript">
            $('.LinkMenu:eq(0)').addClass('SessaoAtual');
        </script> -->
    </body>

</html>