<?php

require "database.php";

// Récupération de tous les participants

$query = $bdd->prepare('SELECT name FROM participants');
$query->execute();
$givers = $query->fetchAll(PDO::FETCH_ASSOC);



// LOGIQUE POUR LE TIRAGE AU SORT

$receivers = $givers; // On copie les données du tableau givers
$validAssignment = false; // on initialise une variable de désignationd des cadeaux à false
while (!$validAssignment) {

    shuffle($receivers); // Mélange du tableau receivers pour les désignations

    $validAssignment = true; // Les désignations sont faites donc on met à true

    for ($i = 0; $i < count($givers); $i++) {
        if ($givers[$i] === $receivers[$i]) {
            $validAssignment = false; // Si un donneur est affecté à lui-même, on sort de la boucle for et on reShuffle, ceci jusqu'à ce qu'il n'ait plus de correpsondances
            break;
        }
    }
}

?>

<!-- <!DOCTYPE html>
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

</html> -->