<!DOCTYPE html>
<html>
<body>

<h1>Contador Docker</h1>

<?php
$fichero = "/data/contador.txt";

if (file_exists($fichero)) {
    $contador = (int)file_get_contents($fichero);
} else {
    $contador = 0;
}

$contador++;

file_put_contents($fichero, $contador);

echo "<p>El contador es: $contador</p>";
?>

</body>
</html>
