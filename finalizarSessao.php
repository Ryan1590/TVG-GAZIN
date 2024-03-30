<<<<<<< HEAD
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
?>