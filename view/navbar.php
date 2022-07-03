
    <!-- Partie Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-0">
            <div class="container-fluid p-1">

                <!-- Affichage du logo et nom du site -->
                <a href="../accueil.html" class="d-flex align-items-center text-decoration-none">
                    <img class="logoSite" src="../public/assets/img/logo/zestofmetal.ico" alt="Zest Of Metal">
                    <h1 class="m-0 fs-4 ms-2 text-nowrap">Zest Of Metal</h1>
                </a>

                <!-- Bouton pour le offcanvas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Offcanvas avec le menu -->
                <div class="offcanvas offcanvas-end  bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-end text-white">
                        <div class="d-flex flex-column align-items-end">

                            <!-- Actualités -->
                            <div class="accordion accordion-flush w-100" id="accordionFlushExample">
                                <div class="accordion-item p-1">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"  aria-controls="flush-collapseOne">
                                            Actualités
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a class="canvasLink" href="../public/assets/php/news?time=day.php">Du jour</a>
                                            <a class="canvasLink" href="../public/assets/php/news?time=week.php">De la semaine</a>
                                            <a class="canvasLink" href="../public/assets/php/news?time=mounth.php">Du mois</a>
                                            <a class="canvasLink" href="../public/assets/php/news?time=archive.php">Archives</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Encyclopédie -->
                                <div class="accordion-item p-1">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"  aria-controls="flush-collapseTwo">
                                            Encyclopédie
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a class="canvasLink" href="../public/assets/php/encyclopedia?filter=band.php">Par artiste</a>
                                            <a class="canvasLink" href="../public/assets/php/encyclopedia?filter=style.php">Par genre</a>
                                            <a class="canvasLink" href="../public/assets/php/encyclopedia?filter=year.php">Par année</a>
                                            <a class="canvasLink" href="../public/assets/php/encyclopedia?filter=country.php">Par pays</a>
                                            <a class="canvasLink" href="../public/assets/php/encyclopedia?filter=label.php">Par label</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Concerts -->
                                <div class="accordion-item p-1">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"  aria-controls="flush-collapseThree">
                                            Concerts
                                        </button>    
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <a class="canvasLink" href="../public/assets/php/concerts.php">Liste des programmations</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Forum -->
                                <div class="accordion-item p-1">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"  aria-controls="flush-collapseFour">
                                            Forum
                                        </button>  
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a class="canvasLink" href="public/assets/php/forum?type=general.php">Forum généraux</a>
                                            <a class="canvasLink" href="public/assets/php/forum?type=group.php">Forum de groupes</a>
                                            <a class="canvasLink" href="public/assets/php/forum?type=personnal.php">Forum personnels</a>
                                            <a class="canvasLink" href="public/assets/php/forum?type=lastpost.php">Derniers posts</a>
                                            <a class="canvasLink" href="public/assets/php/forum?type=search.php">Recherche</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bouton de connexion au compte -->
                            <button type="button" class="connectButton p-1">
                                <a href="../connexion.html">Connexion</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
