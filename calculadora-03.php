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
                        Distribuidora: Copel 
                        

                        <a class="LinkInfo" href="javascript:void()">alterar</a>
                        
                        <div class="masktransp"></div>
                        <div class="mask"></div>
                        <div class="PopupLinkInfo Dist">
                            <span></span>
                            
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
                                    <label class="Inline" for="dist">Selecione sua distribuidora: 
                                        <a class="BtnInfo" href="javascript:void()">                                             
                                            <div class="PopupInfo" style="width:175px">
                                                <span></span>
                                                <p>Distribuidora elétrica é a empresa que fornece eletricidade para sua casa.</p>
                                            </div> 
                                        </a>
                                    </label>
                                    <select name="dist" id="dist">
                                        <option value="" selected disabled hidden>Selecione</option>
                                        <option value="Aneel">Aneel</option>
                                        <option value="Copel">Copel</option>
                                        <option value="CPFL">CPFL</option>
                                        <option value="Eletrobras">Eletrobras</option>
                                        <option value="Enersul">Enersul</option>
                                    </select>  
                                </div>                                
                                
                                <a href="<? echo $Eqp_Calculadora3 ?>" class="Btn Btn-Destaque1">Continuar</a>
                            </form>

                        </div> 

                        
                    </div>  

                    <div>
                        Média de uso por dia: 2-3 horas 
                        <a class="LinkInfo" href="javascript:void()">alterar</a>

                        <div id="" class="Grupo PopupLinkInfo Media">
                            <span></span>                            

                            <label for="tempo">Quanto tempo em média você utiliza o aparelho por dia?</label>
                            <select name="tempo" id="tempo">
                                <option value="" selected disabled hidden>Usar a média do Brasil</option>
                                <option value="20 min">20 min</option>
                                <option value="40 min">40 min</option>
                                <option value="1 hora">1 hora</option>
                                <option value="1 hora e 20 min">1 hora e 20 min</option>
                                <option value="1 hora e 40 min">1 hora e 40 min</option>
                            </select>

                            <a href="<? echo $Eqp_Calculadora3 ?>" class="Btn Btn-Destaque1 Btn-Default">Alterar</a>

                        </div>

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
    
                <a id="BtnTopo" href="javascript:void()" class="Btn Btn-Destaque1 Btn-Medium">Não encontrou? Insira seu produto aqui</a>
                
                

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
                            <label for="amount" class="price"></label>                            
                            <input type="text" id="amount" readonly>
                            <input type="text" id="amountdir" readonly>
                        </div>

                        <div class="content">
                            <p>Custo da conta de luz em um ano:</p>
                            <div id="slider-range2"></div>
                            <label for="amount2" class="price"></label>
                            <input type="text" id="amount2" readonly>
                            <input type="text" id="amount2dir" readonly>
                        </div>

                        <div class="content">
                            <p>Custo da conta de luz em 10 anos:</p>
                            <div id="slider-range3"></div>
                            <label for="amount3" class="price"></label>
                            <input type="text" id="amount3" readonly>
                            <input type="text" id="amount3dir" readonly>
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
                <a href="javascript:void()" class="Btn BtnTopo Btn-Destaque1 MobileItem">Inserir próprio produto</a>
            </article>
        </section>

        <div class="maskcinza"></div>
        <div class="NaoEncontrou">
            <form action="">
                <span></span>

                <p class="Destaque">Insira seu próprio produto</p>
                <p class="Sub">Preencha os campos abaixo:</p>
                
                
                <div class="Grupo">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca">
                </div>
                
                <div class="Grupo">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo">
                </div>

                <div class="Grupo">
                    <label for="potencia">Potência (Watts)</label>
                    <select name="" id="potencia"></select>
                </div>

                <div class="Grupo">
                    <label for="consumo">*Consumo kWh</label>
                    <input type="text" id="consumo">
                </div>

                <div class="Grupo">
                    <label for="preco">Preço do produto</label>
                    <input type="text" id="preco">
                </div>

                <a href="" class="Btn Btn-Destaque1">Inserir</a>
                <p class="Aviso">
                    *Essa informação pode ser encontrada na embalagem, manual ou etiqueta do produto.
                </p>

            </form>
        </div>
        
        <?php include 'assets/inscrever.php'; ?>        
        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(0)').addClass('SessaoAtual');
        </script>

       

    </body>

</html>