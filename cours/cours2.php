<?php
session_start(); // Démarre la session

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']; // Récupère le nom de l'utilisateur
} else {
    // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <!-- Font Awesome Icons -->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="../css/style-cours1.css">
    <link rel="stylesheet" href="../css/style-table.css">
</head>
<body>
    <!-- Afficher le nom de l'utilisateur -->
    <div id="user-info">
            Bonjour, <?php echo htmlspecialchars($username); ?> !
        </div>
    <div class="titre"><h1>Les structures de contrôle conditionnelles</h1></div>

    
        <div class="sidebar">
            <div class="btn-1">
                <div class="number1" id="number1"><img src="../images/one.png" alt="" id="imgbtn1"></div>
                <button id="btnvar" onclick="scrollToSection('variables')">La structure simple</button>
            </div>

            <div class="btn-1">
                <div class="number2" id="number2"><img src="../images/two.png" alt="" id="imgbtn2"></div>
                <button id="btncons" onclick="scrollToSection('constantes')">La structure complète</button>
            </div>
            
            <div class="btn-1">
                <div class="number3" id="number3"><img src="../images/three.png" alt="" id="imgbtn3"></div>
                <button id="btntypes" onclick="scrollToSection('types-donnees')">La structure généralisée </button>
            </div>

           <div class="btn-1">
            <div class="number4" id="number4"><img src="../images/four.png" alt="" id="imgbtn4"></div>
            <button id="btntab">La structure à choix</button>
           </div>

            <div class="btn-1">
            <div class="number5" id="number5"><img src="../images/five.png" alt="" id="imgbtn5"></div>
            <button id="btnex">Exercices d'application</button>
            </div>
            
        </div>
        <div class="main">
            <div class="introduction">
                <h3>&#128522;Introduction</h3>
                <p class="paragraphe">
                La structure de contrôle conditionnelle permet à un programme de modifier
                 son traitement en fonction d'une condition.
                </p>
                    
                <p class="paragraphe">
                Il existe 4 formes de structures conditionnelles :
                    <ul class="paragraphe">
                        <li>&#x1F538;  La structure de contrôle conditionnelle simple</li>
                        <li>&#x1F539;  La structure de contrôle conditionnelle complète</li>
                        <li>&#x1F536;  La structure de contrôle conditionnelle généralisée</li>
                        <li>&#x1F537;  La structure de contrôle conditionnelle à choix multiples</li>
                        
                    </ul>
                </p>

                <hr>
            </div>
            <div class="variables" id="variables">
                <h3>La structure de contrôle conditionnelle simple</h3>

                <p class="paragraphe">Une structure de contrôle conditionnelle est dite à
                                    forme simple lorsque le traitement
                                        dépend d'une condition. Si la condition est
                                        évaluée à « vrai », le traitement est exécuté.</p>
                <h4>&#x1F5A8; syntaxe : </h4>
                <table>  
                    <thead>  
                        <tr>   
                            <th>En Algorithmique</th>  
                            <th>En Python</th>  
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td><img src="../images/cond-simple.png" alt=""></td>  
                            <td><img src="../images/cond-simple-py.png" alt=""></td>  
                            
                    </tbody>  
                </table>
            </div>
            <hr>
            <!--Les constantes-->
            <div class="constantes" id="constantes">
                <h3>La structure de contrôle conditionnelle complète</h3>
                <p class="paragraphe">Une structure de contrôle conditionnelle est dite à
                                        forme complète lorsque le traitement dépend
                                        d'une condition à deux états: Si la condition est
                                        évaluée à « vrai », le premier traitement est
                                        exécuté; Si la condition est évaluée à « faux »,
                                        le second traitement est exécuté.</p>
                <h4>&#x1F5A5; Syntaxe :</h4>
                <table>  
                    <thead>  
                        <tr>   
                            <th>En Algorithmique</th>  
                            <th>En Python</th>  
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td><img src="../images/cond-comp.png" alt=""></td>  
                            <td><img src="../images/cond-comp-py.png" alt=""></td>  
                            
                    </tbody>  
                </table>

                
                
            </div>
            <hr>
            <!--Les types de donnees-->
            <div class="types-donnees" id="types-donnees">
                <h3>La structure de contrôle conditionnelle généralisée</h3>
                <p class="paragraphe">Une structure de contrôle conditionnelle est dite
                                        généralisée lorsqu'elle permet de résoudre des
                                        problèmes comportant plus de deux traitements en
                                        fonction des conditions. L'exécution d'un traitement
                                        entraîne automatiquement la non exécution des
                                        autres traitements.</p>
                <h4>&#x1F5A5; Syntaxe :</h4>
                <table>  
                    <thead>  
                        <tr>   
                            <th>En Algorithmique</th>  
                            <th>En Python</th>  
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td><img src="../images/cond-gen.png" alt=""></td>  
                            <td><img src="../images/cond-gen-py.png" alt=""></td>  
                            
                    </tbody>  
                </table>

            </div>
            <!--structures a choix-->
            <div class="types-donnees" id="types-donnees">
                <h3>La structure de contrôle conditionnelle à choix multiples</h3>
                <p class="paragraphe">Une structure de contrôle
                                        conditionnelle est dite à choix lorsque le
                                        traitement dépend de la valeur que prendra le
                                        sélecteur, Ce scalaire doit être de type
                                        scalaire(entier ou caractère).</p>
                <h4>&#x1F5A5; Syntaxe :</h4>
                <table>  
                    <thead>  
                        <tr>   
                            <th>En Algorithmique</th>  
                            <th>Python 3.10 et versions ultérieures</th>  
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td><img src="../images/selon.png" alt=""></td>  
                            <td><img src="../images/selon-py.png" alt=""></td>  
                            
                    </tbody>  
                </table>

            </div>

        </div>

    
    

    </div>
    <script src="../js/jscours1.js"></script>
</body>
</html>