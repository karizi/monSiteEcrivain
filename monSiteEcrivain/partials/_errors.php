<?php

//CE CODE S'EXECUTE JUSTE SI ON VALIDE L'INSCRIPTION PARCE QUE 'ERRORS[]' EXISTE DANS LE FORMULAIRE
//SI LA VARIABLE  '$ERRORS' EXISTE ET LE NOMBRE DES EUREURS != 0
if(isset($errors) && count($errors) != 0){
    echo '<div class="alert alert-danger" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden=true>&times;</button>';
//    POUR CHAQUE ERREURS QU'IL VA TROUVER DANS LE TABLEAU ERRORS
//    AFFICHE UNE ERREUR AVEC UN RETOURN A LA LIGNE
    foreach ($errors as $error){
        echo $error.'<br/>';
    }
    echo '</div>';
}
?>

