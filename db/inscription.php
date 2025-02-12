<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Connexion</h2>
    <form id="loginForm" action="login.php" method="POST">
        <div class="form-group">
            <label for="login-username">Nom d'utilisateur:</label>
            <input type="text" id="login-username" name="username" required autocomplete="username">
            
        </div>
        <div class="form-group">
            <label for="login-password">Mot de passe:</label>
            <input type="password" id="login-password" name="password" required autocomplete="current-password">
        </div>
        <button type="submit">Se connecter</button>
    </form>
    <p>Pas encore de compte ? <a href="#" id="show-register">S'inscrire</a></p>
</div>

<div class="container" id="register-container" style="display: none;">
    <h2>Inscription</h2>
    <form id="registerForm" action="register.php" method="POST">
        <div class="form-group">
            <label for="register-username">Nom d'utilisateur:</label>
            <input type="text" id="register-username" name="username" required>
            <span id="username-check" class="check-icon"></span>
        </div>
        <div class="form-group">
            <label for="register-email">Email:</label>
            <input type="email" id="register-email" name="email" required autocomplete="email">
        </div>
        <div class="form-group">
            <label for="register-password">Mot de passe:</label>
            <input type="password" id="register-password" name="password" required autocomplete="new-password">
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirmez le mot de passe:</label>
            <input type="password" id="confirm-password" name="confirm_password" required autocomplete="new-password">
        </div>
        <button type="submit">S'inscrire</button>
    </form>
    <p>Déjà un compte ? <a href="#" id="show-login">Se connecter</a></p>
</div>
    <script src="script-inscrit.js"></script>
</body>
</html>