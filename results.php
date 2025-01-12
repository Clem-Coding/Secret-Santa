<?php
session_start();


if (isset($_SESSION['givers']) && isset($_SESSION['receivers'])) {

    $givers = $_SESSION['givers'];
    $receivers = $_SESSION['receivers'];
} else {

    header('Location: index.php');
    exit;
}

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
    <header class="bg-danger text-white text-center py-4">
        <h1 class="text-center mb-4">Résultat du tirage au sort</h1>
    </header>


    <div class="container mt-5">
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
                    echo '<td>' . htmlspecialchars($givers[$i]) . '</td>';
                    echo '<td>' . htmlspecialchars($receivers[$i]) . '</td>';
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>