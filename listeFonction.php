<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Wousto;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$requete = $bdd->query('SELECT categorie_grade FROM categorie');

$tableau = array();

while($resultat = $requete->fetch())
{
    $tableau[] = $resultat;
}

echo json_encode($tableau);

?>