<?php

require "database.php";



if (isset($_POST['validate'])) {


    if (!empty($_POST['name']) && !empty($_POST['email'])) {


        //htmlspecialchars — Convertit les caractères spéciaux en entités HTML; conseillé pour éviter 
        //certains types de vulnérabilités liées à la sécurité, comme les attaques de type Cross-Site Scripting (XSS).
        // ex : <script> devient "&lt;script&gt"


        $participant_names = array_map('htmlspecialchars', $_POST['name']);
        $participant_emails = array_map('htmlspecialchars', $_POST['email']);
        var_dump($participant_emails);


        $query = $bdd->prepare('INSERT INTO participants (name, email) VALUES( :name, :email)');

        foreach ($participant_names as $index => $name) {
            $email = $participant_emails[$index];

            $parameters = [
                'name' => $name,
                'email' => $email,

            ];

            $query->execute($parameters);
        }


        echo "Participants ajoutés avec succès!.";
    } else {


        echo "Les champs ne sont pas tous remplis";
    }
}
