<?php
session_start();

include('filters/guest_filter.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');

//SI LE FORMULAIRE A ETE SOUMIS
if(isset($_POST['login'])){

    //SI TOUS LES CHAMPS ONT ETE REMPLIS
    if( not_empty(['identifiant' , 'password'])) {
        extract($_POST);

        $q = $db->prepare("SELECT id, pseudo, idType FROM users
                           WHERE (pseudo = :identifiant OR email = :identifiant)
                           AND password = :password");

        $q->execute([
            'identifiant' => $identifiant,
            'password' => sha1($password)
        ]);

        $userHasBeenFound = $q->rowCount();

        if($userHasBeenFound){

            $user = $q->fetch(PDO::FETCH_OBJ);

            $_SESSION['user_id'] = $user->id;
            $_SESSION['pseudo'] = $user->pseudo;
            $_SESSION['idType'] = $user->idType;

            redirect('portfolio.php?id='.$user->id);
        }else{
            set_flash('Combinaison Identifiant/Password incorrect!', 'danger');
        }
    }

}else{

}

?>

<?php require('views/login.view.php'); ?>