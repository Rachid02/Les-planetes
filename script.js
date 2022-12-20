// Au redimensionnement de la fenêtre :
// A partir de 768px (768px et inférieur), je souhaite :
// Créer une DIV qui contient le burger menu.
// Au dessus de 768px je souhaite :
// Supprimer cette DIV du code HTML.

let burgerMenu = document.createElement("div");
let destination = document.querySelector("ul li:last-of-type");
let htmlMenu = document.querySelector("menu");

burgerMenu.innerHTML = "<span></span>";
burgerMenu.classList.add("burger-menu");

window.addEventListener("resize", () => {
    burgerDisplay();

    if(window.innerWidth > 768){
        burgerMenu.remove();
    } 
})

window.addEventListener("load", ()=>{
    burgerDisplay();
});

/** 
 * Display once burger menu when window width is under 769px. 
 * @author Yohann MOY
 * @version 1.0
*/
function burgerDisplay(){
    if(window.innerWidth <= 768 && !destination.contains(burgerMenu)){
        destination.prepend(burgerMenu);
    }
}

burgerMenu.addEventListener("click", ()=>{
    burgerMenu.classList.toggle("active");
    htmlMenu.classList.toggle("active");
});