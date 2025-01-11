<?php

require "database.php";

// Récupération de tous les participants

$query = $bdd->prepare('SELECT name FROM participants');
$query->execute();
$givers = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump("LES DONNEURS", $givers);




// LOGIQUE POUR LE TIRAGE AU SORT

$shuffled = $givers;
shuffle($shuffled);
var_dump($shuffled);

$receivers = [];

for ($i = 0; $i < count($shuffled); $i++) {

    if (!isset($receivers[$i])) { // si l'indice n'est pas occupé à cet endroit dans le tableau receivers
        if ($shuffled[$i] !== $givers[$i]) {  // et si les valeurs correspondantes des tableaux "suffled" et "givers" ne sont pas pareilles
            $receivers[$i] = $shuffled[$i];   // alors on assigne la valeur de shuffled à l'indice correspondant dans le tableau receivers
        } else {

            $receivers[$i + 1] = $shuffled[$i]; // sinon on assigne la valeur de suffle à l'indice d'après du tableau receivers
        }
    } else {
        // Si l'indice est déjà occupé, on cherche un autre indice libre
        $j = $i + 1;  // On commence à l'indice suivant

        // On cherche un indice libre :  tant que l'indice receivers cherché est occupé on passe à l'indice suivant avec j++
        while (isset($receivers[$j])) {  //isset($receivers[$j]) retourne true
            $j++;  // Donc on cherche encore et nn passe à l'indice suivant
        }

        // Une fois un indice libre trouvé, sort de la boucle while et on l'assigne
        $receivers[$j] = $shuffled[$i];
    }
}
// Affichage final
var_dump("LES RECEVEURS", $receivers);


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage au sort</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2 style="text-align:center;">Tirage au sort des Donneurs et Receveurs</h2>

    <table>
        <tr>
            <th>Donneurs</th>
            <th>Receveurs</th>
        </tr>
        <?php
        // On affiche le tableau avec les donneurs et récepteurs
        for ($i = 0; $i < count($givers); $i++) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($givers[$i]['name']) . '</td>'; // Affiche le nom du donneur
            echo '<td>' . htmlspecialchars($receivers[$i]['name']) . '</td>'; // Affiche le nom du récepteur
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>