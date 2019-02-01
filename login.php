<?php
	session_start();

    include("request/logbdd.php");
    
    $message = null;

	if (isset($_POST['formConnexion']))
	{
		$pseudoUser = htmlspecialchars($_POST['pseudo']);
		$passwordUser = ($_POST['motdepasse']);

		if (!empty($pseudoUser) && !empty($passwordUser))
		{
			$reqUser = $bdd->prepare("SELECT * FROM membre WHERE pseudo = ? AND motdepasse = ?");
			$reqUser->execute(array($pseudoUser, $passwordUser));
			$userExist = $reqUser->rowCount();

			if ($userExist === 1)
			{
				$userInfo = $reqUser->fetch();
				$_SESSION['id'] = $userInfo['idmembre'];
				$_SESSION['pseudo'] = $userInfo['pseudo'];
				$_SESSION['password'] =$userInfo['motdepasse'];
				header("Location: index.php?id=" . $_SESSION['id']);
			}
			else
			{
				$message = "Vos identifiants sont incorrects !";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Connexion - Inscription</title>
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
				<h1>Connexion</h1>

				<!-- INSCRIPTION-->
				<div id="log">
					<form action="" method="post">
						<label for="nomUtilisateur">Pseudo</label> <br />
						<input type="text" name="pseudo" required="">

						<label for="motDePasse">Mot de passe</label> <br />
						<input type="password" name="motdepasse" required> <br />

						<div>
							<input type="submit" name="formConnexion" value="Connexion">
						</div>
					</form>
						
					<div>
						<a href="inscription.php">Créer un compte ?</a>
					</div>

					<?php 
					if ($message!=null) {
					echo "<p>" . $message . "</p>"; 
					}
					?>

				</div>
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

