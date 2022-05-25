/* Permutation onglet Connexion / Inscription */

const signupIn = document.querySelectorAll('.signupIn');
signupIn.forEach(item => {
    item.addEventListener('click', function() {
        document.querySelector(".form-signin").classList.toggle("form-signin-left");
        document.querySelector(".form-signup").classList.toggle("form-signup-left");
        document.querySelector(".signup-inactive").classList.toggle("signup-active");
        document.querySelector(".signin-active").classList.toggle("signin-inactive");
        document.querySelector(".forgot").classList.toggle("forgot-left");
        this.classList.remove(".idle").classList.add("active");
    });
});

const btnSignup = document.querySelectorAll('.btn-signup');
btnSignup.addEventListener('click', function() {
    document.querySelector(".form-signup-left").classList.toggle("form-signup-down");
});

const btnSignin = document.querySelectorAll('.btn-signin');
btnSignin.addEventListener('click', function() {
    document.querySelector(".forgot").classList.toggle("forgot-fade");
});