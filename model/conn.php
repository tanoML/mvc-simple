<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>