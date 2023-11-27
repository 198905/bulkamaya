<?php
session_start(); 
//fonctionne
try {
    $bdd = new PDO('mysql:host=localhost;dbname=databasemessages;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Insert into the database
if (isset($_POST['message']) && $_POST['message'] !== '') {
    file_put_contents('request.json', json_encode($_POST, true)); 
    
    $msg = $_POST["message"];
    $pseudo = $_SESSION['name'] ; 
    
    try {
        $stmt = $bdd->prepare('INSERT INTO `messagestable` (`msg`, `pseudo`) VALUES (:msg, :pseudo)');
        $stmt->bindValue(':msg', $msg);
        $stmt->bindValue(':pseudo', $pseudo);
        $success = $stmt->execute();

        if ($success) {
            echo "/";
        } else {
            echo "|";
            print_r($stmt->errorInfo()); 
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
