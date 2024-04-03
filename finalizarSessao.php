<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
<?php 

include "conexao.php";

<<<<<<< HEAD
=======
echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";


>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
    if(isset($_GET['id'])){
        $idSessao = $_GET['id'];

        $FinalizarSessao = "UPDATE sessoes SET situacao = 'Finalizado', data_finalizacao = CURRENT_TIMESTAMP WHERE id = :id";
        $stmt = $pdo->prepare($FinalizarSessao);
        $stmt->bindParam(':id', $idSessao);

        if($stmt->execute()){

<<<<<<< HEAD
            $query = "SELECT nome FROM sessoes WHERE id = ?";
            $result = $pdo->prepare($query);
            $result->bindValue(1, $idSessao);
            $result->execute();
            $name = $result->fetchColumn();

            $user = $_SESSION['username'];

            if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip_address = $_SERVER['HTTP_CLIENT_IP'];
            } else {
                $ip_address = $_SERVER['REMOTE_ADDR'];
            }
            
            $ip_user = filter_var($ip_address, FILTER_VALIDATE_IP);

            $querySessao = "SELECT data_TVG FROM sessoes WHERE id = ?";
            $resultado = $pdo->prepare($querySessao);
            $resultado->bindValue(1, $idSessao);
            $resultado->execute();
            $data = $resultado->fetchColumn();

            $insert = "INSERT INTO log_sessoes (sessao, data_sessao, usuario, ip_user, acao, horario, valor_antigo, valor_novo) VALUES (?,?,?,?, 'finalização de sessão' , NOW() , NULL ,?)";
            $stmt = $pdo->prepare($insert);
            $stmt->bindValue(1, $name);
            $stmt->bindValue(2, $data);
            $stmt->bindValue(3, $user);
            $stmt->bindValue(4, $ip_user);
            $stmt->bindValue(5, $nome);
            $stmt->execute();

=======
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
            $querySituacao = "UPDATE usuarios SET situacao = 'Inativo' WHERE permission = 'limited'";
            $stmt2 = $pdo->prepare( $querySituacao);
            $stmt2->execute();

            session_start();
            $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Sessão finalizada com sucesso!');
            header("location: novaEdicao.php");
            exit();
        }else {
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'error', 'mensagem' => 'Falha ao finalizar sessão');
            header("location: novaEdicao.php");
            exit();
        }
    }    

<<<<<<< HEAD
=======
=======
<?php 

include "conexao.php";

echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";


    if(isset($_GET['id'])){
        $idSessao = $_GET['id'];

        $FinalizarSessao = "UPDATE sessoes SET situacao = 'Finalizado', data_finalizacao = CURRENT_TIMESTAMP WHERE id = :id";
        $stmt = $pdo->prepare($FinalizarSessao);
        $stmt->bindParam(':id', $idSessao);

        if($stmt->execute()){

            $querySituacao = "UPDATE usuarios SET situacao = 'Inativo' WHERE permission = 'limited'";
            $stmt2 = $pdo->prepare( $querySituacao);
            $stmt2->execute();

            session_start();
            $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Sessão finalizada com sucesso!');
            header("location: novaEdicao.php");
            exit();
        }else {
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'error', 'mensagem' => 'Falha ao finalizar sessão');
            header("location: novaEdicao.php");
            exit();
        }
    }    

>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
?>