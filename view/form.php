
    <!-- Corps de la page -->
    <main>
        <!-- Formulaire d'inscription / connection -->
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

                    <!-- Formulaire de connection -->
                    <form class="form-signin" method="POST" name="formSignin" novalidate>

                        <label for="username">Pseudo</label>
                        <input id="userInputModal" class="form-styling" type="text" name="logSignin" value="<?=($logSignin??'')?>" required/>
                        <p class="error"><?=$errorSignin['logSignin']??''?></p>

                        <label for="password">Mot de passe</label>
                        <div class="input-icon-container m-0">
                            <input id="pswInputModal" class="form-styling" type="password" name="pswSignin" value="<?=($pswSignin??'')?>" required/>
                            <i class="fa-regular fa-eye-slash"></i>
                            <p class="error"><?=$errorSignin['pswSignin']??''?></p>
                        </div>

                        <input type="submit" name="sendForm" value="SE CONNECTER" class="btn-signin"></input>
                    </form>

                    <!-- Formulaire d'inscription -->
                    <form class="form-signup" method="POST" name="formSignup" novalidate>

                        <label for="username">Pseudo</label>
                        <input id="userRegistModal" class="form-styling" type="text" name="logSignup" value="<?=($logSignup??'')?>" required/>
                        <p class="error"><?=$errorSignup['logSignup']??''?></p>

                        <div class="input-icon-container">
                            <label for="email">Email</label>
                            <input id="mailRegistModal" class="form-styling m-0" type="email" name="mailSignup" value="<?=($mailSignup??'')?>" required/>
                            <p class="error"><?=$errorSignup['mailSignup']??''?></p>
                        </div>

                        <label for="password">Mot de passe</label>
                        <div class="input-icon-container">
                            <input id="pswCheck1" type="password" name="pswSignup1" value="<?=($pswSignin1??'')?>" required/>
                            <i class="fa-regular fa-eye-slash"></i>
                        </div>

                        <label for="password">Confirmation du Mot de passe</label>
                        <div class="input-icon-container">
                            <input id="pswCheck2" type="password" name="pswSignup2" value="<?=($pswSignin2??'')?>" required/>
                            <i class="fa-regular fa-eye-slash"></i>
                            <p class="error"><?=$errorSignup['pswSignup']??''?></p>
                        </div>

                        <input type="submit" name="sendForm" value="S'ENREGISTRER" class="btn-signup"></input>
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
                        pattern="<?=REGEX_EMAIL?>" />
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
                        <img class="validConfirm" src="../public/assets/img/ICO/valid.png" alt="Logo de validation">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
