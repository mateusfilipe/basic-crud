<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome       = $_POST['nome'];
            $email     = $_POST['email'];
            $senha     = $_POST['senha'];
            $data_nasc = $_POST['data_nasc'];

            $sql = "INSERT INTO usuarios 
                    (nome, email, senha, data_nascimento)
                    VALUES 
                    ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            
            $result = $conn->query($sql);
            break;
        case 'editar':
            //editar
            break;
        case 'excluir':
            //excluir
            break;
    }

?>