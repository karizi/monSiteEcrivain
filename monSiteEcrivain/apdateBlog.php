<?php

session_start();

include('filters/auth_filter.php');

require('config/database.php');

require('includes/functions.php');



//FUNCTION QUI RECCUPERE UN ARTICLE
if (!isset($_GET['idBlog'])){
    header("Location: pageAdmin.php");
}else if (isset($_POST['modifier'])){

    $q = "UPDATE `articles` SET `title`='".addslashes($_POST['title'])."',
         `content`='".addslashes($_POST['content'])."'
          WHERE `idBlog`='".$_GET['idBlog']."'";

    $db->exec($q);
    set_flash("votre article est bien  modifié !", 'success');
    header("Location: apdateBlog.php");
} else {
    set_flash("Erreur de modification", 'danger');
}








require('views/apdateBlog.view.php');