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


/* Permutation onglet Connexion / Inscription */

const signupIn = document.querySelectorAll('.signupIn');
signupIn.forEach(item => {
    item.addEventListener('click', function () {
        document.querySelector(".form-signin").classList.toggle("form-signin-left");
        document.querySelector(".form-signup").classList.toggle("form-signup-left");
        document.querySelector(".signup-inactive").classList.toggle("signup-active");
        document.querySelector(".signin-active").classList.toggle("signin-inactive");
        document.querySelector(".forgot").classList.toggle("forgot-left");
    });
});

/* Check du même mot de passe dans la partie inscription */

const btnSignup = document.querySelector('.btn-signup');
btnSignup.addEventListener('click', function () {
    if ((pswCheck1.value.localeCompare(pswCheck2.value)) == -1) {
        pswCheck1.style.border = "1px solid red";
        pswCheck2.style.border = "1px solid red";




    }
});