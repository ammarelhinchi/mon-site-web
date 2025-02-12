const modale = document.getElementById("myModal");
const carte1 = document.getElementById("carte1") ;
carte1.addEventListener("click",function(){
    /*window.open('https://www.google.com', '_blank'); // Ouvre la page dans un nouvel onglet*/
    const targetElement = document.getElementById('cours-niv1'); 
    targetElement.scrollIntoView({ behavior: 'smooth' }); // Défilement en douceur vers l'élément 
    modale.style.display = "none" ;
})



document.querySelectorAll('.uncours').forEach(function(coursElement) {  
    coursElement.addEventListener('click', function() {  
        // Récupérer l'ID du cours à partir de 'data-id' 
        if (isLoggedIn) {  
            // L'utilisateur est connecté, afficher la page du cours 
        var idCours = this.getAttribute('data-id');  
        // Rediriger vers la page HTML correspondante  
        window.location.href = 'cours/cours' + idCours + '.php'; // Assurez-vous que les pages HTML sont nommées correctement  

        }
        else {
            // L'utilisateur n'est pas connecté, rediriger vers la page de connexion  
            window.location.href = 'db/inscription.php';  
        }
    });  
});  


