/* Ajout des 5 dernières news du JSON */

fetch('../public/assets/json/news.json').then(response => {
    return response.json();
}).then(data => {
    let content = document.querySelector('.bodyContainer');
    for(let i = 0; i <= 4; i++){ 
        content.innerHTML += `
            <div class="myArticle_body">
                <div class="myArticle_top">
                    <img class="myArticle_albumImg" src="${data.news[i].album_cover}" alt="Photo d'album">  
                    <div class="d-flex band_information">
                        <img src="${data.news[i].band_logo}" alt="Photo du groupe">
                        <div class="d-flex flex-column justify-content-center">               
                            <p>${data.news[i].band_name}</p>
                            <p>${data.news[i].album_name}</p>
                        </div>
                    </div>
                </div>

                <div class="myArticle_bottom">
                    <h3>${data.news[i].title_article}</h3>
                    <p>${data.news[i].short_desc}</p>
                    <a href="#">Plus d'infos ici !</a>
                </div>
            </div>
        `;
    }
}).catch(err => {
    console.log("Erreur du chargement du JSON");
});