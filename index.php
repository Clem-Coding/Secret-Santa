<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le père Noël secret</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
    <header class="bg-danger text-white text-center py-4">
        <h1>Secret Santa</h1>
    </header>

    <main>
        <div class="container">
            <form method="POST" action="draw.php">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for="name" class="visually-hidden">Nom</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        placeholder="Votre nom"
                                        name="name[]"
                                        required />
                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <label for="mail" class="visually-hidden">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="mail"
                                        placeholder="Rentrez votre mail"
                                        name="email[]"
                                        required />
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deleteBtn" aria-label="Supprimer la ligne">
                                    <span class="bi bi-trash-fill"></span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary addBtn">Ajouter une ligne</button>
                <button type="submit" class="btn btn-success" name="validate">Tirage au sort</button>
            </form>
        </div>
    </main>

    <script src="script.js"></script>
</body>

</html>