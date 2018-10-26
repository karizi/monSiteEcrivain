<?php
session_start();

include('filters/guest_filter.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');


//SI LE FORMULAIRE A ETE REMPLIS
    if(isset($_POST['register'])) {
        //SI TOUS LES CHAMPS ONT ETE REMPLIS
        if (not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])) {

            $errors = [];

            extract($_POST);

            if (mb_strlen($name) < 3) {
                $errors[] = "Votre nom est trop court! (Minimum 3 caractaires)";
            }

            if (mb_strlen($pseudo) < 3) {
                $errors[] = "Pseudo trop court! (Minimum 3 caractaires)";
            }

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
            if (is_already_in_use('pseudo', $pseudo, 'users')) {
                $errors[] = "Psudo déja utilisé!";
            }
            if (is_already_in_use('email', $email, 'users')) {
                $errors[] = "Adresse E-mail déja utilisé!";
            }

            if (count($errors) == 0) {
                $q = $db->prepare('INSERT INTO users(name, pseudo, email, password, confirmed_at, idType) VALUES(:name, :pseudo, :email, :password, NOW(), 2)');
                $q->execute([
                    'name' => $name,
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'password' => sha1($password)
                ]);
                redirect('login.php');
                set_flash("vous êtes maintenant inscrit !", 'success');
            } else {
                set_flash("Erreur d'inscription", 'danger');
            }
        }
    }
?>

<?php require('views/register.view.php') ?>