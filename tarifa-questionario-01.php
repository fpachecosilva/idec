<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Tarifa - Questionário - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Tarifa Questionario Questionario1">
        
        <?php include 'assets/header.php'; ?>

        <section class="LogoCalc">
            <a href="<? echo $url ?>">
                <? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
            </a>
        </section>
        
        <section class="Sessao1">

            <article class="nivel2">    
                <h2>
                    Descubra se você é um possível
                    candidato À tarifa branca:
                </h2>
                
                <div class="Sliders">
                    <div class="content">                        
                        <div id="slider-tarifa"></div>
                        <div id="slider-tarifa-dir"></div>
                        <label for="amount" class="price"></label>
                    </div>
                </div>

                <p>
                   <span>1.</span> O medidor de energia de sua casa é compartilhado?*
                </p>

                <form action="">
                    <div>
                        <input type="checkbox" name="" id="sim">
                        <label for="sim">Sim</label>
                    </div>

                    <div>
                        <input type="checkbox" name="" id="nao">
                        <label for="nao">Não</label>
                    </div>
                </form>

                <p>
                    *Se você mora em prédio ou condomínio, consulte o zelador ou o síndico para saber onde o medidor da sua residência está localizado.
                </p>

                <a class="Btn Btn-Default Btn-Destaque3" href="<? echo $Tarifa_Questionario2 ?>">Próximo</a>
    
            </article>

        </section>
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(2)').addClass('SessaoAtual');
        </script>

       

    </body>

</html>