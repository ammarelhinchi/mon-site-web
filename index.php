<?php
error_reporting(E_ALL);  
ini_set('display_errors', 1);  
include 'db/connexion.php'; // ou 'require' si vous souhaitez que cela soit obligatoire 
session_start(); // Démarre la session

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = "Invité"; // Ou redirige vers la page de connexion
}

$isLoggedIn = isset($_SESSION['username']);

?>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Algorithmiques et programmation</title>  
    <!-- Fonts -->  
    <link rel="preconnect" href="https://fonts.googleapis.com">  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <!-- Font Awesome Icons -->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="card/style.css">
    <link rel="stylesheet" href="modle/style.css">
    <link rel="stylesheet" href="css/style-users.css">
</head>  
<body>  
    
    <header>  
        <div class="top">
        <div class="logo">  
            <h2> <a href="index.php">Algorithmiques & programmation</a></h2>  
        </div> 
        <div class="btns">  
            <div class="bouttons">
            <button id="openModal">Cours</button>  
            <button id ="btnexecices">Exercices</button>  
            <button id = "btnexamens">Examens</button> 
            </div>
            

            <div class="search">
                <i class="iconerech fas fa-magnifying-glass fa-lg" id="toggleButton"></i> 
            </div> 

            <!-- Dropdown menu pour l'utilisateur -->
        <div class="dropdown">
            <div class="dropdown-toggle" onclick="toggleDropdown()">
                <span class="nomuser"><?php echo htmlspecialchars($username); ?></span>
                <span class="arrow"><i class="fas fa-chevron-down"></i></span> <!-- Icône flèche vers le bas par défaut -->
            </div>
            <div class="dropdown-menu">
            <?php if ($isLoggedIn): ?>
                <!-- Options pour un utilisateur connecté -->
                <a href="profile.php">Profil</a>
                <a href="settings.php">Paramètres</a>
                <a href="db/logout.php">Déconnexion</a>
            <?php else: ?>
                <!-- Options pour un utilisateur non connecté -->
                <a href="db/inscription.php">Connexion</a>
                <a href="db/inscription.php">Inscription</a>
            <?php endif; ?>
            </div>
        </div>
            
        </div>  
        <div class="rechercher" id="toggleDiv">
        <input type="text" class="textsearch" id="txtsearch" placeholder="Rechercher...">
        </div>
        
        
    </div>
    </header>  

    <!--MODALE-->
    <div id="myModal" class="modal">  
        <div class="modal-content">  
            <span class="close">&times;</span>  
            
            <div class="cards">
                <div class="card" id="carte1">  
                    <img src="images/cn1.png" alt="Image de la carte" class="card-image">  
                </div>
                
                <div class="card" id="carte2">  
                    <img src="images/cn2.png" alt="Image de la carte" class="card-image">  
                </div>

                <div class="card" id="carte3">  
                    <img src="images/cn3.png" alt="Image de la carte" class="card-image">  
                </div>

            </div>
        </div>  
    </div>  
    
    <>  
        <div class="intro">  
            <!-- Add your introduction content here if needed -->  
            <h1>Bienvenue, <?php echo htmlspecialchars($username); ?> !</h1>
             <h1>La programmation est un art, alors soyez des artistes.</h1>
             <h3>Maîtrisez les algorithmes, et les possibilités seront infinies!</h3>
             <div class="image1"><img src="images/img1.jpg"></div>
        </div>  
       <div class="cards">
        <div class="card">  
            <img src="images/Cours.png" alt="Image de la carte" class="card-image">  
            <div class="card-content">  
                <h2 class="card-title">Cours detaillé</h2>  
                <p class="card-description">Ceci est une description de la carte. Il peut contiendrer quelques informations sur le sujet.</p>  
                <a href="#" class="card-button">En savoir plus</a>  
            </div>  
        </div>
        <div class="card">  
            <img src="images/exercices.png" alt="Image de la carte" class="card-image">  
            <div class="card-content">  
                <h2 class="card-title">Series corrigées</h2>  
                <p class="card-description">Ceci est une description de la carte. Il peut contiendrer quelques informations sur le sujet.</p>  
                <a href="#" class="card-button">En savoir plus</a>  
            </div>  
        </div>
        <div class="card">  
            <img src="images/examens.png" alt="Image de la carte" class="card-image">  
            <div class="card-content">  
                <h2 class="card-title">Examens + Suj. Bac.</h2>  
                <p class="card-description">Ceci est une description de la carte. Il peut contiendrer quelques informations sur le sujet.</p>  
                <a href="#" class="card-button">En savoir plus</a>  
            </div>  
        </div>

       </div>
       <hr>

       <h1 id="cours-niv1">Liste des cours Algorithmiques : Niveau 1</h1>

       <div class="liste-cours">  
    <?php  
        // Exécution de la requête pour obtenir les cours  
        $query = $conn->query('SELECT * FROM cours');  
        $result = $query->fetchAll(PDO::FETCH_ASSOC);  

        // Vérifiez si des cours ont été trouvés  
        if ($result) {  
            foreach ($result as $row) {  
                // Chemin de votre dossier images  
                $image_path = "images/" . htmlspecialchars($row['image_cours']);  
    ?>  
                <div class="uncours" data-id="<?php echo htmlspecialchars($row['id_cours']); ?>">  
                    <div class="image-cours">  
                        <?php  
                            echo "<img src='$image_path' alt='Image du cours' class='styled-image-cours' />";  
                        ?>  
                    </div>  
                    <div class="contenu-cours">  
                        <?php  
                            // Affichage des détails du cours  
                            echo "<h3>" . htmlspecialchars($row['titre_cours']) . "</h3>"; // Titre du cours  
                            echo "<i class='iconeduree fa-regular fa-clock'></i>" . htmlspecialchars($row['duree_cours']) . "<br>"; // Durée du cours  
                            echo "<i class='iconediff fa-solid fa-signal'></i> " . htmlspecialchars($row['diff_cours']); // Difficulté du cours  
                        ?>  
                    </div>               
                </div>  
    <?php  
            }  
        } else {  
            echo "<p>Aucun cours trouvé.</p>"; // Message si aucune donnée n'est trouvée  
        }  

        // Fermez la connexion (optionnel)  
        $conn = null;   
    ?>  
</div>  
 

<hr>      
 
    </main>  
      
    <footer>
          
        <div class="links"></div>  
    </footer> 
    <script>  
        // Passer la valeur PHP à JavaScript  
        var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;  
    </script>   
    <script src="modle/script.js"></script> 
    <script src="js/app.js"></script>
    <script src = "js/jsusers.js"></script>
    <script src = "js/js-search.js"></script>

    
</body>  
</html>