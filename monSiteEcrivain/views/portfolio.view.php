<?php
    $title = "Mon parcours";
    include ('partials/_header.php');
?>



    <div class="row slider1 d-flex justify-content-center item align-items-center">
        <div class=" col-12 text-center" >
            <h1 class="entete">Connaître Hicham BOUSSELHAM</h1>
            <hr>
        </div>
    </div>

    <div class="row">

        <div class="col-2"></div>
        <div class="col-8 jumbotron">

            <p class="lead">Je m’appel Hicham BOUSSELHAM, je suis née le 15 juillet 1979 . Originaire de Casablanca - Maroc, j’ai fait l’ensemble de ma scolarité au Maroc. J’ai alors obtenu mon Baccalauréat série Technique de Gestion Comptable et un diplôme Technicien Comptable en Entreprise.<br/><br/>

                En effet, j’ai été comptable pour une période, ensuite j'ai changer vers un domaine un peux proche: gestion de stock ( Comptabilité analytique ), j'ai eu l'occasion de travailler sur certain logiciels qui sert à exercer la comptabilité ou bien pour gérer de stock, j'ai créer aussi des tableaux sur Excel pour certain travaux... Ces tâches m'ont initié au monde de l'informatique.<br/><br/>

                Dans tout différents emploie que j'ai pu occupé depuis j'ai toujours utilisé un ordinateur et je m'intéressais énormément aux outils informatiques qu'on utilisait.<br/><br/>

                Passionné par les nouvelles technologies et tout ce qui touche au Web. Dans mes emplois antérieurs, j'ai développé des compétences interpersonnelles avec des professionnels, j'ai fais des missions telles que les analyses des comptes de dépenses et recette d'entreprise, enregistrement et l'analyse et la gestion des stock..., et j'ai résolu leurs problèmes avec des solution adaptées.<br/><br/>

                Je suis actuellement en formation Développeur Logiciel chez NextFormation en admission sur titre et puisque mon projet professionnel n’étant pas encore déterminé, j’ai effectué un stage de fin de formation chez MAKEFLO.<br/><br/>

                Sur le plan des centres d’intérêts, je n’ai pas une passion en particulier. Cependant, j’aime découvrir et expérimenter des activités diverses. J’exerce différents genre de sports. En effet, j’ai pratiqué de full-contact pendant cinq ans, puis musculation et fitness jusqu'à maintenant . En revanche, l’une des activités qui fut pour moi primordiale était le football, à laquelle je me suis adonnée depuis mon enfance. Le sport a toujours été, pour moi, un moyen de détente essentiel. Aujourd’hui stagiaire, il m’est difficile de m’investir de la même façon dans l’une de ces activités cependant, je ne peux cesser de pratiquer une activité sportive. Aussi intéresser par la lecture, poursuivre les news.<br/><br/>

                Enfin, j’ai eu la chance de voyager dans divers pays. Cela apporte une certaine ouverture d’esprit notamment par la découverte de nouvelles cultures. j’ai beaucoup apprécié la découverte de différents culture surtout orientale très différente de la notre et, je souhaiterais reprendre mes voyages afin d’affiner mes connaissances.

            </p>
            <div class="mt-5 mb-5">
                <h6><a href="portfolioComment.php?id=<?= get_session('user_id') ?>&title=<?= $title ?>">Commenter ou voir les commentaires</a></h6>
            </div>
        </div>
    </div>
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->



<!-------------------------------PARTIE COMMENTAIRE--------------------------------------------->

<?php include('partials/_errors.php')?>


<div class="row">
    <div class="col-3"></div>
    <h2 class="col-6 mb-3 display-4" ><strong>Commentaires :</strong></h2>
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





<form action="portfolio.php?id=<?= get_session('user_id') ?>" method = "post">

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






<?php include ('partials/_link.php');?>
<?php include ('partials/_footer.php');?>

