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
    <p><span class="pseudo"><?php echo $pseudoUser; ?>, Voici les Questionnaires</p>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Membre</th>
      <th scope="col">Date Création</th>
      <th scope="col">Statut</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Modifier</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
    </div>

    <?php

while ($donnees = $reponse->fetch())
{
// echo $donnees['nom_activité'] . '<br />';
echo '<tr><td>'.$donnees['titre_question'] .'</td><td>'.$donnees['date_creation'] .'</td><td>aa</td><td></td></tr>';

}

$reponse->closeCursor();
?>


</main>
<!-- footer ----------------------------------------------------------------------------------------------->
<footer>
    <div class="container-fluid">
    <?php include("include/footer.php"); ?>
    </div>
</footer>
    

</body>
</html>