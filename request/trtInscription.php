<?php
var_dump($_POST);


// vérification présence données

if (isset($_POST['pseudo']) AND
    isset($_POST['prenom']) AND
    isset($_POST['nom']) AND
    isset($_POST['email']) AND
    isset($_POST['motdepasse']) AND
    isset($_POST['confmotdepasse']) AND
    isset($_POST['statut']) AND
    isset($_POST['accord'])) {

// récupération des données
    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    $motdepasse2 = $_POST['confmotdepasse'];
    $statut = $_POST['statut'];
    $ok = $_POST['accord'];

// connection à la base de données
   include("logbdd.php"); 

 // vérification pseudo pas déjà présent dans la base
    // $verifPseudo = 'SELECT count(id_membre) FROM MEMBRES WHERE pseudo_membre ='.$pseudo;
    // $resPseudo = $bdd->query($verifPseudo);
    // $nbre1 = $resPseudo->fetch();
    //     if($nbre1 != 0){
    //         echo "Ce pseudo est déjà utilisé !";
            
    //     }
    
 // vérification email pas déjà présent dans la base
    // $verifEmail = 'SELECT count(id_membre) FROM MEMBRES WHERE email_membre ='.$email;
    // $resEmail = $bdd->query($verifEmail);
    // $nbre2 = $resPseudo->fetch();
    //     if($nbre2 != 0){
    //        echo "Ce mail est déjà utilisé !";
           
    //     }

 // requete insertion des données dans la base de données 
  // $requete = 'INSERT INTO membre2 ("pseudo", "prenom", "nom", "email", "motdepasse") VALUES ('.$pseudo.'",
  // "'.$prenom.'","'.$nom.'","'.$email.'","'.$motdepasse.'")';

// requete insertion des données dans la base de données
   $requete = 'INSERT INTO membre  (`idmembre`, `pseudo`, `prenom`, `nom`, `email`, `motdepasse`, `dateinscription`, `statutmembre_idstatutmembre`) VALUES (NULL,"'.$pseudo.'",
   "'.$prenom.'","'.$nom.'","'.$email.'","'.$motdepasse.'", CURRENT_TIMESTAMP,'.$statut.')';

   

// préparation et execution de la requete 
     $req = $bdd->prepare($requete);   
     $req = $bdd->exec($requete); 

// fermeture de la connection
    // mysql_close();

// message de confirmation
    $message = "Félicitation, vous êtes désormais membre chez Quizz. <br>";
    $message .= "Vous pouvez maintenant vous connecter pour accéder à toutes les fonctionnalités de l'application.";
    $_SESSION['message'] = $message;
    // redirection vers  page inscription
    header ('location: ../index.php');
 } else {
    $message = "Enregistrement non effectué. <br>";
    $_SESSION['message'] = $message;
    header ('location: ../inscription.php');
 }


?>