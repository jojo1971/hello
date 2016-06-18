<?php

$db = new PDO('mysql:host=sql206.byethost8.com;dbname=b8_16970657_wp', 'b8_16970657', 'artefact');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


$q = $db->query("SELECT nom FROM personnages WHERE id = 70")->fetchColumn();
$nom = print_r($q) ;
    $nom = $_POST['nom'];
$tt = 'erezrz';
print($tt);

?>