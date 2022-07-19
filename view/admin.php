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

                        <div>Pseudo</div>
                        <div>Adresse mail</div>
                        <div>Status</div>
                        <div>Nombre modifications</div>
                        <div>Dernière modification</div>

                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        
                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>

                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        <div>ok</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>