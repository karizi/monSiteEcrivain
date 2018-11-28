
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <img src="assets/images/logo.png" width="30" height="30" class="d-inline-block align-top ml-5 mr-2" alt="" />
        <a class="navbar-brand <?= set_active('index') ?>" href="index.php">Site Hicham BOUSSELHAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">

                <?php if( is_logged_in()) :?>

                <li class="nav-item <?= set_active('portfolio') ?>">
                    <a class="nav-link" href="portfolio.php?id=<?= get_session('user_id')?>">Portfolio<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item <?= set_active('blog') ?>">
                    <a class="nav-link" href="blog.php?id=<?= get_session('user_id')?>">Articles<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item <?= set_active('books') ?>">
                    <a class="nav-link" href="books.php?id=<?= get_session('user_id')?>">Livres<span class="sr-only">(current)</span></a>
                </li>

                <?php if($_SESSION['idType'] == 1) :?>
                <li class="nav-item <?= set_active('pageAdmin') ?>">
                    <a class="nav-link" href="pageAdmin.php?id=<?= get_session('user_id')?>">Page admin<span class="sr-only">(current)</span></a>
                </li>    
                <?php endif; ?>
                <li>
                    <a class="nav-link form-inline my-2 my-lg-0 navbar-right" href="logout.php">Se déconnecter<span class="sr-only">(current)</span></a>
                </li>
                <?php else: ?>


                <li class="nav-item <?= set_active('login') ?>">
                    <a class="nav-link" href="login.php?id">Connexion <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= set_active('register') ?>">
                    <a class="nav-link " href="register.php">Inscription <span class="sr-only">(current)</span></a>
                </li>

                <?php endif; ?>

            </ul>
        </div>

    </nav>
