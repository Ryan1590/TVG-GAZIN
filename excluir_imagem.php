<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
<?php 

include "conexao.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delete = "DELETE FROM galeria WHERE id = :id";
        $exclusao = $pdo->prepare($delete);
        $exclusao->bindParam(':id', $id);
        $exclusao->execute();

        if($exclusao){
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Imagem excluida com sucesso!');
            header("location: galeria.php");
            exit();
        }
<<<<<<< HEAD
=======
=======
<?php 

include "conexao.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delete = "DELETE FROM galeria WHERE id = :id";
        $exclusao = $pdo->prepare($delete);
        $exclusao->bindParam(':id', $id);
        $exclusao->execute();

        if($exclusao){
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Imagem excluida com sucesso!');
            header("location: galeria.php");
            exit();
        }
>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
    }