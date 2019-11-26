<?php
 echo "<br> <br>";
include("connex.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TOP10</title>
		<link href="bestbookstyle.css" rel="stylesheet" type="text/css" media="screen">
	</head>
<body>
	<?php include "head.php" ?>
	<div id="holder">
	<div class="tab">
	<h1>La Liste des 10 livre les plus populaire :</h1>
		
	<table border="2" width="100%" cellspacing="0" cellpadding="7">
	<tr><th>titre</th><th>existe dans :</th></tr>
	<?php
	 $result = $connect->query('SELECT titre_livre,COUNT(nom_rep) 									AS exist_dans 
								FROM rep_contenu
								GROUP BY titre_livre
								ORDER BY exist_dans DESC
								LIMIT 0, 10');
	 while ($book = $result->fetch())
  {
	echo '<tr><td align="center">'.$book['titre_livre'].
			'</td><td align="center">'.$book['exist_dans'].' repertoire </td></tr>';
	}
	$result->closeCursor();
	?>
	</table>
	</div>
	<aside>
		<div class="affiche">
		<h1>nombre de livre disponible :</h1>
		<?php
		$result = $connect->query('SELECT COUNT(*) as res FROM LIVRE');
		$nbr = $result->fetch();
		echo $nbr['res'];
		$result->closeCursor();
		?></div>
		<div class="affiche">
		<h1>la liste de tout les categorie :</h1>
		<ul>
		<?php
		$result = $connect->query('SELECT nom FROM CATEGORIE');
		while($name = $result->fetch()){
		?>
		<li>
		<?php
		echo $name['nom'];
		?></li>
		<?php		
		}
		$result->closeCursor();
		?>
		</ul>
		</div>
	</aside>

	</div>
	<?php include "pied.html" ?>
</body>
</html>
