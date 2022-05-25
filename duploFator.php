<?php

    /*-----------------------------------*/

    session_start();
    require_once( 'gerador.php' );
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/2fa.css">
</head>
<body>
    <form action="verificador.php" method="post" autoComplete="false">

        <h1>Dupla autenticação</h1>
        <p>Insira o token gerado pelo aplicativo.</p>
        <input type="text" class="form-control" name="codigo" id="iCodigo" placeholder="******"><br> <br>  
        <div id="botoes">
            <p id="voltar"><a href="index.php">Voltar</a></p>
            <input type="submit" class="btn btn-md btn-primary" id="iEnviar" value="Vericar">
        </div>

        <input type="hidden" value="<?php echo $secret; ?>" name="codigosecreto" >
    </form>

    
</body>
</html>