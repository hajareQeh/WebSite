<?php
if(!empty($_POST['login']) && !empty($_POST['mdp'])){

	require 'connex.php';
	$requete=$connect->prepare('SELECT * FROM UTILISATEUR WHERE login= ? ');
	$requete->execute([$_POST['login']]);
	
	$user=$requete->fetch();
	//$userpwd=password_hash($_POST['mdp'],PASSWORD_BCRYPT);
	if(password_verify($_POST['mdp'],$user['mdp'])){
				session_start();
				$_SESSION['ident']= $user;
				header('Location: http://localhost/projet%20BD/accueil1.php');
				exit();	
			}else{
					
				header('Location: http://localhost/projet%20BD/connexion.php');
				exit();
}
}else{
echo "remplire tout les champs ";
}

?>
