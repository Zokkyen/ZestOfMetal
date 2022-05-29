/* Petite boutade cachée */
let id = null;
let counTreasure = 0;
let bodySurprise = document.querySelector('body');
bodySurprise.innerHTML += '<img id="surprise" src="public/assets/img/surprise/ThierryMetal.png" alt="Surprise"></img>';
bodySurprise.innerHTML += '<img id="surprise2" src="public/assets/img/surprise/ThierryMetal.png" alt="Surprise"></img>';

function suprisAnim() {
    bodySurprise.style.overflow =  "hidden";
    var elem = document.getElementById("surprise");
    elem.style.top = '50%';
    elem.style.left = '-30vw';
    elem.style.display = "block";

    var elem2 = document.getElementById("surprise2");
    elem2.style.left = '50%';
    elem2.style.top = '-30vh';
    elem2.style.display = "block";

    var pos = -30;
    clearInterval(id);
    id = setInterval(frame, 10);
    function frame() {
        if (pos == 130) {
            clearInterval(id);
            elem.style.display = "none";
            elem2.style.display = "none";
            bodySurprise.style.overflow =  "initial";
        } else {
            pos++;
            elem.style.left = pos + 'vw';
            elem2.style.top = pos + 'vh';
        }
    }
}

window.addEventListener("click", (event) => {
    if(event.path[0].innerText == "©Zokkyen"){
        counTreasure++;
        if(counTreasure == 20){
            suprisAnim();
            counTreasure = 0;
        }
    }
});

/* Fermer le menu de la navbar quand click sur un élement du menu */
const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarNav')
const bsCollapse = new bootstrap.Collapse(menuToggle, {
    toggle: false
})

navLinks.forEach((l) => {
    l.addEventListener('click', () => {
        bsCollapse.toggle()
    })
})

/* Fermer le menu de la navbar quand click en dehors (JQUERY à convertir en JS) */
$(document).ready(function () {
    $(document).click(function () {
        $('.navbar-collapse').collapse('hide');
    });
});