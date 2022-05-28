/* Les Regex */
const pseudoReg = /^[a-zA-Z]{1,20}[0-9]{0,3}$/;
const pwdReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
const mailReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

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

/* Connexion du compte */
connectBtn.addEventListener('click', () => {
    if((userInputModal.value != "") && (pswInputModal.value != "")){

        userInputModal.style.border = "none";
        pswInputModal.style.border = "none";
        pswInputModal.parentNode.children[2].innerText = "";

        if((pseudoReg.test(userInputModal.value)) && (pwdReg.test(pswInputModal.value))){
            let connectCheck = new bootstrap.Modal(document.getElementById('connectCheck'))    
            connectCheck.show();

            if((userInputModal.value == "Zokkyen") && (pswInputModal.value == "LaManu80!")){
                connectCheck.hide();
                userModalConnexion.innerText = `Bonjour mon Admin préféré !`
            }
            else {
                userModalConnexion.innerText = `Bonjour ${userInputModal.value}, bienvenue sur votre compte.`
            }

            const myTimeout = setTimeout(() => {
                if((userInputModal.value == "Zokkyen") && (pswInputModal.value == "LaManu80!")){
                    connectCheck.hide();
                    open('../html/admin.html', '_parent');
                }
                else {
                    open('../html/account.html', '_parent');
                }
            }, 2000);
        }

        else{
            if(!pseudoReg.test(userInputModal.value)){             
                userInputModal.style.border = "1px solid red";
            }

            if(!pwdReg.test(pswInputModal.value)){
                pswInputModal.style.border = "1px solid red";
                pswInputModal.parentNode.children[2].innerText = '8 caratères minimum dont une majuscule, une minuscule, un chiffre et un caractère spécial';
            }
        }
    }
    else{
        userInputModal.style.border = "1px solid red";  
        pswInputModal.style.border = "1px solid red";     
    }
})

/* Changer affichage du mot de passe */ 
let pswIcon = document.querySelectorAll('.fa-solid');
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

/* Inscription du compte */
registerBtn.addEventListener('click', () => {
    if((userRegistModal.value != "") && (mailRegistModal.value != "") && (pswCheck1.value != "") && (pswCheck2.value != "")){

        userRegistModal.style.border = "none";
        mailRegistModal.style.border = "none";
        pswCheck1.style.border = "none";
        pswCheck2.style.border = "none";

        mailRegistModal.parentNode.children[2].innerText = "";
        pswCheck1.parentNode.children[2].innerText = "";
        pswCheck2.parentNode.children[2].innerText = "";

        if((pseudoReg.test(userRegistModal.value)) && (mailReg.test(mailRegistModal.value) && (pwdReg.test(pswCheck1.value)) && (pwdReg.test(pswCheck2.value)))){     
            if(pswCheck1.value === pswCheck2.value){
                let registerCheck = new bootstrap.Modal(document.getElementById('registerCheck'));  
                registerCheck.show();
                
                const myTimeout = setTimeout(() => {
                    registerCheck.hide();                   
                    window.location.reload();
                }, 5000);
            }
            else{
                pswCheck2.parentNode.children[2].innerText = 'Les mots de passe ne correspondent pas';
            }
        }

        else{
            if(!pseudoReg.test(userRegistModal.value)){             
                userRegistModal.style.border = "1px solid red";
            }
            if(!mailReg.test(mailRegistModal.value)){
                mailRegistModal.style.border = "1px solid red";
                mailRegistModal.parentNode.children[2].innerText = "L'adresse mail n'est pas valide";
            }
            if((!pwdReg.test(pswCheck1.value)) || (!pwdReg.test(pswCheck2.value))){
                if(!pwdReg.test(pswCheck1.value)){
                    pswCheck1.style.border = "1px solid red";
                }
                if(!pwdReg.test(pswCheck2.value)){
                    pswCheck2.style.border = "1px solid red";
                }
                pswCheck2.parentNode.children[2].innerText = '8 caratères minimum dont une majuscule, une minuscule, un chiffre et un caractère spécial';
            }
        }
    }
    else{
        userRegistModal.style.border = "1px solid red";
        mailRegistModal.style.border = "1px solid red";
        pswCheck1.style.border = "1px solid red";
        pswCheck2.style.border = "1px solid red";
    }
})