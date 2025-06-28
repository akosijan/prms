<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Parish Records</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-6"> 
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'baptism.php' ? 'active text-warning' : '' ?>" href="baptism.php">Baptism</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'confirmation.php' ? 'active text-warning' : '' ?>" href="confirmation.php">Confirmation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'marriage.php' ? 'active text-warning' : '' ?>" href="marriage.php">Marriage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'death.php' ? 'active text-warning' : '' ?>" href="death.php">Death</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
