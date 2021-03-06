<?php require_once('templates/_head.php');
 require_once('templates/_functions.php'); 





function printprod($categoria){

	$iterator = new DirectoryIterator("imgs/".$categoria);
	$i = 0;
	echo '<div class=" mdl-cell mdl-grid " style="width: 100%;">';
	foreach($iterator as $arquivo) {
	  	if ($i >3)break;
	    // diferente de .. ou .
	    if(!$arquivo->isDot()) {
	          
	        // elemento atual é um arquivo
	        if($arquivo->isFile()) {
	        	$tmp = basename($arquivo);
	        	$nome = explode('.', $tmp);
	        	$realnome = explode(' ', $nome[0]);
	        	$aux = '';
				echo '
					<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-phone mdl-cell--4-col-tablet mdl-card mdl-js-card mdl-shadow--2dp" style="background-color: #ffffff87;">
						<div class="mdl-card__title">
							<h6 class="mdl-card__title-text">'.$nome[0].'</h6>
						</div>
						<div class="mdl-card__supporting-text" style="background: url(\'imgs/'.$categoria.'/'.$tmp.'\');  whith: 250px; height: 150px;">
							<img src="imgs/'.$categoria.'/'.$tmp.'" alt="" style=" whith: 250px; height: 150px;	 ">
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a href="produto.php?file=imgs/'.$categoria.'/'.$tmp.'&categoria='.$categoria.'" class="mdl-button mdl-js-button  mdl-button--accent mdl-button--raised  mdl-button-primary mdl-js-ripple-effect">ver<i class="material-icons">add</i></a>
						</div>

						<div class="mdl-card__menu">
							<a href="" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--fab ">
								<i class="material-icons">add_shopping_cart_black</i>
							</a>
						</div>
					</div>
				';
	        }
	    }
	    $i+=1;
	}
	echo '</div>';

}




?>
	





		<main class="mdl-layout__content ">
			<div class="mdl-grid center-items ">



				<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
					<div class="mdl-tabs__tab-bar" style="background-color: #ffffff87;">
						<a href="#maisvendidos" class="mdl-tabs__tab is-active" style="color: #893218;">Mais Vendidos</a>
						<a href="#recomendados" class="mdl-tabs__tab" style="color: #893218;">Recomendados</a>
					</div>

					<div class="mdl-tabs__panel is-active" id="maisvendidos">
						<?php printprod("romance"); ?>
						<?php printprod("fantasia"); ?>
						<?php printprod("infantil"); ?>
					</div>
					<div class="mdl-tabs__panel" id="recomendados">
						<?php printprod("fantasia"); ?>
						<?php printprod("terror");; ?>
						<?php printprod("gospel"); ?>

					</div>
				</div>



			</div>



			<?php require_once("templates/_footer.php"); ?>
		</main>

	</div>
</body>
</html>