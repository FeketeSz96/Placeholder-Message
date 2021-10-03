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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <?php if (isset($_SESSION['user'])): ?>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href='?p=auth/profil'>Profil</a></li>
                            <li><a class="dropdown-item" href='?p=auth/logout'>Kijelentkezés</a></li>
                        </ul>
                    <?php else: ?>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?p=auth/register">Regisztráció</a></li>
                            <li><a class="dropdown-item" href="?p=auth/login">Bejelentkezés</a></li>
                        </ul>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>