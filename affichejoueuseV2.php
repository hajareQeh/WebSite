<?php
 echo "<br> <br>";
include("connex.php");
?>

	<table border="1" width="100%" cellspacing="0" cellpadding="0">
	<p><center>Affichage des Joueures  :</center></p>

<?php



 echo " 
 <tr>
  <td id='tab'>pseudoJoueur </td>
  <td id='tab'> nom  joueur </td>
</tr> ";

  $result = $connect->query('SELECT id_livre, titre FROM LIVRE');

  while ($row = $result->fetch())
  {
  $paseudoJoueur = $row['id_livre'];
  $nomJoueur = $row['titre'];
 

 


echo '
<tr>
 <td id="tab">'. $paseudoJoueur.' </td> 
<td id="tab">'. $nomJoueur .' </td>';

  

  echo '</tr>';
}

echo '</table>';

?>
