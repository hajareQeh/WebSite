

<form method="POST" action="../projet/index.php?page=includes/rechercheJoueuse">
	<p align="center"><h3> Recherche un Joueur </h3><br></p>
	<table border="0" width="60%" cellspacing="0" cellpadding="0">
	
	<?php
if(!isset($_POST["crit"]))
{
?>
		<tr>
			<td width="200px" ><label for="crit">Choisir le critère de recherche :</label> </td>
			
			<td>
		   
       <select name="crit" id="crit">
           <optgroup label="identité joueure">
			   <option value="idj">ID joueur</option>
               <option value="nomj">Nom</optionc>
               <option value="prenomj">Prenom</option>
			   <option value="agej">Age</option>
               
               
           </optgroup>
           <optgroup label="Adresse">
            	<option value="noml">Nom du lieu</option>
           </optgroup>
         
       </select>

</td>
</tr>
<?php
}
else if (isset($_POST["crit"]) && $_POST["crit"]=="idj")
{

?>
<tr>
			<td width="200px" ><label for="idj">ID de la joueur :</label> </td>
			
			<td>
			<input type="number" name="idj" id="idj" placeholder="Tapez un ID" >
			</td>
</tr>			
<?php
			
}
else if (isset($_POST["crit"]) && $_POST["crit"]=="nomj")
{

?>
<tr>
			<td width="200px" ><label for="nomj">Nom de la joueur :</label> </td>
			
			<td>
			<input type="text" name="nomj" id="nomj" placeholder="Tapez un nom" >
			</td>
</tr>			
<?php
}
else if (isset($_POST["crit"]) && $_POST["crit"]=="prenomj")
{

?>
<tr>
			<td width="200px" ><label for="prenomj">Prenom de la joueur :</label> </td>
			
			<td>
			<input type="text" name="prenomj" id="prenomj" placeholder="Tapez un prenom" >
			</td>
</tr>			
<?php

}
else if (isset($_POST["crit"]) && $_POST["crit"]=="agej")
{
?>
<tr>
			<td width="200px" ><label for="prenomj">Age de la joueur :</label> </td>
			
			<td>
			<input type="number" name="agej" id="agej" placeholder="Tapez un age" >
			</td>
</tr>			

<?php
}
else if (isset($_POST["crit"]) && $_POST["crit"]=="noml")
{
?>
<tr>
			<td width="200px" ><label for="noml">Nom de lieu de la joueur :</label> </td>
			
			<td>
			<input type="text" name="noml" id="noml" placeholder="Tapez L'adresse de  joueur" >
			</td>
</tr>			
<?php
}

?>
	 </table>
	<p><input type="submit" value="Recherche" name="B1"> </p>
</form>
<?php
 if(isset($_POST["idj"]) || isset($_POST["nomj"]) || isset($_POST["prenomj"]) || isset($_POST["agej"]) ||  isset($_POST["noml"])  ){
 if(isset($_POST["idj"]))
 {
 $idj=$_POST["idj"];
$req1="SELECT * FROM joueur where paseudoJoueur= $idj;";
$reqi=mysqli_query($connexion,$req1);

}
 if(isset($_POST["nomj"]))
 {
 $nomj=$_POST["nomj"];
$req1="SELECT * FROM joueur where nom='$nomj';";
$reqi=mysqli_query($connexion,$req1);

}
 if(isset($_POST["prenomj"]))
 {
 $prenomj=$_POST["prenomj"];
$req1="SELECT * FROM joueur where prenom='$prenomj';";
$reqi=mysqli_query($connexion,$req1);

}
 if(isset($_POST["agej"]))
 {
 $agej=date('Y')-$_POST["agej"];
 
$req1="SELECT * FROM joueur where age=$agej;";
$reqi=mysqli_query($connexion,$req1);

}
 
 if(isset($_POST["noml"]))
 {
 $noml=$_POST["noml"];
$req1=" SELECT * FROM joueur where adresse=$noml) ;";
$reqi=mysqli_query($connexion,$req1);

}

?>
<p align="center"><h3> Recherche un Joueur</h3><br></p>
	<table border="1" width="100%" cellspacing="0" cellpadding="0">
	<p>Affichage des Joueures rechercher :</p>
	<tr>
			<td> ID </td>
			<td> Nom </td>
			<td> Prenom</td>
			<td> Date de naissance</td>
			<td>Adresse</td>
			<td>Date d'inscription</td></tr>
			<?php
			while($j=mysqli_fetch_assoc($reqi)){
			
			?><tr>
			<td> <?php echo $j["paseudoJoueur"] ;?></td>
			<td> <?php echo $j["nom"] ;?></td>
			<td> <?php echo $j["prenom"] ;?></td>
			<td> <?php echo $j["age"] ;?></td>
			<td> <?php echo $j["adresse"] ;?></td>
			<td> <?php echo $j["inscridate"] ;?></td>
	</tr>
			<?php }
			?>

	
	
	
	</table>
<?php
}
?>