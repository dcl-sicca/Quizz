<?php
// On récupère tout le contenu de la table categorie produit
$reponse = $bdd->query
('SELECT * 
FROM questionnaire');

?>

SELECT *
FROM questionnaire, statutquizz, categorie
WHERE statutquizz_idstatutquizz = idstatutquizz
AND categorie_idcategorie = idcategorie