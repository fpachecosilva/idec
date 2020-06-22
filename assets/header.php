	<header>		
		<div class="MobileItem">
			<a href="javascript:void(0)" id="ClicarForaMenu"></a>

			<a href="javascript:void(0)" id="AbrirMenu" class="MobileItem">
				<div id="Topo"></div>
				<div id="Medio"></div>
				<div id="Baixo"></div>
			</a>
		</div>

		<div class="MenuWrapper">			
			<a href="javascript:void(0)" id="FecharMenu" class="MobileItem">
				<? echo '<img src="' .$images. 'setamenu.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>				
			</a>
			<article>
				<div class="DesktopItem">
					<a href="<? echo $url ?>" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" id="Logo">
						<? echo '<img src="' .$images. 'logo.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>					
					</a>
				</div>
	
	
				<nav id="Menu">					
					<a class="LinkMenu Destaque1" href="<? echo $Equipamentos ?>"><div>Equipamentos Econômicos</div></a>
					<div class="LinkSubMenu MobileItem">
						<a href="" alt="">SOBRE a CALCULADORA</a>
						<a href="" alt="">METODOLOGIA</a>
						<a href="" alt="">CALCULADORA</a>
					</div>

					<a class="LinkMenu Destaque2" href="<? echo $Efeitos ?>"><div>Emissões de Gases de Efeito Estufa</div></a>
					<div class="LinkSubMenu MobileItem">
						<a href="" alt="">SOBRE a CALCULADORA</a>						
						<a href="" alt="">CALCULADORA</a>
					</div>
					
					<a class="LinkMenu Destaque3" href="<? echo $Tarifa ?>"><div>Tarifa Branca</div></a>
					<div class="LinkSubMenu MobileItem">
						<a href="" alt="">SOBRE a TARIFA BRANCA</a>						
						<a href="" alt="">CALCULADORA</a>
					</div>				
				</nav>
				
			</article>
	
			<div class="MobileItem RodapeMenu">
				<? echo '<img src="' .$images. 'logobranco.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
			</div>

		</div>
			
	</header>