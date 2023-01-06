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
            $nome      = $_POST['nome'];
            $email     = $_POST['email'];
            $senha     = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            $sql = "UPDATE usuarios SET
                    nome  = '{$nome}',
                    email = '{$email}',
                    senha = '{$senha}',
                    data_nascimento = '{$data_nasc}'
                    WHERE id=".$_REQUEST['id'];

            $result = $conn->query($sql);

            if($result){
                print "<script>alert('Usuário editado com sucesso!');</script>";
                print "<script>locatio.href=?page=listar;</script>";
            }else{
                print "<script>alert('Não foi possível editar o usuário.);</script>";
                print "<script>locatio.href=?page=listar;</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST['id'];
            $result = $conn->query($sql);

            if($result){
                print "<script>alert('Usuário excluído com sucesso!');</script>";
                print "<script>locatio.href=?page=listar;</script>";
            }else{
                print "<script>alert('Não foi possível excluir o usuário.);</script>";
                print "<script>locatio.href=?page=listar;</script>";
            }
            break;
    }

?>