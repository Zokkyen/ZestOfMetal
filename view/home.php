<!-- Corps de la page -->
<main>

    <!-- Message d'accueil -->
    <div class="container-fluid homePage">

        <!-- Page d'accueil avec carousel et textes d'accroches -->
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../public/assets/img/wallpaper/mobile1.webp" class="" alt="Wallpaper 1">
                </div>
                <div class="carousel-item">
                    <img src="../public/assets/img/wallpaper/mobile2.webp" class="" alt="Wallpaper 2">
                </div>
                <div class="carousel-item">
                    <img src="../public/assets/img/wallpaper/mobile3.webp" class="" alt="Wallpaper 3">
                </div>
                <div class="carousel-item">
                    <img src="../public/assets/img/wallpaper/mobile4.webp" class="" alt="Wallpaper 4">
                </div>
            </div>
        </div>

        <!-- Premier texte d'affichage sur la page home -->
        <div class="welcomeFirst text-center p-1">
            <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                <p>Retrouvez sur votre site préférée, toutes les dernières informations sur l'actualités Metal, sorties, concerts et plus encore.</p>
            </div>
        </div>

        <!-- Second texte d'affichage sur la page home -->
        <div class="welcomeLast text-center p-1">
            <div class="w-100 h-50 d-flex justify-content-center align-items-center">
                <p class="w-100 text-center">Scrollez vers le bas dès à présent pour découvrir les dernières actus du jour !</p>
            </div>

            <div class="w-100 h-50 d-flex justify-content-center align-items-center mt-4">
                <img src="../public/assets/img/ICO/down-arrow.png" alt="Down Arrow">
            </div>
        </div>
    </div>

    <!-- Titre des actualités récentes -->
    <div class="d-flex justify-content-center h-25">
        <h2>Article récent</h2>
    </div>

    <!-- Affichage dynamique des articles en fonction du flux RSS de Radio Metal -->
    <?php
        $nbOfArticle = 10;
        $articleArray = GetArticlesFromFlux($flux_news, $nbOfArticle);

        for ($i = 0; $i < $nbOfArticle; $i++) {
        ?>
            <article class="js-scroll fade-in-bottom">
                <h3>Publié le <?= $articleArray[$i][1] ?></h3>
                <div class="myArticleBody">
                    <?= $articleArray[$i][2] ?>
                    <p class="articleTitle"><strong><?= $articleArray[$i][0] ?></strong></p>
                    <div class="pt-2 border-top border-dark">
                        <span><?= $articleArray[$i][3] ?></span>
                    </div>
                </div>                  
            </article>
    <?php
    } ?>

</main>