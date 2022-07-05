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

/* Changer affichage du mot de passe */ 
let pswIcon = document.querySelectorAll('.fa-regular');
pswIcon.forEach(element => {
    element.addEventListener('click', () => {
        console.log(element.classList[1])
        element.classList.toggle('fa-eye-slash');
        element.classList.toggle('fa-eye');

        if(element.classList.contains("fa-eye")) {
            element.parentNode.children[0].type = "text";
        }
        else {
            element.parentNode.children[0].type = "password";
        }
    })
});