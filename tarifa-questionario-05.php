<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Tarifa - Questionário -'. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Tarifa Questionario Questionario5">
        
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
                        <div id="slider-tarifa5"></div>
                        <div id="slider-tarifa5-dir"></div>
                        <label for="amount" class="price"></label>
                    </div>
                </div>

                <p class="Desc">
                   <span>5.</span> Você costuma usar algum desses equipamentos durante a noite? (Ar-condicionado, chuveiro elétrico, secador de cabelo)
                </p>

                <form action="">
                    <div class="LinhaInput">
                        <div>
                            <input type="checkbox" name="" id="sim">
                            <label for="sim">Sim</label>
                        </div>

                        <div>
                            <input type="checkbox" name="" id="nao">
                            <label for="nao">Não</label>
                        </div>
                    </div>  
                </form>                

                <div class="BtnWrapper">
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Tarifa_Questionario4 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque3" href="<? echo $Tarifa_Questionario6 ?>">Próximo</a>
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