<?php $title = "Page de livre";

    $title = "Page de profil";

    include ('partials/_header.php');

    include ('partials/_nav.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1><?= $book->nameBook; ?></h1>

            <hr />
            <!-------------------------------PARTIE COMMENTAIRE--------------------------------------------->


            <?php include('partials/_errors.php')?>

            <form action="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $book->idBook ?>" method = "post">
                <!-- Button trigger modal -->
                <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Commenter
                    </button>
                    <a class="btn btn-primary" href="books.php?id=<?= get_session('user_id') ?>">Retour aux liste des livres</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Sésissez votre commentaire</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <textarea type="text" rows="2" cols="60" name="comment" placeholder="Texte à saisir" required="required" ></textarea>
                            </div>
                            <div class="modal-footer">
                                <a href="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $books->idBook ?>" class="btn btn-primary">Quitter</a>
                                <button type="submit" name="commenter" class="btn btn-primary">Commenter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <h2>Commentaires</h2>

<?php $comments = getCommentsBook($book->idBook ); ?>
<?php foreach($comments as $com): ?>

    <h4><?= $com->name ?></h4>
    <h6><?= $com->pseudo ?></h6>

    <h6><?= $com->comment ?></h6>

    <h6><?= $com->date ?></h6>



<?php endforeach; ?>

        </div>
    </div>
</div>




<?php require 'partials/_footer.php'?>
