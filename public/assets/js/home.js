/* Tableau des articles pour l'animation une fois le JSON chargé */

let scrollElements;

/* Ajout des 5 dernières news du JSON */

fetch('../public/assets/json/news.json').then(response => {
    return response.json();
}).then(data => {
    let content = document.querySelector('.bodyContainer');
    for (let i = 0; i <= 4; i++) {
        content.innerHTML += `
            <article class="js-scroll fade-in-bottom">
                <h3>Publié aujourd'hui à 12:05</h3>
                <div class="myArticleBody">
                    <div class="d-flex mb-2 pb-2 border-bottom border-dark position-relative">
                        <img class="bandPicture" src="${data.news[i].band_logo}" alt="Photo du groupe">
                        <div class="bandInfos">               
                            <p>Artiste : ${data.news[i].band_name}</p>
                            <p>Album : ${data.news[i].album_name}</p>
                        </div>
                    </div>
                    <p class="articleTitle"><strong>${data.news[i].title_article}</strong></p>
                    <div class="pt-2 border-top border-dark">
                        <img class="albumPicture float-end" src="${data.news[i].album_cover}" alt="Photo d'album">  
                        <span>${data.news[i].long_desc}</span>
                    </div>
                </div>                  
            </article>
        `;
    }

    /* Après le chargement, on prend tous les articles */
    scrollElements = document.querySelectorAll(".js-scroll");
}).catch(err => {
    console.log("Erreur du chargement du JSON");
});

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
