<?php

/*-------------------------------------------------------- */
require "Authenticator.php";
    
    
$Authenticator = new Authenticator();

    $secret = $Authenticator->generateRandomSecret();
    $_SESSION['auth_secret'] = $secret;


$qrCodeUrl = $Authenticator->getQR('LucasCaio2FA', $_SESSION['auth_secret']);


if (!isset($_SESSION['failed'])) {
    $_SESSION['failed'] = false;
}
?>
