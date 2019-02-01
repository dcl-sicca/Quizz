<?php 

// On récupère tout le contenu de la table categorie produit
$reponse = $bdd->prepare
('SELECT * 
FROM questionnaire, statutquizz, categorie, membre, statutmembre
WHERE statutquizz_idstatutquizz = idstatutquizz
AND categorie_idcategorie = idcategorie
AND membre_idmembre = idmembre
AND statutmembre_idstatutmembre = idstatutmembre
AND idmembre = 1');

?>