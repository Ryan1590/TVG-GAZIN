<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
<?php

require_once "conexao.php";

$permission = 'admin';

function verificarPermissao($permission)
{
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        exit();
    }

    $username = $_SESSION['username'];
    $permissao = obterPermissaoDoBancoDeDados($username);

    if ($permissao !== $permission) {
        header("location:home.php");
        exit();
    }
}

function obterPermissaoDoBancoDeDados($username)
{
    global $pdo;

    $queryPerm = "SELECT permission FROM usuarios WHERE nome = :username";
    $stmt = $pdo->prepare($queryPerm);
    $stmt->bindParam(":username", $username);
    
    $stmt->execute();

    $stmt->bindColumn("permission", $permissao);
    $stmt->fetch(PDO::FETCH_BOUND);
    $stmt->closeCursor();

    return $permissao;
<<<<<<< HEAD
=======
=======
<?php

require_once "conexao.php";

$permission = 'admin';

function verificarPermissao($permission)
{
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        exit();
    }

    $username = $_SESSION['username'];
    $permissao = obterPermissaoDoBancoDeDados($username);

    if ($permissao !== $permission) {
        header("location:home.php");
        exit();
    }
}

function obterPermissaoDoBancoDeDados($username)
{
    global $pdo;

    $queryPerm = "SELECT permission FROM usuarios WHERE nome = :username";
    $stmt = $pdo->prepare($queryPerm);
    $stmt->bindParam(":username", $username);
    
    $stmt->execute();

    $stmt->bindColumn("permission", $permissao);
    $stmt->fetch(PDO::FETCH_BOUND);
    $stmt->closeCursor();

    return $permissao;
>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
}