<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizz</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header ----------------------------------------------------------------------------------------------->
<header>
    <div class="container-fluid">
        <?php include("include/header.php"); 
        include('request/req_questionnaire.php'); ?>
        
        
    </div>
</header>
<!-- main ----------------------------------------------------------------------------------------------->
<main>
    <div class="container-fluid">
        <H1>Questionnaires</H1>
        <h2>Hover Rows</h2>
        <p><span class="pseudo"><?php echo $pseudoUser; ?></span>, Voici la liste des Questionnaires</p>            
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Date création</th>
                <th>Statut</th>
                <th>Categorie</th>
                <td>Modification</td>
            </tr>
            </thead>
            <tbody>
            <?php

            while ($donnees = $reponse->fetch())
            {
            // echo $donnees['nom_activité'] . '<br />';
            echo '<tr>
            <td>'.$donnees['titre_question'] .'</td>
            <td>'.$donnees['pseudo'] .'</td>
            <td>'.$donnees['date_creation'] .'</td>
            <td>'.$donnees['statutquizz'] .'</td>
            <td>'.$donnees['nomcategorie'] .'</td>
            <td><a href="modif-questionnaire.php?id='. $_SESSION['id'].'&idquestionnaire='. $donnees['idquestionnaire'].'">Modifier</a></td>
            </tr>';

            }

            $reponse->closeCursor();
            ?>

            </tbody>
        </table>

    </div>




</main>
<!-- footer ----------------------------------------------------------------------------------------------->
<footer>
    <div class="container-fluid">
    <?php include("include/footer.php"); ?>
    </div>
</footer>
    

</body>
</html>