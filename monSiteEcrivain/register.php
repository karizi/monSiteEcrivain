<?php
session_start();

include('filters/guest_filter.php');
require('config/database.php');
require('includes/functions.php');

//SI LE FORMULAIRE A ETE SOUMIS
if(isset($_POST['register'])) {

    //SI TOUS LES CHAMPS ONT ETE REMPLIS
    if (not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])) {

        //TABLEAU CONTENANT L'ENSEMBLE DES ERREURS
        $errors = [];
        //permet l'accées aux variables
        extract($_POST);

        //MB_STRLEN PERMET DE RETOURNER LE NOMBRE DE CARACTAIRES
        if (mb_strlen($name) < 3) {
            $errors[] = "Votre nom est trop court! (Minimum 3 caractaires)";
        }
        if (mb_strlen($pseudo) < 3) {
            $errors[] = "Pseudo trop court! (Minimum 3 caractaires)";
        }

        //FILTER_VALIDE PERMET DE VERIFIER SI L'ADRESSE EMAIL EST VALIDE
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Adresse émail invalide!";
        }
                if (mb_strlen($password) < 6) {
            $errors[] = "Mot de passe trop court! (Minimum 6 caractaires)";
        } else {
            if ($password != $password_confirm) {
                $errors[] = "Les deux mots de passe ne concordent pas!";
            }
        }

        //is_already_in_use()VERIFIER SI LE PSEUDO EST DEJA UTILISER
        //PSEUDO: POUR VOIR S'IL EST DEJA UTILISER
        // LE TABLEAU QUI PORTE LE NOM USERS
        //$PSEUDO: POUR DONNER LA VALEUR
        // LE PRINCIPE C'EST DE VERIFI2 DANS LA TABLE 'USERS'
        // SI LE PSEUDO (PSEUDO) EXISTE DEJA ($PSEUDO) DANS LA TABLE 'USERS'
        if (is_already_in_use('pseudo', $pseudo, 'users')) {
            $errors[] = "Psudo déja utilisé!";
        }

        if (is_already_in_use('email', $email, 'users')) {
            $errors[] = "Adresse E-mail déja utilisé!";
        }

        //SI LE NOMBRE DES ERREURS = 0
        if (count($errors) == 0) {

            //ENREGISTREMENT DE L'UTILISATEURS
            $q = $db->prepare('INSERT INTO users(name, pseudo, email, password, confirmed_at, idType) 
            VALUES(:name, :pseudo, :email, :password, NOW(), 2)');
            $q->execute([
                'name' => $name,
                'pseudo' => $pseudo,
                'email' => $email,
                'password' => sha1($password)
            ]);
        set_flash("vous êtes maintenant inscrit !", 'success');
        redirect('login.php');
            
        } else {
            set_flash("Erreur d'inscription", 'danger');
        }
    }
}
?>
<?php require('views/register.view.php') ?>