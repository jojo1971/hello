<?php
$db = new mysqli('localhost', 'root', '', 'test');


if (isset($_POST['nom']) && isset($_POST['text']) && !empty($_POST['nom']) && !empty($_POST['text'])) {

    $nom = $_POST['nom'];
    $text = $_POST['text'];
    $time = time();
    $req = "INSERT INTO copcol (ID_COP,nom,text,heure) VALUE ('' ,'$nom', '$text', '$time')";
    $db->query($req);
    echo $nom;
    echo '<br>';
    echo $text;
    echo '<br>';
    echo $time;

} else {
    echo '<span>Veuillez remplir tous les champs</span>';
}

?>