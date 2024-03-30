<<<<<<< HEAD
<?php

//ponhei aaqui mais vc pode criar arquivo so pra isso e chamar todas tela 
if (!function_exists('iniciarSessaoSeNecessario')) {
    function iniciarSessaoSeNecessario() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
}

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "tvg";

iniciarSessaoSeNecessario();

try {
    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset=utf8;", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    echo "Erro ao se conectar no banco";
    echo $e->getMessage();
    exit;
=======
<?php

//ponhei aaqui mais vc pode criar arquivo so pra isso e chamar todas tela 
if (!function_exists('iniciarSessaoSeNecessario')) {
    function iniciarSessaoSeNecessario() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
}

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "tvg";

iniciarSessaoSeNecessario();

try {
    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset=utf8;", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    echo "Erro ao se conectar no banco";
    echo $e->getMessage();
    exit;
>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
}