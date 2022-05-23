<?php
include_once('vendor/sonata-project/google-authenticator/src/FixedBitNotation.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php');

$g = new \google\Authenticator\GoogleAuthenticator();

$secret = 'GP5RFEAS8URBNN6TDOS';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
</head>
<body>
    <h1>Registre a autenticação em 2 fatores</h1>
    <img src="<?php echo $g->getUrl('lucassantos', 'autentica2fa.herokuapp.com', $secret) ?>">
    <a href="autenticar.php">Autentica</a>
</body>
</html>