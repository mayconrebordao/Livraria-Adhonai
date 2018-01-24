<?php require_once('templates/_functions.php'); ?>
<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="utf-8">
	<title>Livraria Adhonai</title>
	
    <meta name="theme-color" content="#2196F3">
    <meta name="msapplication-navbutton-color" content="#2196F3">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#2196F3">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="turbolinks-cache-control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">   
	
	<link rel="stylesheet" href="css/material.blue_grey-deep_orange.min.css">
	<link rel="stylesheet" href="css/dist/material-design-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/material.min.js"></script>

	<script src="js/jquery.js"></script>
	<script src="js/jquery.form.js"></script>
	<scritp src="js/jquery.timer.js"></scritp>
	<script src="js/jquery-3.2.1.min.js"></script>
	
</head>
<body>
	<!-- Fixed header -->
	<div id="tudo" class="mdl-layout mdl-js-layout mdl-layout--fixed-header" style="background: url('imgs/back.jpg') center /cover;">
	  <header id="topo" class="mdl-layout__header mdl-layout__header--transparent" style="color: #123123;">
	    <div class="mdl-layout__header-row" >
	      <!-- Title -->
	      <span class=" mdl-layout--large-screen-only"><a style="text-decoration: none; color: white;" href="index.php"><span class="mdl-layout-title"><img src="imgs/testelogo2.svg" style="width: 300px; height: 230px; margin-top: -45px;" ></span></a></span>
	      <!-- Add spacer, to align navigation to the right -->
	      <div class="mdl-layout-spacer"></div>
	      <!-- Navigation. We hide it in small screens. -->

			<form action="#">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
					<label class="mdl-button mdl-js-button mdl-button--icon" for="sample6" style="color: #D05540;">
						<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="sample6" style="color: white;">
						<label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
					</div>
				</div>
			</form>
			<a href="index.php" class="mdl-layout--large-screen-only mdl-button mdl-js-button " style="color: #D05540"><i class="material-icons">home</i>Home</a>
			<div class="mdl-badge mdl-badge--overlap mdl-layout--small-screen-only" data-badge="1">
				<a id="cart" class="mdl-button mdl-js-button mdl-button--icon" style="color: #D05540;">
					<i class="material-icons">shopping_cart</i>
				</a>
				<ul style="list-style-type: none;" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="cart">
					<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Carrinho</a></li>
					<li disabled class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Meus Pedidos</a></li>
				</ul>
			</div>
			<div class="mdl-badge mdl-badge--overlap mdl-layout--large-screen-only" data-badge="1">
				<a id="cart2" class="mdl-button mdl-js-button " style="color: #D05540;">
					<i class="mdl-button--icon material-icons">shopping_cart</i>Carrinho
				</a>
				<ul style="list-style-type: none;" class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="cart2">
					<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Carrinho</a></li>
					<li disabled class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Meus Pedidos</a></li>
				</ul>
			</div>

			<!-- Right aligned menu below button -->



	      <nav class="mdl-navigation mdl-layout--large-screen-only" style="justify-content: left;" >
			
			<a id="categorias2" class="mdl-button mdl-js-button" style="color: #D05540;">
				<i class="mdl-button mdl-js-button mdl-button--icon material-icons">book</i>categorias
			</a>

			<ul style="list-style-type: none;" class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="categorias2">
				<li disabled class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=fantasia">Fantasia</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=infantil">Infantil</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=gospel">Gospel</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=romance">Romance</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=terror">Terror</a></li>
			</ul>

			<a id="contauser1" class="mdl-button mdl-js-button " style="color: #D05540;">
				<i class="mdl-button--icon material-icons">person</i>Usuário
			</a>

			<ul style="list-style-type: none;" class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="contauser1">
				<li disabled class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Perfil</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Cadastrar</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Logar</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Sair</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Atendimento</a></li>
			</ul>
			


	      </nav>



	    </div>
	  </header>
	  <div class="mdl-layout__drawer mdl-layout--small-screen-only">

		<span class="mdl-layout-title" style="margin-bottom: -50px;" ><a style="text-decoration: none; color: white;" href="index.php"><span class="mdl-layout-title"><img src="imgs/testelogo2.svg" style="width: 300px; height: 230px; margin-top: -100px;" ></span></a></span></a></span>

	    <nav class="mdl-navigation">
	    	<a href="index.php" class="mdl-button mdl-js-button mdl-button--colored mdl-button--primary"><i class="material-icons">home</i>Home</a>
			<a id="categorias1" class="mdl-button mdl-js-button mdl-button--colored mdl-button--primary" >
				<i class="mdl-button mdl-js-button mdl-button--icon material-icons">book</i>categorias
			</a>

			<ul style="list-style-type: none;" class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="categorias1">
				<li disabled class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=fantasia">Fantasia</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=infantil">Infantil</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=gospel">Gospel</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=romance">Romance</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="produtos.php?categoria=terror">Terror</a></li>
			</ul>

			<a id="contauser2" class="mdl-button mdl-js-button mdl-button--colored mdl-button--primary">
				<i class="material-icons">person</i>Usuário
			</a>

			<ul style="list-style-type: none;" class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="contauser2">
				<li disabled class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Perfil</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Cadastrar</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Logar</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Sair</a></li>
				<li class="mdl-menu__item"><a style="text-decoration: none;" id="menulink" href="">Atendimento</a></li>
			</ul>



	    </nav>
	  </div>