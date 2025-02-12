<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "education";
$user = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Récupère le nom d'utilisateur depuis la requête
$username = $_GET["username"];

// Vérifie si le nom d'utilisateur existe déjà
$stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM users WHERE username = ?");
$stmt->execute([$username]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Renvoie une réponse JSON
header("Content-Type: application/json");
echo json_encode(["available" => $result["count"] === 0]);
?>