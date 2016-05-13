<?php
$text = isset($_POST['text']) ? $_POST['text'] : null;
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;


$fichier = 'text.txt';
$fichier_a_ouvrir = fopen($fichier, 'r');
$result = fgets($fichier_a_ouvrir,1040);
$result = explode('|',$result);
for($i=0;$i<count($result);$i++) {
    if($result[$i] == 'aze'){
        echo 'nom deja existant';
        break;
          fclose($fichier_a_ouvrir);
    }else{

        $fichier_a_ouvrir = fopen($fichier, 'a+');
        fwrite($fichier_a_ouvrir, '|'.$nom.'|'.$text);
          fclose($fichier_a_ouvrir);
    }
}



?>