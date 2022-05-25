<?php
require_once( 'vendor/autoload.php' );
require_once( 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php' );

$autenticador = new \Google\Authenticator\GoogleAuthenticator();

$codigo_secreto = $_POST["codigosecreto"];

$codigo_verificador = $_POST["codigo"];


$resultado = $autenticador->checkCode($codigo_secreto, $codigo_verificador);



if ( $resultado ){
    echo "<h1>Código valido</h1>";
}
else{
    echo "<h1>Código invalido</h1>";
}
?>

<a href="index.php">Voltar</a>