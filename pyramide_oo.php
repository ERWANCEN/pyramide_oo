<?php
// j'appelle le fichier 'Pyramide.php'
require 'Pyramide.php';

// je crée une nouvelle instance, dans laquelle je base mon nouvel objet '$kheops' sur la classe 'Pyramide()'
$kheops = new Pyramide();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramide</title>

    <!-- style CSS -->
    <style>
        p {
            text-align: center;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div>
        <!-- j'appelle la méthode 'getPyramide()' pour afficher le résultat -->
        <?php echo $kheops->getPyramide(); ?>
    </div>
</body>
</html>