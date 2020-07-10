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
                        Distribuidora: Copel<a class="open-popup-link" href="#Popup-T">alterar</a>
                        <div id="Popup-T" class="mfp-hide">
                            TESTEEEEEEEEEEEE                            
                        </div>
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
    
                <a id="BtnTopo" href="<? echo $Eqp_Calculadora2 ?>" class="Btn Btn-Destaque1 Btn-Medium">Não encontrou? Insira seu produto aqui</a>

                
            </article>
            <div class="FiltrosOpen">
                <article class="nivel2">
                    
                    <div class="Selects">
                        <select name="" id="">
                            <option value="">Tipo</option>
                        </select>
                        <select name="" id="">
                            <option value="">Marca</option>
                        </select>
                        <select name="" id="">
                            <option value="">Classificação</option>
                        </select>
                    </div>

                    <div class="Sliders">

                        <div class="content">
                            <p>Número de litros/capacidade:</p>
                            <div id="slider-range"></div>
                            <div id="slider-range-dir"></div>
                            <label for="amount" class="price"></label>
                            <input type="text" id="amount" readonly>
                        </div>

                        <div class="content">
                            <p>Custo da conta de luz em um ano:</p>
                            <div id="slider-range2"></div>
                            <label for="amount2" class="price"></label>
                            <input type="text" id="amount2" readonly>
                        </div>

                        <div class="content">
                            <p>Custo da conta de luz em 10 anos:</p>
                            <div id="slider-range3"></div>
                            <label for="amount3" class="price"></label>
                            <input type="text" id="amount3" readonly>
                        </div>

                    </div>

                    <div class="AplicarFiltros">
                        <a href="<? echo $Eqp_Calculadora2 ?>" class="Btn Btn-Destaque1 Btn-Default">Aplicar Filtros</a>
                        <a href="javascript:void()">Limpar filtros</a>
                    </div>

               </article> 
            </div>
        </section>        
                
        <section class="Cards">
            <article class="nivel2">

                <div id="Popup-Big">
                    <div id="Popup-01" class="Popup-01 mfp-hide">
                        <article>
                            <div class="WrapperBoxesComp">
                                <article class="nivel2">
                                    <p class="MobileItem">Comparação:</p>
                                    <div class="Box">
                                        <p class="Destaque">1. <span class="DesktopItem">Husky / Home&Art:</span></p>
                                        <p class="Sub">FREEZER PFZ200B - 056451036</p>
                                        <a href="javascript:void()">Excluir</a>
                                    </div>
                                    <div class="Box">
                                        <p class="Destaque">1. <span class="DesktopItem">Husky / Home&Art:</span></p>
                                        <p class="Sub">FREEZER PFZ200B - 056451036</p>
                                        <a href="javascript:void()">Excluir</a>
                                    </div>
                                    <div class="Box">
                                        <p class="Destaque">1. <span class="DesktopItem">Husky / Home&Art:</span></p>
                                        <p class="Sub">FREEZER PFZ200B - 056451036</p>
                                        <a href="javascript:void()">Excluir</a>
                                    </div>
                                    <div class="Box">
                                        <a class="Btn Btn-Destaque1 Btn-Default" href="javascript:void()">Realizar comparação</a>
                                        <p class="">Você pode comparar até 3 equipamentos</p>
                                    </div>
                                </article>
                            </div>
                        </article>
                    </div>
                </div>

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