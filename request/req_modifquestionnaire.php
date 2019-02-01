<?php
// On récupère tout le contenu de la table categorie produit
$reponse = $bdd->query
('SELECT * 
FROM questionnaire, statutquizz, categorie, membre
WHERE statutquizz_idstatutquizz = idstatutquizz
AND categorie_idcategorie = idcategorie
AND membre_idmembre = idmembre');

?>

