<?php

include('partials/_errors.php');

include ('partials/_header.php');
?>

<style type="text/css">
    @media (max-width: 780px){
        .mytitle{font-size: 10px;
        }
    }
    @media (min-width: 480px){
        .mytitle{font-size: 20px;
        }
    }
</style>




    <div class="row justify-content-center">
        <div class="col-2"></div>
        <div class="col-7">

            <!--___________________________________________________________________________________-->
            <!----------------------------FORMULAIRE D'INSERTION DES ARTICLES------------------------>

            <button type="button" class="btn btn-warning btn-lg btn-block col-8 mt-5 mytitle" data-toggle="modal" data-target=".bd-example-modal-lg4">Ajouter un article</button>

            <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="post" class="m-3">
                            <div>
                                <textarea type="text" rows="2" cols="100" name="title"  placeholder="Titre à saisir" required="required" ></textarea>
                            </div>

                            <textarea class="mt-3" type="text" rows="15" cols="100" name="textcomment"  placeholder="Texte à saisir" required="required" ></textarea>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="submit" class="btn mt-3" value="Insérer" name="register"/>
                                </div>
                            </div>
                        </form>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Qitter</button>
                    </div>
                </div>
            </div>

            <!-- ___________________________________________________________________________________-->
            <!-- ------------------------------------MODIFIER UN ARTICLE------------------------------->

            <button type="button" class="btn btn-dark btn-lg btn-block col-8 mt-5 mytitle" data-toggle="modal" data-target=".bd-example-modal-lg6">Modifier un article</button>

            <div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Titre d'article</th>
                                <th scope="col">Date d'article</th>
                                <th scope="col">Modifier</th>
                            </tr>
                            </thead>
                                <tbody>
                                    <form action="">
                                        <?php $articles = getBlogs(); ?>
                                        <?php foreach($articles as $article): ?>
                                        <tr>
                                            <th scope="row"><?= $article->title ?></th>
                                            <td class="lead text-center"><?= $article->date ?></td>
                                            <td>
                                                <?php
                                                $article = $article->idBlog;
                                                ?>
                                                <a href="apdateBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article ?>"  class=" col-8 mt-5">Modifier</a>

                                            </td>
                                        </tr>
                                    </form>
                                </tbody>
                                <?php endforeach; ?>
                        </table>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Qitter</button>
                    </div>
                </div>
            </div>


            <!--_______________________________________________________________________________________-->
            <!--------------------------------------LISTE DES UTILISATEURS------------------------------->


            <button type="button" class="btn btn-primary btn-lg btn-block col-8 mt-5 mytitle" data-toggle="modal" data-target=".bd-example-modal-lg1">Liste des utilisateurs</button>
            <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Nom et prenom</th>
                                    <th scope="col">pseudo</th>
                                    <th scope="col">email</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php $users = getUsers(); ?>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <th scope="row"><?= $user->id ?></th>
                                    <td><?= $user->name ?></td>
                                    <td><?= $user->pseudo ?></td>
                                    <td><?= $user->email ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitter</button>
                    </div>
                </div>
            </div>

            <!-- ___________________________________________________________________________________-->
            <!-- ------------------------------------LISTE DES COMMENTAIRES------------------------------->


            <button type="button" class="btn btn-success btn-lg btn-block col-8 mt-5 mytitle" data-toggle="modal" data-target=".bd-example-modal-lg">Liste des commentaires</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Numéro</th>
                                    <th scope="col">commentaire</th>
                                    <th scope="col">Date de commenter</th>
                                    <th scope="col">Type de commentaire</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="">

                                    <?php $comments = getAllComments(); ?>
                                    <?php foreach($comments as $comment): ?>
                                    <tr>
                                        <th scope="row"><?= $comment->idComment ?></th>
                                        <td><?= $comment->comment ?></td>
                                        <td><?= $comment->date ?></td>
                                        <td><?= $comment->idTypeComment ?>
                                        <td>
                                            <a cless="btn" href="pageAdmin.php?idComment=<?= $comment->idComment ?>">Supprimer</a>
                                        </td>
                                    </tr>

                                </form>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Qitter</button>
                    </div>
                </div>
            </div>


            <!-- ___________________________________________________________________________________-->
            <!-- ------------------------------------TELECHARGER LES LIVRES------------------------------->

            <button type="button" class="btn btn-danger btn-lg btn-block col-8 mt-5 mytitle" data-toggle="modal" data-target=".bd-example-modal-lg2">Télécharger un livre</button>

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div  class="m-5">
                            <h3>Télécharger le livre</h3>

                            <form method="POST" enctype="multipart/form-data">
                                <input class="mt-3" type="file" name="book" /> <br/>
                                <input class="mt-3 mb-3" type="submit" value="Télécharger" />
                            </form>
                        </div mb-5>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Qitter</button>
                    </div>
                </div>
            </div>
            <br /><br /><br /><br />

        </div>
    </div>


<?php include ('partials/_link.php');?>
<?php include ('partials/_footer.php');?>