<?php

//connexion
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    echo "Unable to connect to DB: " . mysqli_error;
    exit;
}
if (!mysqli_select_db($conn,"test2")) {
    echo "Unable to select mydbname: " . mysqli_error;
    exit;
}
//suppression après 24 heures
$sql = "SELECT heure as heure
        FROM   copcol";


$result = mysqli_query($conn,$sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}


while ($row = mysqli_fetch_assoc($result)) {

    $duree = time() - $row['heure'];
    $heure =  $row['heure'];
    $aff = $duree/3600;
    // echo 'time :'.time();
    //echo 'duree ='.$aff.'<br>';
    //echo 'heure : '.$heure;
    if($duree > 4000){
        $ql2= "DELETE FROM copcol WHERE heure = $heure";
        mysqli_query($conn, $ql2);
    }
   //echo'<br>';

}
// Nonuvelle insertion
$nom = $_POST['nom'];
$text = $_POST['text'];
$time = time();
$sql_control = "SELECT nom FROM copcol";
$result1 = mysqli_query($conn , $sql_control);
while($row1 = mysqli_fetch_assoc($result1)){
    if($nom != $row1){
        $sql_insert = "INSERT INTO copcol  VALUE ('','$nom','$text',$time)";
        mysqli_query($conn, $sql_insert);
        exit;
    }else{
        echo 'Nom déjà existant !';
        exit;
    }
}


$sql_lignes = "SELECT COUNT(*) FROM copcol";
$res =  mysqli_query($conn, $sql_lignes);
//print_r($res);
$resultat = mysqli_fetch_row($res);
echo 'res : '.$resultat[0];


//echo 'nom : '.$nom;
//echo 'text :'.$text;

mysqli_free_result($result);



?>