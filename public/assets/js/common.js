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