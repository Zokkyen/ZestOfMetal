<!-- Corps de la page -->
<main>
    <div class="dashboard-fullContainer">
        <div class="dashboard-container">

            <!-- Dashboard Title -->
            <div class="dashboard-title">
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo "<span>Bienvenue, cher admin " . htmlspecialchars($_SESSION['username']) . " !</span>";
                } else {
                    echo "<span>Il y a un problème par ici !</span>";
                }
                ?>
            </div>

            <!-- Dashboard Menu Navigation -->
            <div class="dashboard-menu">
                <input type="submit" class="btn" name="userDash" value="Utilisateurs">
                <input type="submit" class="btn" name="addDash" value="Ajout contenu">
                <input type="submit" class="btn" name="approDash" value="Approbations">
            </div>

            <!-- Dashboard -->
            <div class="dashboard-window">
                <div class="dashboard-main">
                    <h5 class="dashboard-subTitle m-0">Utilisateurs</h5>

                    <div class="dashboard-content">

                        <div>Row 1</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>Description</div>
                        <div>Description</div>

                        <div>Row 2</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>Description</div>
                        <div>Description</div>

                        <div>Row 3</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>Description</div>
                        <div>Description</div>

                        <div>Row 4 too long for the first column</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>Description</div>
                        <div>Description</div>

                        <div>Row 5</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>Description</div>
                        <div>Description</div>

                        <div>Row 6</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>Description</div>
                        <div>Description</div>

                        <div>Row 7</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>1.00</div>
                        <div>Description</div>
                        <div>Description</div>
                        <div>Description</div>
                    </div>


                </div>










            </div>
        </div>
    </div>
</main>