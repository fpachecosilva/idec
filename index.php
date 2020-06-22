<!DOCTYPE HTML>
<html>
	<head>	
		<?php 
			include 'assets/config.php'; 
			$tituloPagina = 'Home - '. $empresa;		
		?>
		<title><? echo $tituloPagina ?></title>
		<?php include 'assets/head.php'; ?>
	</head>
	<body class="Home">
		
	<?php include 'assets/header.php'; ?>

		<section class="Banner">
			<article>
				<? echo '<img class="MobileItem" src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
				<h1>Economize dinheiro e poupe o meio ambiente!</h1>
			</article>			
		</section>

		<section class="Sessao1">
			<article>
				<h2>Conheça e use as calculadoras</h2>
				<p>
					Com as calculadoras do Idec você entende o seu consumo de energia elétrica, escolhe equipamentos mais econômicos e ainda simula o impacto do seu estilo de vida 
					no meio ambiente.
				</p>

				<div class="Boxes">
					<a href="<? echo $Equipamentos ?>">
						<div class="Box Box1">
							<img src="<? echo $images ?>home-sessao1-planta.svg" />
							<p>EQUIPAMENTOS ECONÔMICOS</p>
						</div>
					</a>
					<a href="<? echo $Efeitos ?>">
						<div class="Box Box2">
							<img src="<? echo $images ?>home-sessao1-energia.svg" />
							<p>Emissões de gases do efeito estufa </p>
						</div>
					</a>
					<a href="<? echo $Tarifa ?>">
						<div class="Box Box3">
							<img src="<? echo $images ?>home-sessao1-lampada.svg" />
							<p>Tarifa<br> branca</p>
						</div>
					</a>
				</div>
			</article>
		</section>

		<section class="Inscrever">
			<article>
				<div class="Box">
					<div class="Esq">
						<p>
						<strong>Inscreva-se</strong> para receber informações<br class="DesktopItem"> sobre energia elétrica e sustentabilidade.
						</p>
					</div>
					<div class="Dir">
						<form action="" name="inscrever">
							<input type="text" name="email" placeholder="E-Mail">
							<a href="" class="Btn">Inscrever</a>							
						</form>
					</div>
				</div>
				
				<div class="LinksExtras MobileItem">
					<a class="BackTop" href="javascript:void(0)">Voltar ao topo</a><br><br>
					<a href="<? echo $Equipamentos ?>">Equipamentos Econômicos</a><br>
					<a href="<? echo $Equipamentos ?>">Tarifa Branca</a><br>
					<a href="<? echo $Equipamentos ?>">Mudança de clima</a>
				</div>
			</article>
		</section>		
	
		<?php include 'assets/footer.php'; ?>

		<!-- <script type="text/javascript">
			$('.LinkMenu:eq(0)').addClass('SessaoAtual');
		</script> -->
	</body>
</html>