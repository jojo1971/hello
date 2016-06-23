<?php
$db = new mysqli('localhost', 'root', '', 'test');
$text = array();

$req = "SELECT * FROM copcol ";
$result = mysqli_query($db, $req);

while ($all = mysqli_fetch_assoc($result)) {
    $text[] = $all;
}
foreach ($text as $mes) {
    echo $mes['text'];
    echo '<br>';
    echo $mes['nom'];
    echo '<br>';
}

?>