<?php
// On récupère le membre
$reqStatut = $bdd->prepare ('SELECT * 
FROM membre, statutmembre
WHERE statutmembre_idstatutmembre = idstatutmembre
AND idmembre = ?');
?>

