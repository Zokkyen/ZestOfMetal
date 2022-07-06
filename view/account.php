
<!-- Corps de la page -->
<main>

    <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<p>Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!</p>";
        } else {
            echo "<p>Please log in first to see this page.</p>";
        }
    ?>

    <div class="container">
        
        <fieldset class="scheduler-border rounded">
            <legend class="scheduler-border">Profil Utilisateur</legend>
            
            <div class="control-group">
                <div class="d-flex">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Pseudo : </label>        
                    <div class="widthInputAccount">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Zokkyen">
                    </div>
                </div>
                <div class="d-flex">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Mail : </label>
                    <div class="widthInputAccount">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="stephane.swaenepoel@wanadoo.fr">
                    </div> 
                </div>
            </div>
        </fieldset>

        <fieldset class="scheduler-border rounded">
            <legend class="scheduler-border">Informations personnelles</legend>

            <div class="control-group d-flex">
                <div class="me-4">
                    <label class="control-label input-label" for="startTime">Changer le mot de passe</label>
                    <div class="controls bootstrap-timepicker">
                        <input type="password" class="borderInputPwd" name="adminPwd"/>
                    </div>
                    <label class="control-label input-label" for="startTime">Confirmer le mot de passe</label>
                    <div class="controls bootstrap-timepicker">
                        <input type="password" class="borderInputPwd" name="adminPwd"/>
                    </div>                        
                </div>
                <div class="d-flex flex-column justify-content-center pt-3">
                    <button type="button" class="chgPwd">Confirmer</button>
                </div>
            </div>
        </fieldset>
</main>
