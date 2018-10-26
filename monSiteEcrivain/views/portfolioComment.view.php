<?php

    $title = "Page de profil";

    include ('partials/_header.php');

    include ('partials/_nav.php');

    include('filters/auth_filter.php');

?>


<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <!-------------------------------PARTIE COMMENTAIRE--------------------------------------------->


            <?php include('partials/_errors.php')?>


            <h2>Commentaires</h2>

            <?php $listComments = getCommentsPortf1(); ?>
            <?php foreach($listComments as $com): ?>

                <div class="commentaire">
                    <h5 style="margin-left: 10px"><?= $com->pseudo ?></h5>

                    <h6 style="margin-left: 40px"><?= $com->comment ?></h6>

                    <small class="d-block text-right mt-3 pr-5"><?= $com->date ?></small>
                </div>

            <?php endforeach; ?>

            <div class="card mt-5">
                <div class="card-body">
                    <div>
                        <a href="" data-toggle="modal" data-target="#exampleModalCenter" class="mr-3">Commenter</a>

                        <a href="portfolio.php?id=<?= get_session('user_id') ?>">Retour vers moi</a>
                    </div>

                </div>
            </div>

            <form action="portfolioComment.php?id=<?= get_session('user_id') ?>" method = "post">

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
                                <a href="portfolioComment.php?id=<?= get_session('user_id') ?>" class="btn btn-primary">Quitter</a>
                                <button type="submit" name="commenter" class="btn btn-primary">Commenter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>