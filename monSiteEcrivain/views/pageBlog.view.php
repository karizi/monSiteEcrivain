<?php

    //$title = "Page de mes blogs";

    include ('partials/_header.php');
    include('filters/auth_filter.php');



$date =  strtotime($article->date);
$date = date("d-m-y", $date);
?>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 alert alert-secondary  mt-5">
            <h2 class="card-title1"><?= $article->title ?></h2>
            <article>
                <p><?= $article->content; ?></p>
                <hr>
            </article>
            <div>
                <small class="d-block text-right mt-3"><?= $date ?></small>
                <a href="" data-toggle="modal" data-target="#exampleModalCenter" class="mr-3">Commenter</a>

                <a href="blog.php?id=<?= get_session('user_id') ?>">Retour aux articles</a>
            </div>
        </div>
    </div>


            <!-------------------------------PARTIE SAISIR DE COMMENTAIRE--------------------------------------------->


<?php include('partials/_errors.php')?>

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
                    <form action="" method = "post">
                    <textarea type="text" rows="2" cols="60" name="comment" placeholder="Texte à saisir" required="required" ></textarea>

                </div>
                <div class="modal-footer">

                    <button type="submit" name="commenter" class="btn btn-primary">Commenter</button>
                    </form><a href="pageBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article->idBlog ?>" class="btn btn-primary">Quitter</a>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-3"></div>
            <h2 class="col-6 mb-3" id="commentaires">Commentaires :</h2>
    </div>

            <!-------------------------------PARTIE AFFICHAGE DE COMMENTAIRES--------------------------------------------->

<?php $comments = getCommentsBlog($article->idBlog); ?>
<?php foreach($comments as $com):
    $date =  strtotime($com->date);
    $date = date("d-m-y", $date);
    ?>





    <div class="row">
        <div class="col-3"></div>

        <div class="my-3 p-3 bg-white rounded shadow-sm mb-2 col-6" >
            <h6 class="border-bottom border-gray pb-2 mb-0"><?= $com->pseudo ?></h6>
            <div class="media text-muted pt-3">
                <img src="assets/images/comment.png" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"><?= $com->comment ?></p>
                <div>
                    <small class="d-block text-right mt-3"><?= $date ?></small>

                </div>
            </div>
        </div>
    </div>







<?php endforeach; ?>

<?php require 'partials/_footer.php' ?>

