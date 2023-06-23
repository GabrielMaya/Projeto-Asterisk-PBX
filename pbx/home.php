<?php

/* Essa página precisa de uma seção iniciada (login)
para apresentar seu conteúdo, ou seja, só acessa a página
home logado com usuario e senha */

// código php a baixo validação de login

session_start();

if(!isset ($_SESSION['usuario']) == true)
{

	unset($_SESSION['login']);
	header("location: login.html"); // se não logado manda a tela de login

}
$logado = $_SESSION['usuario'];

?>
 
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/favicon-16x16.png" type="image/x-icon" />
	<link rel="stylesheet" href="assets/css/style.css">

	<title>Home</title>
</head>

<body class="page">

<header>
	<nav class="navbar">
		<ul>
			<li class="nav-item dropdown"><a href="home.php" class="">Home</a></li>

			<li class="nav-item dropdown"><a>Ramais</a> 
				<ul>
					<li><a class="dropdown-item" href="formularioEndRamal.php">Criar Ramais</a></li>
					<li><a class="dropdown-item" href="formularioEndRamalEdit.php">Editar Ramal</a></li>
					<li><a class="dropdown-item" href="formularioEndRamalDel.php">Excluir Ramal</a></li>
				</ul>
			</li>	

			<li class="nav-item dropdown"><a>Roteamento Externo</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="formularioIpTrunk.php">Criar Discagem Ip Trunk</a></li>
					<li><a class="dropdown-item" href="formularioConsCallIpTrunk.php">Edit Discagem Ip Trunk</a></li>
					<li><a class="dropdown-item" href="formularioIpTrunkDell.php">Delete Discagem Ip Trunk</a></li>
				</ul>
			</li>
			
			<li class="nav-item dropdown"><a>Filas de Atendimento</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="formularioCriarFila.php">Criar filas</a></li>
					<li><a class="dropdown-item" href="formularioConsFila.php">Editar Fila</a></li>
					<li><a class="dropdown-item" href="formularioDelFila.php">Deletar Fila</a></li>
					<li><a class="dropdown-item" href="formularioCriarPiloto.php">Criar Numero Piloto</a></li>
					<li><a class="dropdown-item" href="formularioDelPiloto.php">Deletar Numero Piloto</a></li>
				</ul>
			</li>

			<li class="dropdown-submenu"><a>Ramais na Fila</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="formularioFilaRamal.php">Cadastrar ramal na fila</a></li>
					<li><a class="dropdown-item" href="formularioConsFilaRamal.php">Retirar ramal da fila</a></li>
				</ul>
			</li>
							
			<li class="dropdown-submenu"><a>URA</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="formularioUraFileUpload.php">Carregar Áudio</a></li>
					<li><a class="dropdown-item" href="consultaAudioUra_2.php">Listar arquivos de  Áudio</a></li>
					<li><a class="dropdown-item" href="formularioCriarMenu.php">Configurar Menu</a></li>
				</ul>
			</li>
						
			<li class="nav-item dropdown"><a>Gravações & CDR</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="formularioChamadas.php">Relatorio de Chamadas</a></li>
					<li><a class="dropdown-item" href="formularioGravacao.php">Relatorio de Gravações </a></li>
					<li><a class="dropdown-item" href="formularioGraficoTotAnsBusNoans.php">Grafico por ramal</a></li>
				</ul>
			</li>

			<li class="nav-status"><a><?php echo $logado ?></a>|<a href="logout.php">Sair</a></li>

		</ul>
	</nav>
</header>

<script src="script.js"></script>

</body>
</html>