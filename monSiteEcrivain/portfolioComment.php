<?php


session_start();

include('filters/auth_filter.php');



require('config/database.php');

require('includes/functions.php');



if(isset($_POST['commenter'])) {
    extract($_POST);

    if (!empty($_POST['comment'])) {
        $errors = [];
        extract($_POST);
    }

    if (count($errors) == 0) {

        $q = $db->prepare('INSERT INTO comments(idComment, comment, date, idTypeComment) VALUES(DEFAULT, :comment, NOW(), 1)');
        $q->execute([
            'comment' => $comment
        ]);

        set_flash("Votre commentaire a bien été enregistrer !", 'success');

        $last_id_comment = $db->lastInsertId(); //l'id du dernier comment qui est inséré dans la table comments

        $user_id  = $_SESSION['user_id'];

        $q = $db->prepare('INSERT INTO commenter(idBlog, idComment, id, idBook) VALUES(0, :lastid, :userid, 0 )');
        $q->execute([
            'lastid' => $last_id_comment,
            'userid' => $user_id
        ]);


        set_flash("Votre commentaire a bien été enregistrer !", 'success');

        $comments = getCommentsPortf1();
        header("Location: portfolioComment.php?id=<?= get_session('user_id')");
    } else {
        set_flash("Erreur d'enregistrement", 'danger');
    }

}
require 'views/portfolioComment.view.php';