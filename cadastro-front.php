<?php
require_once 'Usuario.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>CADASTRAR</h1>
    <form method="POST">
    <p>Usuário</p>
    <p><input type="email" name="email" class="inputs"></p>
    <p>Senha</p>
    <p><input type="password" name="senha" class="inputs"></p>
    <p><input type="submit" value="Enviar" id="btn-enviar"></p>
    </form>
    </div>
<?php
if(isset($_POST['email'])){
    $login = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
}

if(!empty($login) && !empty($senha)){
    $con = mysqli_connect("localhost","root","");
    if($u->cadastrar($login,$senha)){
        echo "Cadastrado com sucesso!";
    }else{
        echo "Email já cadastrado!";
    }
}
?>
</body>
</html>