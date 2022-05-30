/* Ajout des 5 dernières news du JSON */

fetch('public/assets/json/news.json').then(response => {
    return response.json();
}).then(data => {
    let content = document.querySelector('.bodyContainer');
    for(let i = 0; i <= 4; i++){ 
        if(i == 0){
            console.log("coucou")
            content.innerHTML += `
                <div class="firstArticle">
                    <div class="itemcard">
                        <div class="titleArticle">
                            <h3 class="text-center">Actualités du jour</h3>
                        </div>
                        <div class="card borderFirstCard">
                            <div class="card__head">
                                <div class="card__image"
                                    style="background-image: url(${data.news[0].album_cover});">
                                </div>
                                <div class="card__author">
                                    <div class="author">
                                        <img src="${data.news[0].band_logo}" alt="Photo du groupe"
                                            class="author__image">
                                        <div class="author__content">
                                            <p class="author__header">${data.news[0].band_name}</p>
                                            <p class="author__subheader">${data.news[0].album_name}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__headline">${data.news[0].title_article}</h2>
                                <p class="card__text">${data.news[0].short_desc}</p>
                                <a class="moreInfo" href=#null>Plus d'infos !</a>
                            </div>
                        </div>
                    </div>
                </div>     
            `;
        }
        else {
            content.innerHTML += ` 
                <div class="otherArticle">
                    <div class="itemcard">
                        <div class="card borderOtherCard">
                            <div class="card__head">
                                <div class="card__image"
                                    style="background-image: url(${data.news[i].album_cover});"></div>
                                <div class="card__author">
                                    <div class="author">
                                        <img src="${data.news[i].band_logo}" alt="Photo du groupe"
                                            class="author__image">
                                        <div class="author__content">
                                            <p class="author__header">${data.news[i].band_name}</p>
                                            <p class="author__subheader">${data.news[i].album_name}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__headline">${data.news[i].title_article}</h2>
                                <p class="card__text">${data.news[i].short_desc}</p>
                                <a class="moreInfo" href=#null>Plus d'infos !</a>
                            </div>
                        </div>
                    </div>
                </div>          
            `;
        }
    }

}).catch(err => {
    console.log("Erreur du chargement du JSON");
});