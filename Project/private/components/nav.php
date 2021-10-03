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
            </ul>
        </div>
    </div>
</nav>