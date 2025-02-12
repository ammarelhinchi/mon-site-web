document.getElementById("show-register").addEventListener("click", function (event) {
    event.preventDefault();
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("register-container").style.display = "block";
});

document.getElementById("show-login").addEventListener("click", function (event) {
    event.preventDefault();
    document.getElementById("register-container").style.display = "none";
    document.getElementById("loginForm").style.display = "block";
});


document.getElementById("register-username").addEventListener("blur", async function () {  
    const username = this.value.trim();  
    const usernameCheck = document.getElementById("username-check");  

    // Réinitialiser l'affichage au départ  
    usernameCheck.style.display = "none";  

    if (username) {  
        try {  
            // Envoie une requête au serveur pour vérifier si le nom d'utilisateur est disponible  
            const response = await fetch(`/check-username?username=${encodeURIComponent(username)}`);  

            // Vérification que la réponse du serveur est correcte  
            if (!response.ok) {  
                throw new Error('Erreur réseau : ' + response.statusText);  
            }  

            const data = await response.json();  

            // Mise à jour de l'interface utilisateur basée sur la disponibilité du nom d'utilisateur  
            if (!data.available) {  
                usernameCheck.textContent = "❌"; // Icône "non disponible"  
                usernameCheck.classList.remove("valid");  
                usernameCheck.classList.add("invalid");  
            } else {  
                usernameCheck.textContent = "✔️"; // Icône "disponible"  
                usernameCheck.classList.remove("invalid");  
                usernameCheck.classList.add("valid");  
            }  
            usernameCheck.style.display = "inline"; // Afficher l'icône  

        } catch (error) {  
            console.error("Erreur lors de la vérification du nom d'utilisateur :", error);  
            usernameCheck.textContent = "⚠️"; // Icône "erreur"  
            usernameCheck.classList.remove("valid", "invalid");  
            usernameCheck.style.display = "inline"; // Afficher l'icône d'erreur  
        }  
    } else {  
        usernameCheck.textContent = ""; // Efface l'icône si le champ est vide  
        usernameCheck.classList.remove("valid", "invalid");  
        usernameCheck.style.display = "none"; // Cacher l'icône si le champ est vide  
    }  
});