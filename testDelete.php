 <?php 
// require_once('bdd.php');


// $id = $_GET['id'];
// $requete = "DELETE FROM `famille_tbl` WHERE id= $id ";

// $reponses = $bdd->query($requete); 

// $execution=$bdd->exec($requete); -->

require_once('bdd.php');

$id = $_GET['id'];
$requete = "DELETE FROM `famille_tbl` WHERE id= $id ";

// Exécuter la requête DELETE
$execution = $bdd->exec($requete);

// Vérifier si l'ID a été bien supprimé
if ($execution !== false && $execution > 0) {
    echo "L'ID $id a été supprimé avec succès.";
} else {
    echo "La suppression a échoué ou l'ID $id n'existe pas.";
}
?>


