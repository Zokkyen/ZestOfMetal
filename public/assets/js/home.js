// Changement du format d'image en fonction de la taille d'écran
// Fonction exécutée au redimensionnement
let changeHomeWallpaper = () => {
    if("matchMedia" in window) { // Détection
        if(window.matchMedia("(min-width:992px)").matches) {
            wallOne.src = "../public/assets/img/wallpaper/desktop1.webp";
            wallTwo.src = "../public/assets/img/wallpaper/desktop2.webp";
            wallThree.src = "../public/assets/img/wallpaper/desktop3.webp";
            wallFour.src = "../public/assets/img/wallpaper/desktop4.webp";
        } else {
            wallOne.src = "../public/assets/img/wallpaper/mobile1.webp";
            wallTwo.src = "../public/assets/img/wallpaper/mobile2.webp";
            wallThree.src = "../public/assets/img/wallpaper/mobile3.webp";
            wallFour.src = "../public/assets/img/wallpaper/mobile4.webp";
        }
    }
}

// On lie aux événements onload et resize à la fonction
window.addEventListener('DOMContentLoaded', changeHomeWallpaper, false);
window.addEventListener('resize', changeHomeWallpaper, false);

/* Animation de l'apparition des articles sur le scroll */
const elementInView = (el, dividend = 1) => {
    const elementTop = el.getBoundingClientRect().top;
    return (
        elementTop <=
        (window.innerHeight || document.documentElement.clientHeight) / dividend
        );
    };
    
    const elementOutofView = (el) => {
        const elementTop = el.getBoundingClientRect().top;
        return (
            elementTop > (window.innerHeight || document.documentElement.clientHeight)
    );
};

const displayScrollElement = (element) => {
    element.classList.add("scrolled");
};

const hideScrollElement = (element) => {
    element.classList.remove("scrolled");
};

let scrollElements = document.querySelectorAll(".js-scroll");
const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
        if (elementInView(el, 1.25)) {
            displayScrollElement(el);
        } else if (elementOutofView(el)) {
            hideScrollElement(el)
        }
    })
}

window.addEventListener("scroll", () => {
    handleScrollAnimation();
});
