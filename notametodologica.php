<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Nota Metodológica - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="NotaMetodologica">
		
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
                    Nota Metodológica
                </h2>  
                <p>
                    Aqui apresentamos a metodologia aplicada para pesquisa de mercado, os resultados obtidos e as principais análises técnicas para cada um dos aparelhos.
                </p>
                <p class="DestaqueInterno Destaque1">
                    Faça o download da metodologia utilizada para cada aparelho:
                </p>
            </article>
        </section>


        <section class="Accordeon">           
            <article class="nivel2">
                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                        <? echo '<img class="NotaIcone" src="' .$images. 'nota-m-01.svg" />' ?>
                        <a href="<? echo $Eqp_NotaMetodologicaLink1 ?>">Refrigeradores</a>                        
                            
                        <? echo '<img class="MobileItem" src="' .$images. 'setamenu.svg" />' ?>
                        
                        <a class="DesktopItem" href="<? echo $Eqp_NotaMetodologicaLink1 ?>">
                            <? echo '<img class="download DesktopItem" src="' .$images. 'download.svg" />' ?>
                        </a>
                    </div>                    
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">
                        <? echo '<img class="NotaIcone" src="' .$images. 'nota-m-02.svg" />' ?> 
                        <a href="<? echo $Eqp_NotaMetodologicaLink2 ?>">Televisores</a>

                        <? echo '<img class="MobileItem" src="' .$images. 'setamenu.svg" />' ?>
                        
                        <a href="<? echo $Eqp_NotaMetodologicaLink2 ?>">
                            <? echo '<img class="download DesktopItem" src="' .$images. 'download.svg" />' ?>
                        </a>
                    </div>                    
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">                        
                        <? echo '<img class="NotaIcone" src="' .$images. 'nota-m-03.svg" />' ?>
                        <a href="<? echo $Eqp_NotaMetodologicaLink3 ?>">Condicionadores de ar</a>

                        <? echo '<img class="MobileItem" src="' .$images. 'setamenu.svg" />' ?>
                        
                        <a href="<? echo $Eqp_NotaMetodologicaLink3 ?>">
                            <? echo '<img class="download DesktopItem" src="' .$images. 'download.svg" />' ?>
                        </a>
                    </div> 
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">                        
                        <? echo '<img class="NotaIcone" src="' .$images. 'nota-m-04.svg" />' ?> 
                        <a href="<? echo $Eqp_NotaMetodologicaLink4 ?>">Máquinas de lavar</a>

                        <? echo '<img class="MobileItem" src="' .$images. 'setamenu.svg" />' ?>
                        
                        <a href="<? echo $Eqp_NotaMetodologicaLink4 ?>">
                            <? echo '<img class="download DesktopItem" src="' .$images. 'download.svg" />' ?>
                        </a>
                    </div>                      
                </div>

                <div class="WrapperAcc">
                    <div class="Accordeon-mini-box-info">                  
                        <? echo '<img class="NotaIcone" src="' .$images. 'nota-m-05.svg" />' ?>
                        <a href="<? echo $Eqp_NotaMetodologicaLink5 ?>">Ventiladores</a>

                        <? echo '<img class="MobileItem" src="' .$images. 'setamenu.svg" />' ?>
                        
                        <a href="<? echo $Eqp_NotaMetodologicaLink5 ?>">
                            <? echo '<img class="download DesktopItem" src="' .$images. 'download.svg" />' ?>
                        </a>
                    </div>                      
                </div>
            </article>            
        </section>
                
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(0)').addClass('SessaoAtual');
        </script>
    </body>

</html>