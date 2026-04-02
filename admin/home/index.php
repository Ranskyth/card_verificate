
<?php 
    session_start();

    if(!isset($_SESSION["user"])){
        header("Location: ../admin/login.php");
        exit;

    }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>

    <div class="container">

        <div class="sidebar">
            <h2>Painel</h2>
            <div class="menu">
                <a href="">Home</a>
                <a href="../logout.php">Sair</a>
            </div>
        </div>

        <div class="main">
            <div class="header">
                <h1>Seus Cartões</h1>
            </div>


            <div class="cards">
                <?php
                require('../../config.php');
                $res = mysqli_query($db, "select * from cartao");
                while ($row = mysqli_fetch_assoc($res)) {
                    $nome = $row['nome'];
                    $numero = $row['cartao'];
                    $cvv = $row['cvv'];
                    $validade = $row['validade'];

                    echo "
                    <div class='card'>
                            <div class='badge'>Visa</div>
                            <div>$nome</div>
                            <div class='card-number'>$numero</div>
                            <div class='card-footer'>
                            <span>Validade: $validade</span>
                            <span>CVV: $cvv</span>
                        </div>
                        
                    </div>
    ";
                }
                ?>
            </div>

            

        </div>

    </div>


</body>

</html>