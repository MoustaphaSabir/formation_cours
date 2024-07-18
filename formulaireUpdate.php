<?php 
// require_once('bdd.php');

// $id = intval($_GET['id']); 
// var_dump($_GET['id']);

// $requete = "SELECT * FROM famille_tbl WHERE id = $id";

// $execution = $bdd->query($requete);


// $result = $execution->fetch(PDO::FETCH_ASSOC);

// 

// <form action="traitementUpdate.php" method="get">
//     <label for="nom">Nom</label>
//     <input type="text" name="nom" value="">

//     <label for="prenom">Prenom</label>
//     <input type="text" name="prenom" value="">

//     <label for="id">ID</label>
//     <input type="hidden" name="id" value="">

require_once('bdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Assurez-vous que l'ID est un entier pour minimiser les risques d'injection SQL
    $id = intval($_GET['id']); 

    // Construire la requête pour récupérer les données
    $requete = "SELECT * FROM famille_tbl WHERE id = $id";

    // Exécuter la requête
    $execution = $bdd->query($requete);

    // Récupérer le résultat de la requête
    $result = $execution->fetch(PDO::FETCH_ASSOC);
}


 if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($result)): ?>
    <form action="traitementUpdate.php" method="get">
        <label for="nom">Nom</label>
        <input type="text" name="nom" value="<?php echo htmlspecialchars($result['nom']); ?>">

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" value="<?php echo htmlspecialchars($result['prenom']); ?>">

        <label for="id">ID</label>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

        <input type="submit" value="Mettre à jour">
    </form>
<?php endif; ?>

</form>
