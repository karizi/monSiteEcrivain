<?php

session_start();

//include('filters/guest_filter.php');
require('partials/_errors.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');



//REMPLIR LE FORMULAIRE DES ARTICLES

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
        } else {
            set_flash("Erreur de publication", 'danger');
        }

    }
}

//FUNCTION QUI RECCUPERE TOUT LES USERS
function getUsers(){
    global $db;
    $q = $db->prepare("SELECT id, name, pseudo, email FROM users ORDER BY id ASC");
    $q->execute();
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

//SUPPRIMER DES COMMENTAIRES
if(isset($_GET['idComment'])) {
    $idComment = htmlspecialchars($_GET['idComment']);
    $q = $db->prepare("DELETE FROM comments WHERE idComment = :idComment");
    $q->execute(["idComment"=>$idComment]);
    set_flash("Le commentaire est supprimé avec succès", 'success');
    header('Location: pageAdmin.php');

}


//FUNCTION QUI TELECHARGE LE LIVRE ET LE MIS DANS LE DOSSIER DE PROJET
if(!empty($_FILES)){
    $user_id  = $_SESSION['user_id'];
    $file_name = $_FILES['book']['name'];
    $file_extention = strrchr($file_name, ".");
    $file_tmp_name = $_FILES['book']['tmp_name'];
    $file_dest = 'assets/booksProjet/'.$file_name;

    $extention_autorisees = array('.pdf', '.PDF');

    if(in_array($file_extention, $extention_autorisees)){
        if(move_uploaded_file($file_tmp_name, $file_dest)){
            $req = $db->prepare("INSERT INTO books(nameBook, bookUrl, id) VALUE (?, ?,$user_id)");

            $req->execute(array($file_name, $file_dest));

            echo "Fichier envoyé avec succès";

            header("Location: pageAdmin.php");
        }else {
            echo "Une erreur est survenue lors de l'envoie du fichier";
        }
    }else{
            echo "Seuls les fichiers PDF sont autorisés";
    }
}



?>
<?php //require('views/addArticle.view.php'); ?>
<?php require('views/pageAdmin.view.php'); ?>




