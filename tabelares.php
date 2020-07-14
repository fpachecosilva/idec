<!DOCTYPE html>
<html>
    <head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Tabela Comparativa - Resultado'. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
    </head>
    
	<body class="Tabela TabelaRes">

        
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

                <h2>Tabela comparativa</h2>

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

                            <label for="tempo">Quanto tempo em média você utiliza o aparelho selecionado por dia?</label>
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

            </article>
        </section>

        <section class="TabelaComparativa">

            
            <article class="nivel2">
                
                <p class="ProdRes DesktopItem">
                    O produto mais energicamente eficiente é: <span class="Destaque1">FREEZER  PFZ200B 056451036</span>
                </p>

                <table>
                    <tr>
                        <td>Marca</td>
                        <td>Husky /Home&Art</td>
                        <td>Husky/Home&Art Eletrod…os</td>
                        <td>Husky /Home&Art</td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td>FREEZER  PFZ200B 056451036</td>
                        <td>FREEZER  PFZ200B 0564….36</td>
                        <td>FREEZER  PFZ200B 056451036</td>
                    </tr>
                    <tr>
                        <td>Custo da conta de luz em 1 ano</td>
                        <td><span class="font10">R$ </span>80<span class="font10">,00</span></td>
                        <td><span class="font10">R$ </span>80<span class="font10">,00</span></td>
                        <td class="Destaque"><span class="font10">R$ </span>80<span class="font10">,00</span></td>
                    </tr>
                    <tr>
                        <td>Custo da conta de luz em 10 anos</td>
                        <td><span class="font10">R$ </span>800<span class="font10">,00</span></td>
                        <td><span class="font10">R$ </span>800<span class="font10">,00</span></td>
                        <td class="Destaque"><span class="font10">R$ </span>800<span class="font10">,00</span></td>
                    </tr>
                    <tr>
                        <td>Classificação no Brasil</td>
                        <td>AAA</td>
                        <td class="Destaque">AAA</td>
                        <td class="Destaque">AAA</td>
                    </tr>
                    <tr>
                        <td>Classificação na União Européia</td>
                        <td>A</td>
                        <td class="Destaque">A</td>
                        <td class="Destaque">A</td>
                    </tr>
                    <tr>
                        <td>Preço do produto</td>
                        <td class="Destaque"><span class="font10">R$ </span>500<span class="font10">,00</span></td>
                        <td><span class="font10">R$ </span>600<span class="font10">,00</span></td>
                        <td><span class="font10">R$ </span>800<span class="font10">,00</span></td>
                    </tr>
                    <tr>
                        <td>Energia consumida</td>
                        <td>400kWh</td>
                        <td>400kWh</td>
                        <td class="Destaque">300kWh</td>
                    </tr>
                    <tr>
                        <td>Retorno do investimento <a class="BtnInfo" href="javascript:void()">  </td>
                        <td>5 anos</td>
                        <td>5 anos</td>
                        <td class="Destaque">5 anos</td>
                    </tr>
                </table> 

                <p class="Legenda">
                    Opção mais vantajosa da comparação
                </p>
    
        </article>


        </section>        

        <?php include 'assets/inscrevertabelares.php'; ?>        

        <section class="RefazerCalculo">
            <article>
                <a class="Btn Btn-Destaque1 Btn-Default" href="javascript:void()">Refazer cálculo</a>
                <a class="Btn Btn-Destaque1 Btn-Default" href="javascript:void()">Calcular outro pedido</a>
            </article>
        </section>

        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(0)').addClass('SessaoAtual');
        </script>

       

    </body>

</html>