const btnvar = document.getElementById("btnvar") ;
const number1 = document.getElementById("number1") ;

/*
btnvar.addEventListener("click",function(){
  
})
*/
const btncons = document.getElementById("btncons") ;
const number2 = document.getElementById("number2") ;

btncons.addEventListener("click",function(){
  number2.style.backgroundColor = "rgb(62, 248, 6)" ;
  btncons.style.color = "rgb(8, 8, 117)" ;
  btncons.style.fontWeight = "bolder" ;
  btncons.style.fontSize = "18px" ;
})

const btntypes = document.getElementById("btntypes") ;
const number3 = document.getElementById("number3") ;

btntypes.addEventListener("click",function(){
  number3.style.backgroundColor = "rgb(62, 248, 6)" ;
  btntypes.style.color = "rgb(8, 8, 117)" ;
  btntypes.style.fontWeight = "bolder" ;
  btntypes.style.fontSize = "18px" ;
})

const btntab = document.getElementById("btntab") ;
const number4 = document.getElementById("number4") ;

btntab.addEventListener("click",function(){
  number4.style.backgroundColor = "rgb(62, 248, 6)" ;
  btntab.style.color = "rgb(8, 8, 117)" ;
  btntab.style.fontWeight = "bolder" ;
  btntab.style.fontSize = "18px" ;
})

const btnex = document.getElementById("btnex") ;
const number5 = document.getElementById("number5") ;

btnex.addEventListener("click",function(){
  number5.style.backgroundColor = "rgb(62, 248, 6)" ;
  btnex.style.color = "rgb(8, 8, 117)" ;
  btnex.style.fontWeight = "bolder" ;
  btnex.style.fontSize = "18px" ;
})

/*navigation dans cours1.html*/
function scrollToSection(sectionId) {  
  // Trouver l'élément correspondant à l'ID  
  const section = document.getElementById(sectionId);  
  if (section) {  
      // Faire défiler la page vers l'élément correspondant  
      section.scrollIntoView({ behavior: 'smooth' });  
      number1.style.backgroundColor = "rgb(62, 248, 6)" ;
      btnvar.style.color = "rgb(8, 8, 117)" ;
      btnvar.style.fontWeight = "bolder" ;
      btnvar.style.fontSize = "18px" ;
  }  
}  



