<?php   
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"]; 
            $data_agendamento = $_POST["data_agendamento"]; 
            $horas = $_POST["horas"]; 
            $descricao = $_POST["descricao"]; 
            
            

            $sql = "INSERT INTO  usuario (nome, data_agendamento, horas, descricao )
            values ('{$nome}', '{$data_agendamento}', '{$horas}','{$descricao}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

    
        
        case 'editar':
            $nome = $_POST["nome"]; 
            $data_agendamento = $_POST["data_agendamento"]; 
            $horas = $_POST["horas"]; 
            $descricao = $_POST["descricao"]; 

            $sql = "UPDATE usuario SET
                    nome='{$nome}',
                    data_agendamento='{$data_agendamento}',
                    horas='{$horas}',
                    descricao='{$descricao}'
                    WHERE 
                        id=".$_REQUEST["id"];
                    

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        
        case 'excluir':
            
            $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }