<?php
    require("../config.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = mysqli_real_escape_string($db, $_POST["email"]);
        $senha = mysqli_real_escape_string($db, $_POST["senha"]);
        
        $res = mysqli_query($db, "select * from users where email = '$email' and senha = '$senha'");
        
        if(mysqli_num_rows($res) == 1){
            session_start();

            $user = mysqli_fetch_assoc($res);

            $_SESSION["user"] = $user["email"];
            header("Location: home");
        }else{
            echo "<script>alert('login ou senha errado')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login.css">

    <title>Login</title>
</head>

<body>

    <div class="login-card">

        <div class="header">
            <h2>Entrar</h2>
            <p>Acesse sua conta</p>
        </div>

        <form method="POST">

            <div class="group">
                <label>Email</label>
                <input type="email" name="email" placeholder="seu@email.com">
            </div>

            <div class="group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="••••••••">
            </div>

            <button>Entrar</button>

        </form>

        <div class="footer">
            Não tem conta? <a href="#">Criar conta</a>
        </div>

    </div>

</body>

</html>