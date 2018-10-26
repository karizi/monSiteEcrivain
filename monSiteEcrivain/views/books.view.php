<?php

    $title = "Page de livres";

    include ('partials/_header.php');

    include ('partials/_nav.php');

?>



<?php $books = getBooks(); ?>
<?php foreach($books as $book): ?>
    <div class="row">
        <div class="col-md-4">
            <div id="card1" class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h1 class="card-text"><?= $book->nameBook ?></h1>
                    <a href="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $book->idBook ?>">Commenter ou voir les commentaires</a>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">

                            <a href="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $book->idBook ?>">Commenter ou voir les commentaires</a>
                            <a href="<?=$book->bookUrl?>" target="_blank">Lire le livre</a>


                        </div>
                        <small class="text-muted">Gratuit</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php endforeach; ?>



<?php $books = getBooks(); ?>
<?php foreach($books as $book): ?>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                    <div class="card-body">
                        <h1 class="card-text"><?= $book->nameBook ?></h1>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $book->idBook ?>">Commenter ou voir les commentaires</a>
                                <a href="<?=$book->bookUrl?>" target="_blank">Lire le livre</a>

                            </div>
                            <small class="text-muted">Gratuit</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
 <?php endforeach; ?>

<?php $books = getBooks(); ?>
<?php foreach($books as $book): ?>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <div class="card-deck">

                        <div id="card1 class="card">

                            <div class="card-body ">
                                <h5 class="card-text"><?= $book->nameBook ?></h5>
                                <p class="card-text"><a href="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $book->idBook ?>">Commenter ou voir les commentaires</a></p>
                                <p class="card-text"><a href="<?=$book->bookUrl?>" target="_blank">Lire le livre</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php endforeach; ?>
    <?php require 'partials/_footer.php'?>






