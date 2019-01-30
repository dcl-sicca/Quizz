<?php session_start();  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizz</title>
    <script src="js/jquery-3.3.1.min.js"></script>
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
        <?php include("include/inc_inscription.php"); ?>
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