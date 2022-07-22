<!-- Titre des actualités -->
<div class="titleNews">
    <h2><?=$title_news ?></h2>
</div>

<!-- Affichage dynamique des articles en fonction du flux RSS de Radio Metal -->
<?php
    $articleArray = GetArticlesFromTime($flux_articles, $timeURL);
    if((count($articleArray)-1) < 1){

        echo "<div class='newsContainer'>
                <p>Aucun nouvel article n'est encore disponible pour ce jour.</p>
            </div>";
    } else {
?>

<div class="container-fluid">
    <div class="row">
        <?php
            for ($i = 0; $i < (count($articleArray)-1); $i++) {
        ?> 
            <article class="col-12 col-md-6 col-lg-5 col-xxl-4 js-scroll fade-in-bottom">
                <h3>Publié le <?= $articleArray[$i][1] ?></h3>
                <div class="myArticleBody">
                    <?= $articleArray[$i][2] ?>
                    <p class="articleTitle"><strong><?= $articleArray[$i][0] ?></strong></p>
                    <div class="pt-2 border-top border-dark overflow-hidden">
                        <span><?= $articleArray[$i][3] ?></span>
                    </div>
                </div>                  
            </article>
        <?php
        } 
    }
    ?>        
    </div>
</div>