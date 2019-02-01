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

        
    </div>
</header>
<!-- main ----------------------------------------------------------------------------------------------->
<main>
    <div class="container-fluid">
        <?php

        include("request/req_statutmembre.php");
        $userStatut = null;

        if (isset($_GET['id']))
	    {
            $getId = intval($_GET['id']);
            $reqStatut->execute(array($getId));
            $userStatut = $reqStatut->fetch();
        }
        

        ?>


        





        <?php
        if (isset($_SESSION['id']) AND $userStatut['idstatutmembre'] == 1)
        { 
            
            ?>

            <p>Bienvenue sur le Quizz <span class="pseudo"><?php echo $pseudoUser; ?> vous etes un <?php echo $userStatut['statutmembre']; ?></p>

            statut = <?php echo $userStatut['idstatutmembre']; ?>

        <?php
        } 

        elseif ($userStatut['idstatutmembre'] == 2) 
        {
            ?>
            <p>Bienvenue sur le Quizz</p>

            <p>Ici on affiche le tableau des questionnaires pour les lecteurs</p>

            statut = <?php echo $userStatut['idstatutmembre']; ?>
        <?php
        }
        elseif ($userStatut['idstatutmembre'] == 3) 
        {
            ?>
            <p>Bienvenue sur le Quizz</p>

            <p>Ici on affiche le tableau des questionnaires pour les abonnés</p>

            statut = <?php echo $userStatut['idstatutmembre']; ?>
        <?php
        }
        else {?>
            <p>Bienvenue sur le Quizz</p>

            Ici on affiche le tableau des questionnaires pour les non connecté

        <?php
        }
        ?>
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