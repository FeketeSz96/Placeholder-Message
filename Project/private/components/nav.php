<?php
lib('utils/authmanager');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-top: 25px">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?p=mainpages/magunkrol">Magunkról</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=mainpages/etlap">Étlap</a>
                </li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=mainpages/gallery">Galéria</a>
                    </li>
                <?php endif; ?>
                <?php if (isAdmin($_SESSION)): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=mainpages/users/browse">Felhasználók</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>