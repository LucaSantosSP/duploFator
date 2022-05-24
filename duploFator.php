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
    <script>
        window.alert("Por favor faça a verificação em duas etapas!");
    </script>
</head>
<body>
    <form action="verificador.php" method="post" autoComplete="false">
            <?php if ($_SESSION['failed']): ?>
                <div class="alert alert-danger" role="alert">
                            <strong>Oh snap!</strong> Invalid Code.
                </div>
                <?php   
                    $_SESSION['failed'] = false;
                ?>
            <?php endif ?>
                            
                <img style="text-align: center;;" class="img-fluid" src="<?php   echo $qrCodeUrl ?>"><br><br>        
                <input type="text" class="form-control" name="codigo" placeholder="******"><br> <br>  

                <button type="submit" class="btn btn-md btn-primary">Vericar</button>

                <input type="hidden" value="<?php echo $secret; ?>" name="codigosecreto">
    </form>
</body>
</html>