<?php 
if(session_status() == PHP_SESSION_NONE){
SESSION_START(); 

}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BU-electro</title>
		<link href="headstyle.css" rel="stylesheet" type="text/css" media="screen">
	</head>
<body>
	<header>
			<div id="logo-titre">
				<a href="http://localhost/projet%20BD/accueil1.php" > <img src="logo.png" alt="BU-electroLOGO"/></a>
				
				<h1>BU-ELECTRO</h1>
			</div>
		<nav>
				<ul>
				<?php if(isset($_SESSION['ident'])){ ?>
					<li><a href="http://localhost/projet%20BD/accueil1.php">ACCUEIL</a></li>
					<li><a href="http://localhost/projet%20BD/fiche.php"><?php echo strtoupper($_SESSION['ident']['login']) ?></a></li>
					<li><a href="http://localhost/projet%20BD/rep.php">VOS REPERTOIRES</a></li>
					<li><a href="http://localhost/projet%20BD/books.php">LIVRES</a></li>
					<li><a href="mailto: bu-electro@gmail.com">CONTACTER NOUS</a></li>
					<li><a href="http://localhost/projet%20BD/logout.php">DECONNECTION</a></li>
				<?php }else{ ?>
					<li><a href="http://localhost/projet%20BD/accueil1.php">ACCUEIL</a></li>
					<li><a href="http://localhost/projet%20BD/inscription.php">INSCRIPTION</a></li>
					<li><a href="http://localhost/projet%20BD/connexion.php">CONNEXION</a></li>
					<li><a href="mailto: bu-electro@gmail.com">CONTACTER NOUS</a></li>
			<?php } ?>
				</ul>
		</nav>
	</header>

