<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>exercice_php</title>
</head>

<body>
    <div class="container">
        <h1>Mon tableau</h1>
        <table class="table table-hover border rounded table-striped table-responsive-md">
            <thead>
                <tr>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">E-MAIL</th>
                    <th scope="col">TELEPHONE</th>
                </tr>
            </thead>

            <?php
            $file = fopen("client2.txt", "r") or die("Impossible d'ouvrir le fichier");

            while (!feof($file)) {

                $ligne = fgets($file);
                $tabLigne = explode(",", $ligne);

                for ($i = 0; $i < 7; $i++) {
                    if ($i == 0) {
                        $nom = $tabLigne[$i];
                    } else if ($i == 1) {
                        $prenom = $tabLigne[$i];
                    } else if ($i == 2) {
                        $mail = $tabLigne[$i];
                    } else if ($i == 3) {
                        $numTel = $tabLigne[$i];
                    }
                }
                echo "   <tr>
                            <td> $nom </td>
                            <td> $prenom </td>
                            <td> $mail </td>
                            <td> $numTel </td>
                         </tr>";
            }
            fclose($file) ?>

        </table>
    </div>
</body>

</html>