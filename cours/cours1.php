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
    <div class="titre"><h1>Les structures de données et les structures simples </h1></div>

    
        <div class="sidebar">
            <div class="btn-1">
                <div class="number1" id="number1"><img src="../images/one.png" alt="" id="imgbtn1"></div>
                <button id="btnvar" onclick="scrollToSection('variables')">Les variables</button>
            </div>

            <div class="btn-1">
                <div class="number2" id="number2"><img src="../images/two.png" alt="" id="imgbtn2"></div>
                <button id="btncons" onclick="scrollToSection('constantes')">Les constantes</button>
            </div>
            
            <div class="btn-1">
                <div class="number3" id="number3"><img src="../images/three.png" alt="" id="imgbtn3"></div>
                <button id="btntypes" onclick="scrollToSection('types-donnees')">Les types de données</button>
            </div>

           <div class="btn-1">
            <div class="number4" id="number4"><img src="../images/four.png" alt="" id="imgbtn4"></div>
            <button id="btntab">Les Tableaux</button>
           </div>

            <div class="btn-1">
            <div class="number5" id="number5"><img src="../images/five.png" alt="" id="imgbtn5"></div>
            <button id="btnex">Exercices d'application</button>
            </div>
            
        </div>
        <div class="main">
            <div class="introduction">
                <h3>&#128522;Introduction</h3>
                <p class="paragraphe">Les structures de données sont des moyens essentiels d'organiser, de gérer et de stocker
                     des données de manière efficace. Elles jouent un rôle crucial en informatique, non seulement en 
                     facilitant le traitement des informations, mais aussi en optimisant les performances des algorithmes 
                     associés. Comprendre les différentes structures de données est fondamental pour la conception de logiciels, 
                    le développement d'applications et la résolution de problèmes complexes.</p>
                    
                <p class="paragraphe">Les opérations de lecture, écriture et 
                    affectation sont fondamentales en algorithmique et en
                    programmation. Chacune de ces opérations
                    joue un rôle crucial dans la manipulation des données. </p>
                <hr>
            </div>
            <div class="variables" id="variables">
                <h3>Les variables</h3>
                <div class="img-container">
                    <img src="images/variable.png" alt="" class="imgvariables">
                </div>
                

                <p class="paragraphe">Une variable est une entité qui peut contenir des valeurs 
                    qui peuvent changer au cours de l'exécution d'un programme. En programmation et en 
                    mathématiques, une variable est généralement utilisée pour stocker des données qui 
                    peuvent être manipulées.</p>
                <h4>Caractéristiques d'une variable :</h4>
                <p class="paragraphe">Une variable est caractérisée par :
                    <ul class="paragraphe">
                        <li>Un Nom  : Chaque variable a un identifiant qui permet de la référencer.</li>
                        <li>un Type : Les variables peuvent avoir différents types, tels que des entiers, des chaînes de caractères, 
                            des flottants, etc.</li>
                        <li>Une Valeur : La valeur d'une variable peut être modifiée au cours du temps.</li>
                    </ul>
                </p>
            </div>
            <hr>
            <!--Les constantes-->
            <div class="constantes" id="constantes">
                <h3>Les constantes</h3>
                <p class="paragraphe">Une constante en algorithme est une valeur fixe 
                    qui ne change pas pendant l'exécution du programme. Contrairement aux variables,
                     dont les valeurs peuvent être modifiées, une constante est déclarée avec une valeur
                      initiale qui reste la même tout au long du traitement.</p>
                <h4>Caractéristiques d'une constante :</h4>
                <p class="paragraphe">Une constante est caractérisée par :
                    <ul class="paragraphe">
                        <li>Un Nom  : Chaque constante a un identifiant qui permet de la référencer.</li>
                        <li>Une Valeur : La valeur d'une constante ne peut pas être modifiée au cours du temps.</li>
                    </ul>
                </p>
                <h4>Avantages des Constantes :</h4>
                <p class="paragraphe">
                    <ul class="paragraphe">
                        <li>Lisibilité : Les constantes peuvent améliorer la lisibilité du code en remplaçant les valeurs magiques par des noms significatifs.</li>
                        <li>Maintenance : En modifiant la valeur d'une seule constante, vous pouvez affecter tout le programme, ce qui facilite les mises à jour.</li>
                    </ul>
                </p>
            </div>
            <hr>
            <!--Les types de donnees-->
            <div class="types-donnees" id="types-donnees">
                <h3>Les Types de données</h3>
                <p class="paragraphe">Les types de données en algorithmique sont des catégories de
                     données qui définissent les valeurs et les opérations qui peuvent être effectuées
                      sur ces valeurs. Voici un aperçu des types de données les plus courants :</p>
                <h4>&#128640;Les types de données simples</h4>
                <table>  
                    <thead>  
                        <tr>  
                            <th>En algorithmique</th>  
                            <th>En Python</th>  
                            <th>Exemple de valeurs en Python</th>   
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td>Entier</td>  
                            <td>int</td>  
                            <td>age = 19</td>  
                             
                        </tr>  
                        <tr>  
                            <td>Réel</td>  
                            <td>float</td>  
                            <td>moyenne = 17.25</td>  
                             
                        </tr>  
                        <tr>  
                            <td>Booléen</td>  
                            <td>bool</td>  
                            <td>test = True</td>  
                              
                        </tr>  
                        <tr>  
                            <td>Caractère</td>  
                            <td>str</td>  
                            <td>sexe = "H"</td>  
                              
                        </tr>  
                        <tr>  
                            <td>Chaine de Caractères</td>  
                            <td>str</td>  
                            <td>nom= 'Haj Ali'</td>  
                              
                        </tr>  
                    </tbody>  
                </table> 

                <h4>&#128640;&#128640;Conversions entre les types simples en Python</h4>
                <table>  
                    <thead>  
                        <tr>  
                            <th>Conversion</th>  
                            <th>Syntaxe</th>  
                            <th>Exemple</th>   
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td>Entier</td>  
                            <td>int</td>  
                            <td>age = 19</td>  
                             
                        </tr>  
                        <tr>  
                            <td>Réel</td>  
                            <td>float</td>  
                            <td>moyenne = 17.25</td>  
                             
                        </tr>  
                        <tr>  
                            <td>Booléen</td>  
                            <td>bool</td>  
                            <td>test = True</td>  
                              
                        </tr>  
                        <tr>  
                            <td>Caractère</td>  
                            <td>str</td>  
                            <td>sexe = "H"</td>  
                              
                        </tr>  
                        <tr>  
                            <td>Chaine de Caractères</td>  
                            <td>str</td>  
                            <td>nom= 'Haj Ali'</td>  
                              
                        </tr>  
                    </tbody>  
                </table> 

            </div>

        </div>

    
    

    </div>
    <script src="../js/jscours1.js"></script>
</body>
</html>