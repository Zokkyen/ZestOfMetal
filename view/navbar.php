
<!-- Partie Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-0">
        <div class="container-fluid p-1">

            <!-- Affichage du logo et nom du site -->
            <a href="../accueil.html" class="d-flex align-items-center text-decoration-none">
                <img class="logoSite" src="../public/assets/img/logo/zestofmetal.png" alt="Zest Of Metal">
            </a>
            <h1 class="title-mobile-desktop">Zest Of Metal</h1>

            <!-- Bouton pour le offcanvas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu en Desktop -->
            <div class="navbar-desktop">

                <!-- Actualités -->
                <div class="dropdown-center mx-3">
                    <button class="border-0 fs-5 fw-bold bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actualités
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark mt-2 rounded-0">
                        <li><a class="dropdown-item" href="../controller/newsCtrl.php?time=day">Du jour</a></li>
                        <li><a class="dropdown-item" href="../controller/newsCtrl.php?time=week">De la semaine</a></li>
                        <li><a class="dropdown-item" href="../controller/newsCtrl.php?time=month">Du mois</a></li>
                        <li><a class="dropdown-item" href="../controller/newsCtrl.php?time=archive">Archives</a></li>
                    </ul>
                </div>

                <!-- Encyclopédie -->
                <div class="dropdown-center mx-3">
                    <button class="border-0 fs-5 fw-bold bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Encyclopédie
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark mt-2 rounded-0">
                        <li><a class="dropdown-item" href="../public/assets/php/encyclopedia?filter=band.php">Par artiste</a></li>
                        <li><a class="dropdown-item" href="../public/assets/php/encyclopedia?filter=style.php">Par genre</a></li>
                        <li><a class="dropdown-item" href="../public/assets/php/encyclopedia?filter=year.php">Par année</a></li>
                        <li><a class="dropdown-item" href="../public/assets/php/encyclopedia?filter=country.php">Par pays</a></li>
                        <li><a class="dropdown-item" href="../public/assets/php/encyclopedia?filter=label.php">Par label</a></li>
                    </ul>
                </div>

                <!-- Concerts -->
                <div class="dropdown-center mx-3">
                    <button class="border-0 fs-5 fw-bold bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Concerts
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark mt-2 rounded-0">
                        <li><a class="dropdown-item" href="../public/assets/php/concerts.php">Liste des programmations</a></li>
                    </ul>
                </div>

                <!-- Forum -->
                <div class="dropdown-center mx-3">
                    <button class="border-0 fs-5 fw-bold bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Forum
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark mt-2 rounded-0">
                        <li><a class="dropdown-item" href="public/assets/php/forum?type=general.php">Forum généraux</a></li>
                        <li><a class="dropdown-item" href="public/assets/php/forum?type=group.php">Forum de groupes</a></li>
                        <li><a class="dropdown-item" href="public/assets/php/forum?type=personnal.php">Forum personnels</a></li>
                        <li><a class="dropdown-item" href="public/assets/php/forum?type=lastpost.php">Derniers posts</a></li>
                        <li><a class="dropdown-item" href="public/assets/php/forum?type=search.php">Recherche</a></li>
                    </ul>
                </div>

                <!-- Change display of button or session if connexion is active -->
                <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        // Compte accessible
                        echo "
                            <div class='d-flex align-items-center position-relative mx-3'>
                                <span class='usernameText'>" . htmlspecialchars($_SESSION['username']) . "</span>
                                <a class='text-decoration-none stretched-link' href='../admin.html'>
                                    <img class='loginPicture' src='../public/assets/img/ico/account.svg' alt='Login Picture'>
                                </a>
                            </div>
                        ";
                    } else {
                        // Bouton de connexion au compte
                        echo "
                            <button type='button' class='connectButton mx-3'>
                                <a href='../connexion.html'>Connexion</a>
                            </button>
                        ";
                    }
                ?> 
            </div>

            <!-- Offcanvas avec le menu en Mobile -->
            <div class="offcanvas offcanvas-end bg-dark navbar-mobile" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body text-end text-white">
                    <div class="d-flex flex-column align-items-end">
                        <div class="accordion accordion-flush w-100" id="accordionFlushExample">

                            <!-- Actualités -->
                            <div class="accordion-item p-1">
                                <p class="accordion-header" id="flush-headingOne">
                                    <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"  aria-controls="flush-collapseOne">
                                        Actualités
                                    </button>
                                </p>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body d-flex flex-column">
                                        <a class="canvasLink" href="../controller/newsCtrl.php?time=day">Du jour</a>
                                        <a class="canvasLink" href="../controller/newsCtrl.php?time=week">De la semaine</a>
                                        <a class="canvasLink" href="../controller/newsCtrl.php?time=month">Du mois</a>
                                        <a class="canvasLink" href="../controller/newsCtrl.php?time=archive">Archives</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Encyclopédie -->
                            <div class="accordion-item p-1">
                                <p class="accordion-header" id="flush-headingTwo">
                                    <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"  aria-controls="flush-collapseTwo">
                                        Encyclopédie
                                    </button>
                                </p>
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
                                <p class="accordion-header" id="flush-headingThree">
                                    <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"  aria-controls="flush-collapseThree">
                                        Concerts
                                    </button>    
                                </p>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <a class="canvasLink" href="../public/assets/php/concerts.php">Liste des programmations</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Forum -->
                            <div class="accordion-item p-1">
                                <p class="accordion-header" id="flush-headingFour">
                                    <button class="w-100 text-end border-0 fs-5 fw-bold bg-transparent" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"  aria-controls="flush-collapseFour">
                                        Forum
                                    </button>  
                                </p>
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

                        <!-- Change display of button or session if connexion is active -->
                        <?php
                            // Compte accessible
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                echo "
                                    <div class='d-flex align-items-center position-relative mt-4'>
                                        <span class='usernameText'>" . htmlspecialchars($_SESSION['username']) . "</span>
                                        <a class='text-decoration-none stretched-link' href='../admin.html'>
                                            <img class='loginPicture' src='../public/assets/img/ico/account.svg' alt='Login Picture'>
                                        </a>
                                    </div>
                                ";
                            } else {
                                // Bouton de connexion au compte
                                echo "
                                    <button type='button' class='connectButton p-1'>
                                        <a href='../connexion.html'>Connexion</a>
                                    </button>
                                ";
                            }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
