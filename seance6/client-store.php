<?php

print_r($_POST);
echo "<br>";

foreach($_POST as $key => $value){
    $$key = $value;
}

echo $adresse;


$a = 'b';

$$a = 'Test variable B';

echo $b;

//$sql = "INSERT INTO client (nom, adresse, phone, code_postal, courriel) VALUES ($nom,$adresse.....)";


?>