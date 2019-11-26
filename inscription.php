<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>INSCRIPTION</title>
	<link href="inscriptionstyle.css" rel="stylesheet" type="text/css">
    </head>
	<body>
<?php include "head.php"; ?>
<form name="inscription" method="post" action="traitement.php">
 
   <fieldset >
		 <legend>Vos coordonnées : ....</legend>  
	<div id="holder" >
		<div id="write">
      
	   
	   <label for="login">LOGIN :</label>
       <input type="text" name="login" id="login" maxlength="30" />
      
		<label for="nom">NOM :</label>
       <input type="text" name="nom" id="nom" maxlength="30" required/>

       <label for="prenom">PRENOM :</label>
       <input type="text" name="prenom" id="prenom" maxlength="30" required/>
 
       <label for="email">EMAIL :</label>
       <input type="email" name="email" id="email" required/>

	   <label for="age">AGE :</label>
       <input type="number" name="age" id="age" max="120" min="7" reauired/>
		
		<label for="mdp">MOT DE PASSE :</label>
       <input type="password" name="mdp" id="mdp" required/>
		
		<label for="mdpv">CONFIRMER VOTRE MOTE DE PASSE :</label>
       <input type="password" name="mdpv" id="mdpv" required/>
		
		</div>
		<div id="logo-img">
			<img src="logo.png" alt="logo">

		</div>
	</div>
   </fieldset>
<p>
 <input type="submit" value="Envoyer" />
 <input type="reset" value="Annuler"/>
 </p>
<?php include "pied.html"; ?>
</form>
</body>
</html>
