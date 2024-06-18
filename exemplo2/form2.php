<?php
    echo "<h2>Cadastro</h2>";

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $username = $_POST['username'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $erro=0;

    if(strlen($username)<5){
        echo "O username deve possuir no mínimo 5 caracteres.<br>";
        $erro=1;
    }
    if(strlen($senha)){
        echo "A senha deve possuir no mínimo 5 caracteres.<br>";
        $erro=1;
    }
    if(strlen($cidade)){ 
    echo "Favor digitar sua cidade";
    $erro=1;
    }
    if(strlen($estado)!=2){ 
    echo "Favor digitar seu estado corretamente";
    $erro=1;
    }
    //VERIFICA SE NÃO HOUVE ERRO
    if($erro==0){ 
    echo "Todos os dados foram digitados corretamente!";
    }
?>