<?php
	// session_start();

    include("request/logbdd.php");
    
    $pseudo = "- - -";

	if (isset($_GET['id']))
	{
		$getId = intval($_GET['id']);

		$reqUser = $bdd->prepare("SELECT * FROM membre WHERE idmembre = ?");
		$reqUser->execute(array($getId));
		$userInfo = $reqUser->fetch();
	}

	// Selon l'utilisateur
	if (isset($_SESSION['id']) AND $userInfo['idmembre'] == $_SESSION['id'])
	{
		$log = ' <a href="deconnexion.php">Deconnexion</a>';
		$lienAccueil = "index.php?id=" . $_SESSION['id'];
        $profil = "profil.php?id=" . $_SESSION['id'];
        $questionnaire = "questionnaire.php?id=" . $_SESSION['id'];
        $pseudo = $userInfo['pseudo'];
	}
	else
	{
		$log = '<a href="login.php">Connexion / Inscription</a>';
		$lienAccueil = "index.php";
		$profil = "profil.php";
	}

?>
<div class="row">
    <div class="col-9">
        <h1>Quizz</h1>
    </div>

    <div class="col-3">
        <nav>
            <ul>
                <li>
                    <i class="fas fa-bars"></i>

                 
                        <?php
                        // Selon l'utilisateur
                        if (isset($_SESSION['id']) AND $userInfo['idmembre'] == $_SESSION['id'])
                        {
                            ?>
                            <ul class="submenu">
                            <li><a href="<?php echo $lienAccueil; ?>">Accueil</a></li>
                            <li><a href="<?php echo $profil; ?>">Mon Profil</a></li>
                            <li><a href="<?php echo $questionnaire; ?>">Questionnaire</a></li>    
                            <li><?php echo $log; ?></li>
                            </ul>
                            <?php
                        }
                        else
                        { 
                            ?>
                            <ul class="submenu">
                            <li><a href="<?php echo $lienAccueil; ?>">Accueil</a></li>
                            <li><a href="<?php echo $profil; ?>">Mon Profil</a></li>
                            <li><?php echo $log; ?></li>
                            </ul>
                            <?php
                        }
                        ?>

                </li>
            </ul>

            <span><?php echo $pseudo; ?></span>
        </nav>
    </div>
</div>

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


    

    

