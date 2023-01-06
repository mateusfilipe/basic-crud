<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome      = $_POST['nome'];
            $email     = $_POST['email'];
            $senha     = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            $sql = "INSERT INTO usuarios 
                    (nome, email, senha, data_nascimento)
                    VALUES 
                    ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            
            $result = $conn->query($sql);

            if($result){
                print "<script>alert('Usuário cadastrado com sucesso!');</script>";
                print "<script>locatio.href=?page=listar;</script>";
            }else{
                print "<script>alert('Não foi possível realizar o cadastro);</script>";
                print "<script>locatio.href=?page=listar;</script>";
            }

            break;
        case 'editar':
            //editar
            break;
        case 'excluir':
            //excluir
            break;
    }

?>