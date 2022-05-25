<?php

    /*-----------------------------------*/

    session_start();
    require_once( 'gerador.php' );
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="scripts/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form action="duploFator.php" method="post">
        <h1>Login</h1>
        <label for="iEmail"><strong>Email</strong></label><br>
        <input class="infoP" type="text" name="nEmail" id="iEmail" placeholder="Digite seu email ou nome de usuário" required size="40"><br>

        <label for="iSenha"><strong>Senha</strong></label><br>
        <input class="infoP" type="password" name="nSenha" id="iSenha" placeholder="*********" required size="40"><br>


        <input type="checkbox" name="nEscolha" id="iEscolha"> 
        <label for="iEscolha"><strong>Manter-me logado</strong></label><br>

        <div class="g-recaptcha" data-sitekey="6LctN9EfAAAAAILh-h25sX8pbcbcN19sBIL_yKmh"></div><br>

        <input type="submit" name="nEnviar" id="iEnviar" value="Enviar" onclick="return valida()"><br><br>

        <hr><br>
        <h2>Por favor, leia o QRCode abaixo</h2>
        <img style="margin-left: 50px" class="img-fluid" src="<?php   echo $qrCodeUrl ?>"><br><br>

        <p style="text-align: center;">Para esse teste é necessário ter instalado no seu <br> celular o aplicativo do Google Authenticator</p>
        <p style="text-align: center;"><a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=pt_BR&gl=US" target="_blank">Clique aqui para baixar a última versão</a> </p>
    </form>


    <?php
        if (isset($_POST['nEnviar'])){
            if (!empty($_POST['g-recaptcha-response'])){
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $secret = "6LctN9EfAAAAAPyuxHQVJsjJKaAhfVz8McuMqCDz";
                $response = $_POST['g-recaptcha-response'];
                $variaveis = "secret=".$secret."&response=".$response;

                $chamada = curl_init($url);
                curl_setopt( $chamada, CURLOPT_POST, 1);
                curl_setopt( $chamada, CURLOPT_POSTFIELDS, $variaveis);
                curl_setopt( $chamada, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt( $chamada, CURLOPT_HEADER, 0);
                curl_setopt( $chamada, CURLOPT_RETURNTRANSFER, 1);
                $resposta = curl_exec($chamada);

                $resultado = json_decode($resposta);
                if($resultado->success == 1){
                    
                }
            }
        }
    ?>
</body>
</html>
