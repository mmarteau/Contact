<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Wousto;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// Affectation des fonctions en chiffre
if($_POST['contact_fonction'] == "Comptabilite")
{
    $_POST['contact_fonction'] = 1;
}
else
{
    if($_POST['contact_fonction'] == "Administration")
    {
        $_POST['contact_fonction'] = 2;
    }
    else
    {
        if($_POST['contact_fonction'] = "Commercial")
        {
            $_POST['contact_fonction'] = 3;
        }
    }
}

// Jointure des  tables pour afficher les contacts selon le paramètre
$requete = $bdd->prepare('SELECT c.contact_prenom, c.contact_nom, c.contact_email, ca.categorie_grade
FROM contacts c, categorie ca
WHERE c.contact_fonction = :contact_fonction
AND ca.categorie_id = :contact_fonction');
$requete->execute(array(
   'contact_fonction' => $_POST['contact_fonction']
));

$tablereponse = array();
while($donnee = $requete->fetch())
{
    $tablereponse[] = $donnee;
}
echo json_encode($tablereponse);

?>