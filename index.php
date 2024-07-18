<?php 
require_once('bdd.php');

$requete='SELECT * FROM	famille_tbl'; // écriture de la requête
$reponses = $bdd->query($requete); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Statut</th>
                    <th>Date de Naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reponses as $reponse): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($reponse['nom']); ?></td>
                        <td><?php echo htmlspecialchars($reponse['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($reponse['statut']); ?></td>
                        <td><?php echo htmlspecialchars($reponse['dateNaissance']); ?></td>
                    </tr>
                 <?php endforeach; ?>
            </tbody>        
        </table>
        <?php $execution=$bdd->exec($requete); ?>
</body>
</html>
