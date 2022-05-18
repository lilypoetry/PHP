<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /**
         * A partir du moment où le formulaire possède un champs de type "file",
         * on ajoute l'attribut "enctype" avec pour valeur "multipart/form-data"
         * à la balise "form"
         */
    ?>
    <form action="files.php" method="post" enctype="multipart/form-data">        
        <input type="file" name="fichier">
        <button>Envoyer</button>
    </form>
</body>
</html>