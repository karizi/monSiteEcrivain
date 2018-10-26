<?php

    $title = "Page de mes blogs";

    include ('partials/_header.php');

    include('filters/auth_filter.php');

?>




<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <!-------------------------------PARTIE ARTICLE--------------------------------------------->
            <div class="mt-5">
                <div class="card-body">
                    <h5 class="card-title"><?= $article->title ?></h5>
                    <p><?= $article->content; ?></p>
                    <div>
                        <small class="d-block text-right mt-3"><?= $article->date ?></small>
                        <a href="" data-toggle="modal" data-target="#exampleModalCenter" class="mr-3">Commenter</a>

                        <a href="blog.php?id=<?= get_session('user_id') ?>">Retour aux articles</a>
                    </div>

                </div>
            </div>

            <!-------------------------------PARTIE SAISIR DE COMMENTAIRE--------------------------------------------->

            <?php include('partials/_errors.php')?>

            <form action="pageBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article->idBlog ?>" method = "post">

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
                                <a href="pageBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article->idBlog ?>" class="btn btn-primary">Quitter</a>
                                <button href="pageBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article->idBlog ?>" type="submit" name="commenter" class="btn btn-primary">Commenter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <h2 style=" color: #00008B;margin-top: 10px;">Commentaires :</h2>

            <!-------------------------------PARTIE AFFICHAGE DE COMMENTAIRES--------------------------------------------->

            <?php $comments = getCommentsBlog($article->idBlog); ?>
            <?php foreach($comments as $com): ?>
                <div class="commentaire">
                    <h5 style="margin-left: 10px"><?= $com->pseudo ?></h5>

                    <h6 style="margin-left: 40px"><?= $com->comment ?></h6>

                    <small class="d-block text-right mt-3 pr-5"><?= $com->date ?></small>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>





<?php require 'partials/_footer.php' ?>