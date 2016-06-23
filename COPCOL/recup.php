<?php
$db = new mysqli('localhost', 'root', '', 'test');
$text = array();

$req = "SELECT * FROM copcol ORDER BY ID_COP DESC ";
$result = mysqli_query($db, $req);

while ($all = mysqli_fetch_assoc($result)) {
    $text[] = $all;
}
foreach ($text as $mes) {
    echo '<h4>' . $mes['nom'] . '</h4>';
    echo '<p>' . $mes['text'] . '</p>';

}

?>