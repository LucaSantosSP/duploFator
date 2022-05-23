<?php
include_once('vendor/sonata-project/google-authenticator/src/FixedBitNotation.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php');

$g = new \google\Authenticator\GoogleAuthenticator();

$secret = 'GP5RFEAS8URBNN6TDOS';

if(isset($_POST['token'])){
    $token = $_POST['token'];
    if($g->checkCode($secret, $token)){
        echo 'Autenticação liberada!';
    }
    else{
        echo 'Token inválido ou expirado';
    }
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de autenticação</title>
</head>
<body>
    <h1>Informe o token de autenticação em 2 fatores</h1>
    <form methos="POST" action="">
        <input type="text" name="token">
        <input type="submit" value="Autenticar">
    </form>
</body>
</html>
