<!-- Le poids d'un fichier transférable se configure dans le fichier php.ini
Il faut l'éditer et modifier la variable:
upload_max_file_size = 2M // Ici, ça signifie 2 Méga Octets maximum -->

<?php

$error = array(); // ou $error = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    } else {
        $error['lastname'] = 'Votre nom n\'est pas renseigné';
    }

    if (!empty($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    } else {
        $error['firstname'] = 'Votre prénom n\'est pas renseigné';
    }

    if (!empty($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $error['gender'] = 'Votre civilité n\'est pas renseigné';
    }

    // On stocke le nom du fichier transféré dans une variable grâce à la variable superglobale $_FILES.
    // Cette dernière contient un tableau des fichiers transférés. Chaque élément du tableau contenant également un tableau d'infos
    // de chaque fichier
    if (!empty($_FILES['file']['name'])) {

        $fileName = $_FILES['file']['name'];
        //var_dump($_FILES);

        // On fait appel à la fonction pathinfo qui retourne un tableau avec plusieurs infos, comme l'extension
        $fileInfo = pathinfo($_FILES['file']['name']);
        //var_dump($fileInfo);
        $extension = strtolower($fileInfo['extension']);
        if ($extension != 'pdf') {
            $error['fileName'] = 'Le fichier transféré n\'est pas un pdf';
        }
    } else {
        $error['fileName'] = 'Vous n\'avez pas transféré de fichier';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <script src="./public/assets/js/menu.js" defer></script>
    <title>Corrigés</title>
</head>

<body>

    <main class="mt-5">

        <div id="content">

            <?php if ($_SERVER['REQUEST_METHOD'] != 'POST' || !empty($error)) { ?>
                <!-- Ici, l'action codée en php permet de renvoyer sur la page courante en protégeant notre code du hacking. -->
                <form method="post" enctype='multipart/form-data'>
                    <div>
                        <select name="gender" class="form-control">
                            <!--Préférer mettre des nombres en value dans la balise option du select pour éviter les erreurs-->

                            <!--selected permet d'afficher cette option par défaut
                                disabled empêche l'utilisateur de sélectionner cette option-->
                            <option selected disabled>Votre civilité</option>
                            <!-- Ici dans la ternaire on regarde si la variable existe et qu'elle est égale à la valeur courante de l'option
                                Dans ce cas, on selectionne l'option concernée -->
                            <option value="Mr" <?= (isset($gender) && $gender == 'Mr') ? 'selected' : '' ?>>M</option>
                            <option value="Mrs" <?= (isset($gender) && $gender == 'Mrs') ? 'selected' : '' ?>>Mme</option>
                        </select>
                    </div>

                    <div class="error">
                        <!-- L'usage de htmlentities permet de convertir certains caractères en entités html -->
                        <?= $error['gender'] ?? '' ?>
                    </div>

                    <div>
                        <input class="mt-3 form-control" type="text" name="lastname" id="lastname" placeholder="Entrez votre nom" value="<?= $lastname ?? '' ?>">
                    </div>

                    <div class="error">
                        <?= $error['lastname'] ?? '' ?>
                    </div>

                    <div>
                        <input class="mt-3 form-control" type="text" name="firstname" id="firstname" placeholder="Entrez votre prénom" value="<?= $firstname ?? '' ?>">
                    </div>

                    <div class="error">
                        <?= $error['firstname'] ?? '' ?>
                    </div>

                    <div>
                        <!-- champs envoi fichier -->
                        <input type='file' name='file' id='file' class="mt-3 form-control">
                    </div>

                    <div class="error">
                        <?= $error['fileName'] ?? '' ?>
                    </div>

                    <button class="mt-3 btn btn-primary" type="submit">Envoyer !</button>
                </form>
            <?php } else { ?>

                <div>
                    <?= $gender . ' ' . $firstname . ' ' . $lastname ?>
                </div>

                <div>
                    L'extention du fichier transféré est bien un <?= $extension ?>
                </div>

            <?php } ?>
        </div>

    </main>


</body>

</html>