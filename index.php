<?php
session_start();
require ('AltoRouter.php');
$router = new AltoRouter();
    if (isset($_POST['pseudo']) && ($_POST['pseudo'] !== '')) {
        $_SESSION['name'] = htmlspecialchars(addslashes($_POST['pseudo']));
        $id = $_POST['pseudo'];
    }else if (isset($_POST['pseudo']) && ($_POST['pseudo'] == '')) {
        "LE PSEUDO ON T'A DIT!";
        unset($_SESSION['name']); // Corrected the session key
    }

$router->map('GET', '/id', function() { 
    require __DIR__ . '/id.php';
});

$router->map('POST', '/main', function() {
    if (isset($_POST['pseudo']) && ($_POST['pseudo'] == '')) {
        require __DIR__ . '/id.php';
    }else{
        require __DIR__ . '/main.php';
        require __DIR__ . '/model.php'; 
    } 
});
$match = $router->match();

// Dispatch the route
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    echo "Route not found!";
}
