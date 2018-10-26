<?php

session_start();

include('filters/auth_filter.php');

require('config/database.php');

require('includes/functions.php');

require('includes/constants.php');


if (!isset($_GET['idBlog']) || !is_numeric($_GET['idBlog'])){
    header('Location: blog.php');
}else{
    extract($_GET);
    $idBlog = strip_tags($idBlog);
    $article = getBlog($idBlog);
}

//POUR INSERER LES COMMENTAIRE DANS UNE BASE DE DONNEES

if(isset($_POST['commenter'])) {
    extract($_POST);

    if (!empty($_POST['comment'])) {
        $errors = [];
        extract($_POST);
    }

    if (count($errors) == 0) {

        $q = $db->prepare('INSERT INTO comments(idComment, comment, date, idTypeComment) VALUES(DEFAULT, :comment, now(), 2)');
        $q->execute([
            'comment' => $comment
        ]);

        set_flash("Votre commentaire a bien été enregistrer !", 'success');

        $last_id_comment = $db->lastInsertId(); //l'id du dernier commentaire qui est insere dans la table comments

        $user_id  = $_SESSION['user_id'];

        $q = $db->prepare('INSERT INTO commenter(idBlog, idComment, id, idBook) VALUES(:idBlog, :lastid, :userid, 0)');

        $q->execute([
            'idBlog' => $idBlog,
            'lastid' => $last_id_comment,
            'userid' => $user_id
        ]);

        set_flash("Votre commentaire a bien été enregistrer !", 'success');

        $comments = getCommentsBlog($idBlog);
        header("Location: pageBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article->idBlog ?>");
    } else {
        set_flash("Erreur d'enregistrement", 'danger');
    }

}





require('views/pageBlog.view.php');