<?php
session_start(); // Démarre la session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validation des données
    if (empty($username) || empty($password)) {
        die('Tous les champs sont obligatoires.');
    }

    // Connexion à la base de données
    $mysqli = new mysqli('localhost','root', '', 'education');
    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
    }

    // Vérification de l'utilisateur
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username); // "s" pour une chaîne de caractères
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Récupère les données de l'utilisateur

        // Vérification du mot de passe
        if (password_verify($password, $user['password'])) {
            // Stocker le nom de l'utilisateur dans la session
            $_SESSION['username'] = $user['username']; // Utilise le nom de l'utilisateur de la base de données
            
           header("Location: ../index.php");
           
            exit();
        } else {
            die("Mot de passe incorrect.");
        }
    } else {
        die("Utilisateur inconnu. Inscrivez-vous puis réessayez !");
    }

    $stmt->close();
    $mysqli->close();
} else {
    http_response_code(405);
    echo 'Méthode non autorisée. Utilisez POST pour soumettre le formulaire.';
}
?>