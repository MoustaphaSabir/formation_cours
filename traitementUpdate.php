<?php 
// require_once('bdd.php');

// $id = intval($_GET['id']);
// $nom = $_GET['nom'];
// $prenom = $_GET['prenom'];


// $requete = "UPDATE famille_tbl SET nom = '$nom', prenom = '$prenom' WHERE id = $id";


// $execution = $bdd->exec($requete);


// if ($execution !== false) {
//     echo "Mise à jour réussie.";
// } else {
//     echo "Erreur lors de la mise à jour.";
// }

require_once('bdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Récupérer les données du formulaire
    $id = intval($_GET['id']);
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];

    // Construire la requête d'update
    $requete = "UPDATE famille_tbl SET nom = '$nom', prenom = '$prenom' WHERE id = $id";

    // Exécuter la requête
    $execution = $bdd->exec($requete);

    // Rediriger ou afficher un message de succès
    if ($execution !== false) {
        echo "Mise à jour réussie.";
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
?>


?>
