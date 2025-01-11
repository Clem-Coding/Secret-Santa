<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le père Noël secret</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
</head>

<body>
    <header class="bg-danger text-white text-center py-4">
        <h1>Le Père Noël Secret</h1>
    </header>

    <main>
        <div class="container">
            <form method="POST" action="add-participants.php">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for="name" class="form-label visually-hidden">Nom :</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        aria-describedby="nameHelp"
                                        placeholder="Votre nom"
                                        name="name[]"
                                        required />

                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <label for="mail" class="form-label visually-hidden">Email :</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="mail"
                                        aria-describedby="emailHelp"
                                        placeholder="Rentrez votre mail"
                                        name="email[]"
                                        required />

                                </div>
        </div>
        </td>
        </tr>
        </tbody>
        </table>
        <button class="btn btn-primary btn-js">Ajouter une ligne</button>
        <button type="submit" class="btn btn-success" name="validate">
            Tirage au sort
        </button>
        </form>
        </div>
    </main>
    <script src="script.js"></script>
</body>

</html>