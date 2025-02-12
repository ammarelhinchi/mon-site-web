<?php
session_start(); // Démarrer la session

// Simuler l'état de connexion
$_SESSION['isLoggedIn'] = true; // ou false pour tester
$isLoggedIn = $_SESSION['isLoggedIn'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Déroulant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dropdown">
        <div class="dropdown-toggle" onclick="toggleDropdown()">
            <span class="nomuser">User</span>
            <span class="arrow"><i class="fas fa-chevron-down"></i></span>
        </div>
        <div class="dropdown-menu" id="dropdownMenu">
            <?php if ($isLoggedIn): ?>
                <!-- Options pour un utilisateur connecté -->
                <a href="profile.php">Profil</a>
                <a href="settings.php">Paramètres</a>
                <a href="logout.php">Déconnexion</a>
            <?php else: ?>
                <!-- Options pour un utilisateur non connecté -->
                <a href="login.php">Connexion</a>
                <a href="register.php">Inscription</a>
            <?php endif; ?>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>