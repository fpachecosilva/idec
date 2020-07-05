<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Calculadora - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Equipamentos Calculadora">
		
        <?php include 'assets/header.php'; ?>

        <section class="Banner">
			<article>				
                <a href="<? echo $url ?>">
					<? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
				</a>
                <h1>Reduza custos e melhore o meio ambiente!</h1>
			</article>			
        </section>

        <section class="Sessao2">
            <article>
                
            <h2>Como funciona a calculadora de eficiência energética</h2>
                
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
                    <article>
                        <div>
                            <select class="Btn-Default" name="" id="">
                                <option value="">Selecione</option>
                                <option value="">Refrigerador</option>
                                <option value="">Condicionadores de ar</option>
                                <option value="">Ventiladores</option>
                                <option value="">Televisores</option>
                                <option value="">Máquinas de lavar</option>
                            </select>
                            <a href="<? echo $Eqp_Calculadora2 ?>" class="Btn Btn-Destaque1 Btn-Default">Continuar</a>
                        </div>
                    </article>                    
                </form>

            </article>
        </section>

       
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(0)').addClass('SessaoAtual');
        </script>
    </body>

</html>