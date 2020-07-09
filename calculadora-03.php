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
        
        <section class="LogoCalc">
            <a href="<? echo $url ?>">
                <? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
            </a>
        </section>
        
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
                        Distribuidora: Copel<a href="javascript:void()">alterar</a>
                    </div>
                    <div>
                        Média de uso por dia: 2-3 horas <a href="javascript:void()">alterar</a>
                    </div>
                </div>

                <div class="Filtros">
                    <form action="">
                        <div>
                            <input type="text" name="" id="Pesquisar" placeholder="Pesquisar">
                            <? echo '<img class="PesquisarIcon" src="' .$images. 'pesquisar.svg" />' ?>
                        </div>
                        <select name="" id="filtros" placeholder="Filtros">
                            <option value="">Filtros</option>
                        </select>
                    </form>
                </div>
    
                <a href="<? echo $Eqp_Calculadora2 ?>" class="Btn Btn-Destaque1 Btn-Medium">Não encontrou? Insira seu produto aqui</a>
            </article>
        </section>
                
        <section class="Cards">
            <article class="nivel2">
                <div class="WrapperCards">
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>
                    <?php include 'assets/card.php'; ?>                    
                </div>
            </article>
        </section>

        <section class="Paginador">
            <article>
                <div class="Index">
                    <a class="Prev" href="javascript:void()"></a>
                    <a class="Item active" href="javascript:void()">1</a>
                    <a class="Item" href="javascript:void()">2</a>
                    <a class="Item" href="javascript:void()">3</a>
                    <a class="Next" href="javascript:void()"></a>
                </div>
                <a href="<? echo $Eqp_Calculadora2 ?>" class="Btn Btn-Destaque1 MobileItem">Inserir próprio produto</a>
            </article>
        </section>
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(0)').addClass('SessaoAtual');
        </script>
    </body>

</html>