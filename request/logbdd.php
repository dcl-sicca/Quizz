<?php
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=dbquizz;charset=utf8', 'sicca', 'sicca25');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}