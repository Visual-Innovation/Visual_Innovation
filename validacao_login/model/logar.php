<?php
session_start();

    require('Usuario.php');

    $loginUsuario = addslashes($_POST['loginUsuario']);
    $senha = addslashes($_POST['senha']);

    $conexao = mysqli_connect("localhost", "root", "root", "personalite_aruan");
    $query = "SELECT * FROM tb_usuario WHERE loginUsuario='$loginUsuario' and senha='$senha'";

    if($result=mysqli_query($conexao, $query)){

        $linha = mysqli_fetch_array($result);
        if (!empty($linha)){
            $_SESSION['loginUsuario'] = $linha['loginUsuario'];
            $_SESSION['senha'] = $linha['senha'];
            header('Location: ../view/home-login.php');
        }else {
            unset($_SESSION['loginUsuario']);
            unset($_SESSION['senha']);
            echo "<script>alert('Erro: Usuario ou senha inválida!');
            self.location.href=' ../view/login.php'</script>";  
            
        }

    } else {
        echo "<script>alert('Erro: Usuario ou senha inválida!');
        self.location.href=' ../view/login.php'</script>";  
    }
    
?>