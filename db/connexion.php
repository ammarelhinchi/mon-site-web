<?php  
// connexion.php  

// Paramètres de connexion  
$host = 'localhost'; // ou l'adresse de votre serveur de base de données  
$dbname = 'education';  
$username_db = 'root';  
$password_db = '';  

try {  
    // Création de la connexion  
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username_db, $password_db);  
    
    // Définit le mode d'erreur PDO  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {  
    die("Échec de la connexion : " . $e->getMessage());  
}
?>

