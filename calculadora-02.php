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
	<body class="Equipamentos Calculadora2">
		
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
            <article>
                
            <h2>Para customizar seu resultado, preencha os campos a seguir:</h2>
            
            <form action="">

                <div class="Grupo">
                    <label for="uf">Selecione seu estado:</label> 
                    <select name="uf" id="uf">
                        <option value="" selected disabled hidden>XX</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                    </select>
                </div>
                 
                <div class="Grupo">
                    <label class="Inline" for="dist">Selecione sua distribuidora: <a class="BtnInfo" href="javascript:void()"></a></label>
                    <select name="dist" id="dist">
                        <option value="" selected disabled hidden>Selecione</option>
                        <option value="Aneel">Aneel</option>
                        <option value="Copel">Copel</option>
                        <option value="CPFL">CPFL</option>
                        <option value="Eletrobras">Eletrobras</option>
                        <option value="Enersul">Enersul</option>
                    </select>   
                    
                    <div class="GrupoInline">
                        <input type="checkbox" name="espec" id="espec">
                        <label for="espec">Não especificar</label>
                    </div>
                </div>
                 
                <div class="Grupo">
                    <label for="tempo">Quanto tempo em média você utiliza o aparelho selecionado por dia?</label>
                    <select name="tempo" id="tempo">
                        <option value="" selected disabled hidden>Selecione</option>
                        <option value="20 min">20 min</option>
                        <option value="40 min">40 min</option>
                        <option value="1 hora">1 hora</option>
                        <option value="1 hora e 20 min">1 hora e 20 min</option>
                        <option value="1 hora e 40 min">1 hora e 40 min</option>
                    </select>
                    
                    <div class="GrupoInline">
                        <input type="checkbox" name="" id="espec2">
                        <label for="espec2">Usar a média do Brasil (3hrs e 20min)</label>
                    </div>
                </div>

                <a href="<? echo $Eqp_Calculadora3 ?>" class="Btn Btn-Destaque1 Btn-Default">Continuar</a>

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