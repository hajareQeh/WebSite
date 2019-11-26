<?php

if(!empty($_POST['login']) && !empty($_POST['mdp'])){
	require 'connex.php';
	$requete=$connex->prepare('SELECT * FROM UTILISATEUR WHERE login= :login OR email = :login');
	$requete->execute(['login' => $_POST['login']]);
	$user=$requete->fetch();
	if(password_verify($_POST['mdp'],$user->mdp)){
			SESSION_START();
			$_SESSION['ident']= $user;
			header('Location: http://localhost/projet%20BD/compte.php');
			exit();
		}else{
			
			/***************/
			}
header('Location: http://localhost/projet%20BD/connexion.php');
}
?>
