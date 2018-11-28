<?php
session_start();
include('filters/guest_filter.php');// SEUL L'UTILISATEUR QUI N4EST PAS CONNECTER POURA VOIR CETTE PAGE

require('config/database.php');
require('includes/functions.php');




//SI LE FORMULAIRE A ETE SOUMIS
if(isset($_POST['login'])){

    //SI TOUS LES CHAMPS ONT ETE REMPLIS
    if( !empty(['identifiant' , 'password'])) {
        extract($_POST);

        $q = $db->prepare("SELECT id, pseudo, idType FROM users
                           WHERE (pseudo = :identifiant OR email = :identifiant)
                           AND password = :password");

        $q->execute([
            'identifiant' => $identifiant,
            'password' => sha1($password)
        ]);
//EST CE QUE UN UTILISATEUR A ETE TROUVER - ROWCOUNT POUR COMPTER LE NOMBRE DES RESULTATS
        $userHasBeenFound = $q->rowCount();

        if($userHasBeenFound){

            $user = $q->fetch(PDO::FETCH_OBJ);

            $_SESSION['user_id'] = $user->id;
            $_SESSION['pseudo'] = $user->pseudo;
            $_SESSION['idType'] = $user->idType;

            redirect('portfolio.php?id='.$user->id);
        }else{
            set_flash('Votre Identifiant ou Password est incorrect!', 'danger');
        }
    }

}else{

}


require('views/login.view.php');
?>

