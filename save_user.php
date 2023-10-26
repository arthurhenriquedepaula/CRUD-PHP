<?php
    switch ($_REQUEST["action"]) {
        case 'insert':
            $name       = $_POST["name"];
            $email      = $_POST["email"];
            $password   = md5($_POST["password"]);
            $date_birth  = $_POST["date_birth"];

            $sql = "
                INSERT INTO usuarios (
                    nome,
                    email,
                    senha,
                    data_nasc
                )
                VALUES (
                    '{$name}',
                    '{$email}',
                    '{$password}',
                    '{$date_birth}'
                )
            ";

            $res = $conn->query($sql);

            if($res){
                print "<script> alert('Cadastro realizado com sucesso'); </script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script> alert('Não foi possível completar o seu cadastro, tente novamente mais tarde'); </script>";
                print "<script> location.href='?page=listar'); </script>";
            }

            break;
        case 'update':
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $password   = md5($_POST['password']);
            $date_birth = $_POST['date_birth'];

            $sql = "
                UPDATE 
                    usuarios 
                SET 
                    nome        = '" . $name . "', 
                    email       = '" . $email . "',
                    senha       = '" . $password . "',
                    data_nasc   = '" . $date_birth . "'
                WHERE 
                    id = '" . $_REQUEST['id'] . "'
            ";

            $res = $conn->query($sql);

            if($res){
                print "<script> alert('Seu cadastro foi editado com sucesso'); </script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script> alert('Não foi possível editar'); </script>";
                print "<script> location.href='?page=listar';</script>";
            }
            break;
        case 'delete':
            $sql = "
                DELETE 
                FROM 
                    usuarios 
                WHERE 
                    id = '" . $_REQUEST['id'] . "'
            ";

            $res = $conn->query($sql);

            if($res){
                print "<script> alert('Usuário excluído com sucesso') </script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script> alert('Não foi possível excluir este usuário') </script>";
                print "<script> location.href='?page=listar';</script>";
            }
            break;
    }