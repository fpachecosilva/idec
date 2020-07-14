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
	<body class="Tarifa Questionario Questionario3">
        
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
                        <div id="slider-tarifa3"></div>
                        <div id="slider-tarifa3-dir"></div>
                        <label for="amount" class="price"></label>
                    </div>
                </div>

                <p class="Desc">
                   <span>3.</span> Qual o horário que você(s) costuma(m) estar em casa durante os dias de semana?
                </p><br>

                <div class="mask"></div>
                <div class="EscolhaHorarios">                    
                    <p>
                        Escolha os horários:                     
                    </p>
    
                    <a class="BtnInfo" href="javascript:void()">
                        <div class="PopupInfo" style="width:175px">
                            <span></span>
                            <p>Informar o horário que cada pessoa da casa costuma estar durante a semana conforme indicado.</p>
                        </div> 
                    </a>
                </div>

                <form action="">
                    <div class="Grupo">
                        <p>Pessoa 1</p>
                        
                        <select name="" id="">
                            <option value="">00:00</option>
                        </select>

                        <span>das</span>

                        <select name="" id="">
                            <option value="">00:00</option>
                        </select>

                        <a class="SinalPos" href="">+</a>
                    </div>

                     <div class="LinhaInput">
                         <input type="checkbox" name="" id="horarios">
                         <label for="horarios">Todas as pessoas  da casa possuem o mesmo horário.</label>
                     </div>   

                    <div class="Grupo">
                        <p>Pessoa 2</p>
                        
                        <select name="" id="">
                            <option value="">00:00</option>
                        </select>

                        <span>das</span>

                        <select name="" id="">
                            <option value="">00:00</option>
                        </select>
                        
                        <a class="SinalPos" href="">+</a>
                    </div>

                    <div class="Grupo">
                        <p>Pessoa 3</p>
                        
                        <select name="" id="">
                            <option value="">00:00</option>
                        </select>

                        <span>das</span>

                        <select name="" id="">
                            <option value="">00:00</option>
                        </select>
                        
                        <a class="SinalPos" href="">+</a>
                    </div>
                </form>
                
                <div class="BtnWrapper">
                    <a class="Btn Btn-Small Btn-Destaque4" href="<? echo $Tarifa_Questionario2 ?>">Voltar</a>
                    <a class="Btn Btn-Small Btn-Destaque3" href="<? echo $Tarifa_Questionario4 ?>">Próximo</a>
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