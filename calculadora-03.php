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
	<body class="Equipamentos Calculadora3">
		
        <?php include 'assets/header.php'; ?>
        

        <div class="Breadcrumb">
            <article class="nivel2">
                <a href="<? echo $Equipamentos ?>">Voltar a home</a>
            </article>
        </div>
        
        <section class="PainelTopo">
            <article class="nivel2">

                <h2>Compare os aparelhos:</h2>

                <div class="Alterar"> 
                    <div>
                        Distribuidora: <a href="javascript:void()">alterar</a>
                    </div>
                    <div>
                        Média de uso por dia: 2-3 horas <a href="javascript:void()">alterar</a>
                    </div>
                </div>

                <div class="Filtros">
                    <form action="">
                        <input type="text" name="" id="" placeholder="Pesquisar">
                        <select name="" id="filtros" placeholder="Filtros">
                            <option value="">Selecione</option>
                        </select>
                    </form>
                </div>
    
                <a href="<? echo $Eqp_Calculadora2 ?>" class="Btn Btn-Destaque1 Btn-Medium">Não encontrou? Insira seu produto aqui</a>
            </article>
        </section> 
                
        <section class="Cards">
            <article class="nivel2">
                <div class="WrapperCards">
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
                    <div class="Card"></div>
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