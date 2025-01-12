<?php
session_start(); // Démarrer la session



if (isset($_POST['validate'])) {


    //  
    if (!empty($_POST['name']) && !empty($_POST['email'])) {




        $participant_names = array_map('htmlspecialchars', $_POST['name']);
        $participant_emails = array_map('htmlspecialchars', $_POST['email']);

        $givers = $participant_names;


        if (count($givers) >= 3) {



            function drawGifts($givers)
            {

                $receivers = $givers;
                $validAssignment = false;

                while (!$validAssignment) {
                    shuffle($receivers);
                    $validAssignment = true;


                    for ($i = 0; $i < count($givers); $i++) {
                        if ($givers[$i] === $receivers[$i]) {
                            $validAssignment = false;
                            break;
                        }
                    }
                }

                return ['givers' => $givers, 'receivers' => $receivers];
            }


            $result = drawGifts($givers);
            $givers = $result['givers'];
            $receivers = $result['receivers'];

            var_dump($givers);
            var_dump($receivers);


            // Stocker les résultats dans la session
            $_SESSION['givers'] = $givers;
            $_SESSION['receivers'] = $receivers;


            header('Location: results.php');
            exit;
        } else {
            echo "Il faut minimum 3 participants pour participer au tirage";
        }
    } else {
        echo 'Veuillez remplir tous les champs.'; // Required dans le formulaire, donc à priori pas besoin
    }
}
