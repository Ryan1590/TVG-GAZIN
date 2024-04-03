<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
<?php
require_once "conexao.php"; 

if (isset($_POST["newTask"])) {
    if (empty($_POST["newTask"])) {
        session_start();
        $_SESSION['alerta'] = array('tipo' => 'error', 'mensagem' => 'Favor inserir ao menos uma tarefa!');
        header("location: tarefas.php");
        exit();
    } else {
    $taskText = trim($_POST["newTask"]);
    $situacaoPadrao = "Pendente";

    $insertTarefas = "INSERT INTO tarefas (nome, situacao) VALUES (:nome, :situacao)";
    $stmt1 = $pdo->prepare($insertTarefas);
    $stmt1->bindParam(':nome', $taskText);
    $stmt1->bindParam(':situacao', $situacaoPadrao);

        if ($stmt1->execute()) {
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Tarefa Cadastrada com sucesso!');
            header("location:tarefas.php");
            exit();
        } else {
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'error', 'mensagem' => 'Falha ao cadastrar a tarefa');
            header("location: tarefas.php");
            exit();
        }
    }
}
<<<<<<< HEAD
=======
=======
<?php
require_once "conexao.php"; 

if (isset($_POST["newTask"])) {
    if (empty($_POST["newTask"])) {
        session_start();
        $_SESSION['alerta'] = array('tipo' => 'error', 'mensagem' => 'Favor inserir ao menos uma tarefa!');
        header("location: tarefas.php");
        exit();
    } else {
    $taskText = trim($_POST["newTask"]);
    $situacaoPadrao = "Pendente";

    $insertTarefas = "INSERT INTO tarefas (nome, situacao) VALUES (:nome, :situacao)";
    $stmt1 = $pdo->prepare($insertTarefas);
    $stmt1->bindParam(':nome', $taskText);
    $stmt1->bindParam(':situacao', $situacaoPadrao);

        if ($stmt1->execute()) {
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'success', 'mensagem' => 'Tarefa Cadastrada com sucesso!');
            header("location:tarefas.php");
            exit();
        } else {
            session_start();
            $_SESSION['alerta'] = array('tipo' => 'error', 'mensagem' => 'Falha ao cadastrar a tarefa');
            header("location: tarefas.php");
            exit();
        }
    }
}
>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
?>