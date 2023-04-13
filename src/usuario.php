<?php
    include ("conexao.php");   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $avaliacao = $_POST['avaliacao'];

    $sql = mysqli_query($conexao,"insert into usuario
    (nome, email, avaliacao)
    values ('$nome','$email','$avaliacao')");

    if ($sql) {
        echo"<script>alert('Enviado com sucesso')
        location.href='index.html'</script>";
    }else {
        echo"<script>alert('Erro no envio')
        location.href='index.html'</script>";
    }
    
?>