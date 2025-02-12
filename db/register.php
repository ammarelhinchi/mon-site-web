<?php  
// Affichage de la méthode utilisée pour le débogage  
//echo 'Méthode utilisée : ' . $_SERVER['REQUEST_METHOD'] . '<br>';  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    // Récupération des données du formulaire  
    $username = $_POST['username'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $confirm_password = $_POST['confirm_password'];  

    // Validation des données de formulaire  
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {  
        die('Tous les champs sont obligatoires.');  
    }  

    if ($password !== $confirm_password) {  
        die('Les mots de passe ne correspondent pas.');  
    }  

    // Hash du mot de passe  
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);  

    // Connexion à la base de données  
    //include 'connexion.php' ;
    $mysqli = new mysqli('localhost', 'root', '', 'education');  
    // Vérification de la connexion  
    if ($mysqli->connect_error) {  
        die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);  
   }  
   

    // Vérification de l'existence de l'email  
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");  
    $stmt->bind_param("s", $email);  
    $stmt->execute();  
    $result = $stmt->get_result();  

    if ($result->num_rows > 0) {  
        die('L\'adresse e-mail est déjà utilisée.');  
    }  

    // Insertion des données dans la base de données  
    $stmt = $mysqli->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");  
    $stmt->bind_param("sss", $username, $email, $hashed_password);  

    if ($stmt->execute()) {  
        echo 'Inscription réussie!';  
    } else {  
        echo 'Erreur lors de l\'inscription: ' . $stmt->error;  
    }  

    $stmt->close();  
    $mysqli->close();  
} else {  
    // Code de réponse 405  
    http_response_code(405);  
    echo 'Méthode non autorisée. Utilisez POST pour soumettre le formulaire.';  
}  
?>