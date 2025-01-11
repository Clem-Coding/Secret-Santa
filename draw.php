<?php

// require "database.php";

// // Récupération de tous les participants

// $query = $bdd->prepare('SELECT name FROM participants');
// $query->execute();
// $givers = $query->fetchAll(PDO::FETCH_ASSOC);

// var_dump("LES DONNEURS", $givers);









// LOGIQUE POUR LE TIRAGE AU SORT
$givers = ['Isabelle', 'Luc', 'Pierre', 'Paul', 'Elodie', 'manu'];

// Mélange des donneurs
$shuffledGivers = $givers; // Copier le tableau pour le ré
shuffle($shuffledGivers); // Mélange des donneurs

var_dump("DONNEURS MIXED", $shuffledGivers);

// Copie des donneurs mélangés pour les récepteurs
$receivers = $shuffledGivers;

// Décalage circulaire des récepteurs pour éviter que le donneur ne soit son propre récepteur
do {
    // Décalage circulaire: on retire le dernier élément et on le remet au début
    $lastReceiver = array_pop($receivers);
    array_unshift($receivers, $lastReceiver);

    // Vérification que chaque donneur ne donne pas à lui-même
    $isValid = true;
    for ($i = 0; $i < count($givers); $i++) {
        if ($givers[$i] == $receivers[$i]) {
            $isValid = false;
            break;
        }
    }
} while (!$isValid); // Recommence tant qu'il y a des correspondances entre un donneur et son récepteur

var_dump("RECEVEURS", $receivers);
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
            echo '<td>' . htmlspecialchars($givers[$i]) . '</td>'; // Affiche le nom du donneur
            echo '<td>' . htmlspecialchars($receivers[$i]) . '</td>'; // Affiche le nom du récepteur
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>