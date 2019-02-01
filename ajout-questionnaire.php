INSERT INTO `questionnaire` (`idquestionnaire`, `titre_question`, `date_creation`, `date_modification`, `idstatut`, `idmembre`, `idcategorie`, `statutquizz_idstatutquizz`, `categorie_idcategorie`, `membre_idmembre`) VALUES (NULL, 'Aformac', '2019-01-30', NULL, NULL, NULL, NULL, '1', '2', '1');

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
        <?php include("include/header.php"); ?>
        <?php
	if (isset($_GET['id']))
	{
		$getId = intval($_GET['id']); // Converti en nombre la saisie

		$reqUser = $bdd->prepare("SELECT * FROM membre WHERE idmembre = ?");
		$reqUser->execute(array($getId));
		$userInfo = $reqUser->fetch();
	}

	// Selon l'utilisateur
	if (isset($_SESSION['id']) AND $userInfo['idmembre'] == $_SESSION['id'])
	{
		$pseudoUser = $userInfo['pseudo'];
    }
    else {
        $pseudoUser = 'Inconnu';
    }
?>
        
    </div>
</header>
<!-- main ----------------------------------------------------------------------------------------------->
<main>
    <div class="container-fluid">
        <p>Bienvenue sur le Quizz <span class="pseudo"><?php echo $pseudoUser; ?></p>
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