<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Dicas - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Equipamentos Dicas">
		
        <?php include 'assets/header.php'; ?>

        <section class="Banner">
			<article>				
                <a href="<? echo $url ?>">
					<? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
				</a>
                <h1>Poupe dinheiro e o meio ambiente!</h1>
			</article>			
        </section>

        <div class="Breadcrumb">
            <article class="nivel2">
                <a href="<? echo $Equipamentos ?>">Voltar a home</a>
            </article>
        </div>
        
        <section class="Sessao1">
            <article class="nivel3">
                <h2>
                    Dicas para reduzir custos
                </h2>  
                <p>
                    A compra de modelos adequados e o uso correto dos eletrodomésticos faz com que sejam mais eficientes. Além de ficar atento à eficiência energética dos equipamentos, outras atitudes que também te ajudam a economizar na conta de luz são:
                </p>
            </article>
        </section>


        <section class="Accordeon">
            
            <article class="nivel2">

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Refrigerador</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <ul>
                            <div class="WrapperLi">
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                          
                            <div class="WrapperLi">
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Forno</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <ul>
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Stand-by</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                         <ul>
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Ar-condicionado</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <ul>
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Lâmpadas</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <ul>
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Chuveiro</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <ul>
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Tarifa Branca</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <ul>
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                    <a href="javascript:void(0)">Ao lavar e passar</a>
                    <? echo '<img class="seta" src="' .$images. 'setamenu.svg" />' ?>
                    </div>                 
                    <div class="Accordeon-mini-box" id="mini-box">
                        <ul>
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    As <strong> geladeiras</strong> são responsáveis pelo <strong> maior consumo de energia</strong> nas residências e comércios: cerca de 30%
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong> Regule o termostato</strong> (sistema que regula a temperatura da geladeira) sempre que possível. Assim, você evita que se forme muito gelo e diminui o consumo de energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Descongele periodicamente a geladeira, caso o aparelho não tenha essa função automática. O <strong>excesso de gelo</strong> no congelador faz com que o motor <strong>trabalhe 30% a mais do que o normal,</strong> consumindo mais energia.
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Não deixe a porta da geladeira aberta mais tempo que o necessário e <strong>verifique se a borracha está em boas condições.</strong>
                                </li>
                            </div>
                            
                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    Evite colocar os aparelhos próximos da <strong>parede ou fogão.</strong>
                                </li>
                            </div>

                            <div class="WrapperLi">                            
                                <div class="Dot"></div>
                                <li>
                                    <strong>Evite guardar alimentos quentes,</strong> pois o motor do equipamento precisará trabalhar por mais horas, aumentando o gasto de energia.
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

            </article>
            
        </section>
        
        <div class="LinksDicas">
            <article>
                <a href="<? echo $Efeitos ?>" class="Btn Btn-Destaque2 Btn-Big">Calcule sua contribuição para a mudança climática</a>
                <a href="<? echo $Tarifa ?>" class="Btn Btn-Destaque3 Btn-Big">Descubra se a tarifa branca compensa pra você!</a>
            </article>
        </div>

       
        <?php include 'assets/saibamais.php'; ?>

        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(0)').addClass('SessaoAtual');
        </script>
    </body>

</html>