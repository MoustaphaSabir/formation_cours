<?php 
require_once('bdd.php');

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$statut = $_GET['statut'];
$requete = "INSERT INTO famille_tbl(nom, prenom, statut) values ('$nom','$prenom', '$statut' )  ";

$reponses = $bdd->query($requete); 

$execution=$bdd->exec($requete);