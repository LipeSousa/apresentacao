<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/style.scss">
    <script src="js/script.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-image: url(img/background.png); background-size: cover;">
    <?php require_once 'protect.php'; ?>
    <?php
$nomeCompleto = $_SESSION['name'];
$partesNome = explode(' ', $nomeCompleto);
$primeiroNome = $partesNome[0];
?>
    <?php require_once 'header.php'; ?><br><br><br><br>
    <main class="user-container">
        <div class="user">
            <img src="img/user-100.png" width="100px" height="100px">
            <div class="user-text">
                <p>Bem vindo(a), <strong>
                        <?php echo $primeiroNome; ?>!
                    </strong></p>
                <p><img src="img/email.png" width="25px" height="25px"><span>
                        <?php echo $_SESSION['email']; ?>
                    </span></p>
            </div>
            <a href="logout.php" class="logout"><img src="img/logout.png" width="50px" height="50px" title="Sair!"></a>
        </div>
        <aside>
        <form action="deletarUser.php" method="GET">
        <p>Ao excluir sua conta, você sera direcionado para página de registro!</p>
        <input type="number" min="1" placeholder=" Digite seu id para excluir os dados" name="deletar" required>
        <button>Excluir dados!</button>
        </form>
        </aside>
        <div class="dados">
            <h4><img src="img/dados.png" width="40px" height="40px"><span>DADOS BÁSICOS</span></h4>
                
            <p>Nome Completo: <strong><?php echo $_SESSION['name']; ?></strong></p>
            <p>E-mail: <strong><?php echo $_SESSION['email']; ?></strong></p>
            <p>Telefone Celular: <strong><?php echo $_SESSION['telefone']; ?></strong></p>
            <p>CPF: <strong><?php echo $_SESSION['cpf']; ?></strong></p>
            <p>Data de Nascimento: <strong id="data-original"><?php echo $_SESSION['dataNasc']; ?></strong></p>
            <p>Gênero: <strong><?php echo $_SESSION['genero']; ?></strong></p>
            <p>Id: <strong><?php echo $_SESSION['id']; ?></strong></p>

        </div>
        
        <aside class="request">
        <h4><i class='bx bx-cart'></i> <span>DETALHES GERAIS</span></h4>
        <div>
        <p>Total Gasto: <br><br><strong><?php echo $_SESSION['id']; ?></strong></p>
        <p>NFTs Compradas: <br><br><strong><?php echo $_SESSION['id']; ?></strong></p>
        </div>
        </aside>
    </main>
</body>

</html>