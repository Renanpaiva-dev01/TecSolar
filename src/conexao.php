
	<?php
    $usuario = "id19120333_mostra";
    $senha = ")C{v>>9]e\mn}c-b";
    $banco = "id19120333_dbmostra";
    $conexao = mysqli_connect('localhost', $usuario, $senha, $banco);
    
    if($conexao){
        echo'sim';
    }else{
        echo'nao';
    }
?>
