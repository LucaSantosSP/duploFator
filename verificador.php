<?php
require_once( 'vendor/autoload.php' );
require_once( 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php' );

$autenticador = new \Google\Authenticator\GoogleAuthenticator();

$codigo_secreto = $_POST["codigosecreto"];

$codigo_verificador = $_POST["codigo"];

var_dump($codigo_secreto, $codigo_verificador);
$resultado = $autenticador->checkCode($codigo_secreto, $codigo_verificador, 0);
var_dump($resultado);


if ( $resultado ){
    echo "<h1>Código valido</h1>";
}
else{
    echo "<h1>Código invalido</h1>";
}
?>