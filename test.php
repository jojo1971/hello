<?php
$fichier = 'text.txt';
$fichier_a_ouvrir = fopen($fichier, 'r');
$resukt = fgets($fichier_a_ouvrir, 1040);
$resukt = explode('|',$resukt);

for($i=0;$i<count($resukt);$i++) {
    echo $resukt[$i].'</br>';
}
fclose($fichier_a_ouvrir);





?>