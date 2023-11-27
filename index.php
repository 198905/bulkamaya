<?php

session_start();
require ('AltoRouter.php');
$router = new AltoRouter();

if (isset($_POST['pseudo']) && ($_POST['pseudo'] !== '')) {
    $_SESSION['name'] = htmlspecialchars(addslashes($_POST['pseudo']));
    $id = $_POST['pseudo'];
}
///////////////////////ACCUEIL///////////////////////////////
/////////////////////////////////////////////////////////////
$router->map('GET', '/id', function() { 
    session_destroy();
    require __DIR__ . '/id.php';
    if(isset($_POST['pseudo'])&&($_POST['pseudo']=='')){
        $_SESSION['name']='';
    }
});
///////////////////////MAIN///////////////////////////////
//////////////////////////////////////////////////////////
$router->map('POST', '/main', function() {
    if (isset($_POST['pseudo']) && ($_POST['pseudo'] !== '')) {
        require __DIR__ . '/main.php';   
        require __DIR__ . '/model.php'; 
        }
    
    else {
        header("Location:/id");
        exit();
    }
});
///////////////////////LOGOUT///////////////////////////////
/////////////////////////////////////////////////////////////// 

$router->map('POST', '/logout', function() {
     {
        require __DIR__ . '/logout.php';   
        if (isset($_POST['logout'])) {
            $_SESSION['name']='';
            session_destroy();
            }
    }
});

$match = $router->match();
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header("Location:/id");
    exit();;
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

