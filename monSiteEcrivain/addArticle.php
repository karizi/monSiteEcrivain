<?php

session_start();

//include('filters/guest_filter.php');
require('partials/_errors.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');



//SI TOUS LES CHAMPS ONT ETE REMPLIS

if(isset($_POST['register'])) {

    extract($_POST);

    if (!empty($_POST['title']) && !empty($_POST['textcomment'])) {

        $errors = [];
        extract($_POST);

        if (mb_strlen($title) < 3) {
            $errors[] = "Votre titre est trop court! (Minimum 3 caractaires)";
        }
        if (mb_strlen($textcomment) < 3) {
            $errors[] = "Votre article est trop court! (Minimum 20 caractaires)";
        }

        if (count($errors) == 0) {

            $q = $db->prepare("INSERT INTO articles(title, content, date, id) VALUES(:title, :content, NOW(), :id)");
            $q->execute([
                'title' => $title,
                'content' => $textcomment,
                'id' => $_SESSION['user_id']
            ]);
            set_flash("votre article a bien été publier !", 'success');
            header('location: addArticle.php');
        } else {
            set_flash("Erreur de publication", 'danger');
        }

    }
}
require('views/addArticle.view.php');