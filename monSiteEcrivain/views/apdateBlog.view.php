<?php

include ('partials/_header.php');

include('filters/auth_filter.php');

?>
<!-------------------------------PARTIE AFFICHAGE D'ARTICLE--------------------------------------------->

<?php $article = getBlog($_GET['idBlog']); ?>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-7 commentaire">

            <form action="apdateBlog.php?idBlog=<?= $article->idBlog ?>" method="post" class="m-3" >

                <textarea type="text" rows="2" cols="80" name="title"  placeholder="Titre à saisir" required="required" >
                    <?= $article->title ?></textarea>

                <textarea class="mt-3" type="text" rows="15" cols="80" name="content"  placeholder="Texte à saisir" required="required" >
                    <?= $article->content; ?></textarea>

                <div class="form-group row">
                    <div class="col-sm-10">

                        <button  type="submit" name="modifier" class="btn btn-primary">Valider</button>
                        <a href="pageAdmin.php?id=<?= get_session('user_id') ?>" class="btn btn-primary">Retour à la page admin</a>

                    </div>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

<?php require 'partials/_footer.php' ?>

