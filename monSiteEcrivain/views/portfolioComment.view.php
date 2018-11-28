<?php
    $title = "Page de profil";
    include ('filters/auth_filter.php');
    include ('partials/_header.php');
include('partials/_flash.php');
?>


    <div class="row">
        <div class="col-3"></div>


            <div  class="mt-4 col-6">
                <a href="" data-toggle="modal" data-target="#exampleModalCenter" class="mr-3">Commenter</a>

                <a href="portfolio.php?id=<?= get_session('user_id') ?>">Retourner </a>
            </div>
    </div>


            <!-------------------------------PARTIE COMMENTAIRE--------------------------------------------->

            <?php include('partials/_errors.php')?>


            <div class="row">
                <div class="col-3"></div>
                <h2 class="col-6 mb-3" id="commentaires">Commentaires :</h2>
            </div>

<?php $listComments = getCommentsPortf1(); ?>
<?php foreach($listComments as $com):
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





            <form action="portfolioComment.php?id=<?= get_session('user_id') ?>" method = "post">

<!--+++++++++++++++++++++++++++++++++++++++++++++++++ Modal +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
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

<?php include ('partials/_footer.php');?>