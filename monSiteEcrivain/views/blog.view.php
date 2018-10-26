<?php

$title = "Page de mes blogues";

include ('partials/_header.php');

include ('partials/_nav.php');

include('filters/auth_filter.php');

?>
    <!-- slider -->
    <div id="imgTete" class="container-fluid slider d-flex justify-content-center item align-items-center">
        <div class="text-center text-white">
            <h3 class="hidden-xs-down">Lorem ipsum dolor sit amet consectetur!</h3>
            <h1 class="display">Lorem ipsum dolor</h1>
            <p class="lead hidden-xs-down">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
    <!-- fin slider -->
    <!-- main -->
    <div class="container mb-5">
        <h3>Mes Blogs</h3>
        <p class="lead">Lorem ipsum dolor sit amet consectetur.</p>
        <hr>
        <div class="row">
            <!-- articles -->
            <div class="col-12 col-md-9">
                <!-- 1 article -->

                <?php $articles = getBlogs(); ?>
                <?php foreach($articles as $article): ?>

                <div class="row mb-5">
                    <div class="col-3">
                        <img src="assets/images/cards1.jpg" alt="" class="img-fluid">
                        <p class="lead text-center"><?= $article->date ?></p>
                    </div>
                    <div class="col-9">
                        <h3><?= $article->title ?></h3>

                        <p><?= substr($article->content, 0, 500) ?></p>

                        <a style="margin-left: 10px" href="pageBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article->idBlog ?>">Lire la suite</a>
                    </div>
                </div>

                <?php endforeach; ?>
                <!-- fin 1 article -->

                <!-- menu numero -->
                <div class="btn-toolbar d-flex justify-content-center mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary active">Précédante</button>
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <button type="button" class="btn btn-secondary">3</button>
                        <button type="button" class="btn btn-secondary">4</button>
                        <button type="button" class="btn btn-secondary active">Suivant</button>
                    </div>
                </div>
                <!-- fin menu numero -->
            </div>
            <!-- fin articles -->
        </div>
    </div>

    <!-- fin main -->

<?php include ('partials/_footer.php');?>
<!-- jQuery first, then Tether, then Bootstrap JS. -->

