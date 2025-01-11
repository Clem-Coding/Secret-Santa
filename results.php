<?php


require 'draw.php';


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage au sort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tirage au sort des Donneurs et Receveurs</h2>

        <table class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Donneurs</th>
                    <th scope="col">Receveurs</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($givers); $i++) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($givers[$i]['name']) . '</td>';
                    echo '<td>' . htmlspecialchars($receivers[$i]['name']) . '</td>';
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>