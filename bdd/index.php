<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <form action="ajouter.php" method="post">
        <div class="form-control mb-3">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">            
        </div>
        <div class="form-control mb-3">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom">            
        </div>
        <div class="form-control mb-3">
            <label for="sexe" type="text" name="sexe" class="form-control" id="sexe" placeholder="Gender">
            <select class="form-select" id="sexe"name="sexe" placeholder="sexe">
                <option selected>Gender</option>
                <option value="Femme">Femme</option>
                <option value="Homme">Homme</option>
            </select>
        </div>
        <div class="form-control mb-3">
            <label for="ville">Ville</label>
            <input type="text" name="ville" class="form-control" id="ville" placeholder="Ville">            
        </div>
        <div class="form-control mb-3">
            <label for="age">Âge</label>
            <input type="int" name="age" class="form-control" id="age" placeholder="Âge">            
        </div>
        <button>Submit</button>
    </form>
</body>
</html>