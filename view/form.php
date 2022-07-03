
    <!-- Corps de la page -->
    <main>
        <!-- Formulaire d'inscription / connexion -->
        <div class="container-form">
            <div class="frame">
                <div class="nav-form">
                    <ul class="links">
                        <li class="signin-active">
                            <a class="signupIn">Connexion</a>
                        </li>
                        <li class="signup-inactive">
                            <a class="signupIn">Inscription</a>
                        </li>
                    </ul>
                </div>
                <div class="formContainer">
                    <form class="form-signin" action="" method="post" name="form">

                        <label for="username">Pseudo</label>
                        <input id="userInputModal" class="form-styling" type="text" name="username" placeholder="" required/>

                        <label for="password">Mot de passe</label>
                        <div class="input-icon-container">
                            <input id="pswInputModal" type="password" name="passwordUser" placeholder="" required/>
                            <i class="fa-solid fa-eye-slash"></i>
                            <span></span>
                        </div>

                        <button id="connectBtn" type="button" class="btn-signin">SE CONNECTER</button>
                    </form>
                    <form class="form-signup" action="" method="post" name="form">

                        <label for="username">Pseudo</label>
                        <input id="userRegistModal" class="form-styling" type="text" name="username" placeholder="" required/>

                        <div class="input-icon-container">
                            <label for="email">Email</label>
                            <input id="mailRegistModal" class="form-styling m-0" type="email" name="email" placeholder="" required/>
                            <span></span>
                        </div>

                        <label for="password">Mot de passe</label>
                        <div class="input-icon-container">
                            <input id="pswCheck1" type="password" name="passwordUser" placeholder="" required/>
                            <i class="fa-solid fa-eye-slash"></i>
                            <span></span>
                        </div>

                        <label for="password">Confirmation du Mot de passe</label>
                        <div class="input-icon-container">
                            <input id="pswCheck2" type="password" name="passwordUser" placeholder="" required/>
                            <i class="fa-solid fa-eye-slash"></i>
                            <span></span>
                        </div>

                        <button id="registerBtn" type="button" class="btn-signup">S'ENREGISTRER</button>
                    </form>
                </div>
                <div class="forgot">
                    <a data-bs-toggle="modal" data-bs-target="#pswModal">
                        Vous avez oublié votre mot de passe ?
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal connexion réussie -->
        <div class="modal fade" id="connectCheck" aria-hidden="true" aria-labelledby="connectCheckLabel" 
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="connectCheckLabel">Connexion réussie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="userModalConnexion"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal inscription réussie -->
        <div class="modal fade" id="registerCheck" aria-hidden="true" aria-labelledby="registerCheckLabel" 
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerCheckLabel">Enregistrement réussi !</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Veuillez regarder vos mails afin de valider votre inscription.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="btn btn-secondary" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Double Modals retrouver son mot de passe + confirmation -->
        <div class="modal fade" id="pswModal" aria-hidden="true" aria-labelledby="pswModalLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pswModalLabel">Retrouver votre mot de passe en indiquant votre mail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input class="pswInputModal" type="email" name="email" placeholder="Adresse mail" required
                        pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" />
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-target="#validModal"
                            data-bs-toggle="modal">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="validModal" aria-hidden="true" aria-labelledby="validModalLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="validModalLabel">Un mail vous a été envoyé !</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="validConfirm" src="../img/ICO/valid.png" alt="Logo de validation">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
