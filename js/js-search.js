document.getElementById("toggleButton").addEventListener("click", function() {  
    var div = document.getElementById("toggleDiv");  
    if (div.style.display === "none") {  
        div.style.display = "block"; // Afficher le div  
         
    } else {  
        div.style.display = "none"; // Cacher le div  
        
    }  
});  