/* Permutation onglet Connexion / Inscription */

const signupIn = document.querySelectorAll('.signupIn');
signupIn.forEach(item => {
    item.addEventListener('click', function() {
        document.querySelector(".form-signin").classList.toggle("form-signin-left");
        document.querySelector(".form-signup").classList.toggle("form-signup-left");
        document.querySelector(".signup-inactive").classList.toggle("signup-active");
        document.querySelector(".signin-active").classList.toggle("signin-inactive");
        //document.querySelector(".signup-inactive").classList.add("signup-active").classList.remove(".signup-inactive");
        //document.querySelector(".signin-active").classList.add("signin-inactive").classList.remove(".signup-active");
        document.querySelector(".forgot").classList.toggle("forgot-left");
        this.classList.remove(".idle").classList.add("active");
    });
});

/* Check du même mot de passe dans la partie inscription */

const btnSignup = document.querySelector('.btn-signup');
btnSignup.addEventListener('click', function() {
    if((pswCheck1.value.localeCompare(pswCheck2.value)) == -1) {


        pswCheck1.style.border = "1px solid red";
        pswCheck2.style.border = "1px solid red";
        



    }
});