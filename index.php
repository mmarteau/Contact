<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    <!-- Mon css -->
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Mon javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>Liste</title>
</head>
<body>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>Contact</h1>
        <label for="listeDeroulante">Liste déroulante : </label>

        <!-- Affichage en Ajax de toutes les fonctions (listeFonction) -->
        <select name="categ" id="listeFonction" class="form-control">
        </select><br>

        <div class="centrage mesBoutons">
            <button id="bouton" class="btn btn-success">Rechercher</button>
            <button id="boutonAfficher" class="btn btn-primary">Tout afficher</button>
        </div>

        <!-- Affichage en Ajax de tous les contatcs selon la fonction dans la liste déraoulante (tableauResultat) -->
        <table class="table table-responsive">

            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Fonction</th>
            </tr>
            </thead>

            <tbody id="tableauResultat">
            <!-- Mon Ajax -->
            </tbody>
        </table>
    </div>
</div>
</html>