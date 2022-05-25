<?php

/*-------------------------------------------------------- */
require "Authenticator.php";
    
    
$Authenticator = new Authenticator();

    $secret = 'AG3BK4VJ2VJ5VD3F';
    $_SESSION['auth_secret'] = $secret;


$qrCodeUrl = $Authenticator->getQR('autentica2fa', $_SESSION['auth_secret']);


if (!isset($_SESSION['failed'])) {
    $_SESSION['failed'] = false;
}
?>
