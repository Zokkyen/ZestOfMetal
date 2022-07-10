
<!-- Corps de la page -->
<main>
    <div class="dashboard-fullContainer">
        <div class="dashboard-container">

            <!-- Dashboard Title -->
            <div class="dashboard-title">
                <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        echo "<span>Bienvenue, cher Admin " . htmlspecialchars($_SESSION['username']) . " !</span>";
                    } else {
                        echo "<span>Il y a un problème par ici !</span>";
                    }
                ?>
            </div>           
            
            <!-- Dashboard Menu Navigation -->
            <div class="dashboard-menu">
                <input type="submit" class="btn btn-secondary" name="infoDash" value="Informations">
                <input type="submit" class="btn btn-secondary" name="artDash" value="Articles">
                <input type="submit" class="btn btn-secondary" name="conDash" value="Concerts">
                <input type="submit" class="btn btn-secondary" name="forDash" value="Forum">
                <input type="submit" class="btn btn-secondary" name="memDash" value="Nvx membres">
                <input type="submit" class="btn btn-secondary" name="appDash" value="Approbations">
            </div>

            <!-- Dashboard -->
            <div class="dashboard-window"> 
                <div class="dashboard">

                </div>










            </div>       
        </div>
    </div>
</main>
