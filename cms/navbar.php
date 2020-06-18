<nav class="navbar">
    <ul class="navbar-nav ml-5 mt-3 h2">
        <div class="border-bottom">
            <h4>Gebruiker: 
                <?php 
                    echo $_SESSION['name'];
                ?>
            </h4>
            <a class="nav-link text-dark h4" href="../login/logout.php">Uitloggen</a>
        </div>
        <li class="nav-item">
            <a class="nav-link text-dark" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="mededelingen.php">Mededelingen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="docenten.php">Docenten</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="rooster.php">Rooster</a>
        </li>
    </ul>
</nav>