<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
<?php

include "conexao.php";

if (isset($_POST["Id"])) {
    $id = $_POST['Id'];
} else {
    echo json_encode(['success' => false, 'mensagem' => 'ID da tarefa não fornecido']);
    exit();
}

$excluirTarefa = "DELETE FROM tarefas WHERE id = :id";
$resultadoDaExclusao = $pdo->prepare($excluirTarefa);
$resultadoDaExclusao->bindValue(":id", $id, PDO::PARAM_INT);
$resultadoDaExclusao->execute();

if ($resultadoDaExclusao) {
    echo json_encode(['success' => true]);
    exit();
} else {
    echo json_encode(['success' => false, 'mensagem' => 'Falha ao excluir a tarefa']);
    exit();
}

<<<<<<< HEAD
=======
=======
<?php

include "conexao.php";

if (isset($_POST["Id"])) {
    $id = $_POST['Id'];
} else {
    echo json_encode(['success' => false, 'mensagem' => 'ID da tarefa não fornecido']);
    exit();
}

$excluirTarefa = "DELETE FROM tarefas WHERE id = :id";
$resultadoDaExclusao = $pdo->prepare($excluirTarefa);
$resultadoDaExclusao->bindValue(":id", $id, PDO::PARAM_INT);
$resultadoDaExclusao->execute();

if ($resultadoDaExclusao) {
    echo json_encode(['success' => true]);
    exit();
} else {
    echo json_encode(['success' => false, 'mensagem' => 'Falha ao excluir a tarefa']);
    exit();
}

>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
?>