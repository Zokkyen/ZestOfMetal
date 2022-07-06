
<!-- Corps de la page -->
<main>
    <div class="container">


    <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<p>Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!</p>";
        } else {
            echo "<p>Please log in first to see this page.</p>";
        }
    ?>



    </div>
</main>
