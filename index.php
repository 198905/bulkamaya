<?php
session_start();
require ('AltoRouter.php');
$router = new AltoRouter();
    if (isset($_POST['pseudo']) && ($_POST['pseudo'] !== '')) {
        $_SESSION['name'] = htmlspecialchars(addslashes($_POST['pseudo']));
        $id = $_POST['pseudo'];
    }else if (isset($_POST['pseudo']) && ($_POST['pseudo'] == '') || (isset($_POST['sessionD']))) { //pb
        unset($_SESSION['name']); 
    }

$router->map('GET', '/', function() { 
    require __DIR__ . '/id.php';
});

$router->map('POST', '/main', function() {
    if (isset($_POST['pseudo']) && ($_POST['pseudo'] == '') || (isset($_POST['sessionD']))) { //pb
        unset($_SESSION['name']); 
        require __DIR__ . '/id.php';
        session_destroy();
        header("Location: /id"); // Redirect to the home page or another appropriate location
    exit();
    }
    if (isset($_POST['pseudo']) && ($_POST['pseudo'] !== '')) {
        require __DIR__ . '/main.php';   
        require __DIR__ . '/model.php'; 
        }
});

$match = $router->match();
// Dispatch the route
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    echo "<h1>non.</h1>";
    var_dump($_SESSION['name']);
} 


/*session_start();
error_reporting(0);
require('id.php');
$erreur='';
if(isset($_POST['pseudo']) && ($_POST['pseudo']!=='') ) {
    $_SESSION['name']= htmlspecialchars(addslashes($_POST['pseudo']));
    require('main.php');
    require('model.php');
    //var_dump($_SESSION, $_POST); MARCHE
}else if(isset($_POST['pseudo'])&&($_POST['pseudo']=='')){
    $erreur='LE PSEUDO!';
    unset($_SESSION['pseudo']);
}
if (isset($_POST['sessionD'])) {
    $_SESSION['name']='';
    session_destroy();
}*/

