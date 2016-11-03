<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Wousto;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// Jointure des  tables pour afficher les contacts selon le paramètre
$requete = $bdd->query('SELECT c.contact_prenom, c.contact_nom, c.contact_email, ca.categorie_grade
FROM contacts c, categorie ca
WHERE c.contact_fonction = ca.categorie_id');

$tablereponse = array();
while($donnee = $requete->fetch())
{
    $tablereponse[] = $donnee;
}
echo json_encode($tablereponse);

?>