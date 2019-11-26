<?php
try
{
$connect = new PDO('mysql:host=localhost;dbname=BU-electro;charset=utf8','root', '123456'); //Connexion
}
catch(Exception $con)
{
die('Erreur : '. $con->getMessage());
}
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

