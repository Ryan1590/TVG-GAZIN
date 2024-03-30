<<<<<<< HEAD
<?php

include "conexao.php";


if(isset($_GET['idGS'])) {

    $idSessao = $_GET['idGS'];

    $delete = "DELETE FROM sessoes WHERE id = :id";
    $delete1 = $pdo->prepare($delete);
    $delete1->bindValue(":id", $idSessao);

    if($delete1->execute()){

        $querySituacao = "UPDATE usuarios SET situacao = 'Inativo' WHERE permission = 'limited'";
        $stmt2 = $pdo->prepare( $querySituacao);
        $stmt2->execute();

        session_start();
        $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Sessão excluida com sucesso!');
        header("location: novaEdicao.php");
        exit();
    }
    
}

=======
<?php

include "conexao.php";


if(isset($_GET['idGS'])) {

    $idSessao = $_GET['idGS'];

    $delete = "DELETE FROM sessoes WHERE id = :id";
    $delete1 = $pdo->prepare($delete);
    $delete1->bindValue(":id", $idSessao);

    if($delete1->execute()){

        $querySituacao = "UPDATE usuarios SET situacao = 'Inativo' WHERE permission = 'limited'";
        $stmt2 = $pdo->prepare( $querySituacao);
        $stmt2->execute();

        session_start();
        $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Sessão excluida com sucesso!');
        header("location: novaEdicao.php");
        exit();
    }
    
}

>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
?>