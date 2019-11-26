<?php
SESSION_START();
require 'connex.php';

if(!preg_match('/^[a-zA-Z0-9_]+$/',$_POST['login'])){
	$errors['login'] = "VOTRE LOGIN N'EST PAS VALIDE";
}
else{
	$requete= $connect->prepare('SELECT login FROM UTILISATEUR WHERE login = ?');
	$requete->execute([$_POST['login']]);
	$result= $requete->fetch();
	if($result){
		$errors['login']='ce login existe deja';	
	}

}



if ($_POST['mdp']!=$_POST['mdpv'])
{
$errors['mdp']= "votre mote de passe n'est pas valide";
}

if(!strstr($_POST['email'], '.'))
{
$errors['email'] = "VOTRE EMAIL N'EST PAS VALIDE";

}
else{
	$requete= $connect->prepare('SELECT email FROM UTILISATEUR WHERE email = ?');
	$requete->execute([$_POST['email']]);
	$result= $requete->fetch();
	if($result){
		$errors['email']='ce email existe deja';	
	}
}

if(empty($errors)){

$requete= $connect->prepare("INSERT INTO UTILISATEUR (login,nom,prenom,email,date_insc,age,mdp)VALUES(:login ,:nom ,:prenom ,:email ,:date_insc ,:age ,:mdp )");
$mdpcrypt =password_hash($_POST['mdp'],PASSWORD_BCRYPT);
$requete->execute(array(
    ':login' => $_POST['login'],
    ':nom' => $_POST['nom'],
    ':prenom' => $_POST['prenom'],
    ':email' => $_POST['email'],
    ':date_insc' =>date("Y-m-d"),
    ':age' => $_POST['age'],
	':mdp' => $mdpcrypt ));	

header('Location: connexion.php');
exit();
}
else{
$_SESSION['eof']=$errors;
header('Location: inscription.php');


}


?>
