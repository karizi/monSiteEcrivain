<?php

//SANITIZER
if(!function_exists('e')){
    function e($string){
        if($string){
            return htmlspecialchars($string);
        }
    }
}

//VERIFIER SI TOUS LES CHAMPS EXISTENT ET NE SONT PAS VIDES
if(!function_exists('not_empty')){

    //PARAMETRE/ LE TABLEAU $filds[] EST UN ENSSEMBLE DE CHAMPS A REMPLIR
    function not_empty($fields = []){

        //SI L'UTILISATEURS A DONNE LES CHAMPS QUI DOIT ETRE DIFFERENT DE 0
        if(count($fields) != 0){

            //POUR CHAQUE CHAMPS QUI SE TROUVE DANS $filds[]
            foreach($fields as $field){

                //SI LE CHAMPS EST VIDE OUBIEN SANS ESPACE (' ')
                if(empty($_POST[$field]) || trim($_POST[$field]) == false){

                    //RETOURNER FALSE
                    return false;
                }
            }
            //SINON RETOURNER TRUE
            return true;
        }
    }
}

//OBTENER LA VALEUR DE SZESSION PAR CLE
if(!function_exists('get_session')){
    function get_session($key){
        if($key){
            return !empty($_SESSION[$key])
                ? e($_SESSION[$key])
                : null;
    }
    }
}

//VERIFIER SI LE USER EST CONNECTE
if(!function_exists('is_logged_in')){
    function is_logged_in(){
        return isset($_SESSION['user.id']) || isset($_SESSION['pseudo']);
    }
}

//VERIFIER SI LES INFORMATION DE L'UTILISATEUR SONT DEJA UTILISER
if(!function_exists('is_already_in_use')){
    function is_already_in_use($field, $value, $table){
        global $db;

//      VERIFIE SI LA VALEUR N'EST PAS PRESENTE DANS LA BASE DE DONNEES 'USERS'
//      ? === L4INFORMATION QUE L'UTILISATEUR A DONNEES
        $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
//      EXECUTER LA REQUETTE SQL
        $q->execute([$value]);

//        RETOURNER LE NOMBRE DE RESULTAT EST TROUVE SI L'INFORMATION ENTRER
//        EXISTE DANS LA BASE DE DONNEESET ET LA STOCKER DANS UNE VARIABLE ($COUNT)
        $count = $q->rowCount();

//        FERMER LE CURSEUR
        $q->closeCursor();
        return $count;
    }
}


//  METTRE LES MESSAGE DANS DES SESSION POUR LES UTILISER DANS LES DIFFERENTS PAGE

// SI LA FONCTION 'set_flash N'EST PAS DEFINIE ON CREE UNE FUNCTION QUI PREND EN PARAMETRE LE MESSAGE ET LE TYPE DE MESSAGE
//ET SI LE TYPE EST VIDE IL AFFICHE PAR DEFAUT 'INFOS' + INFOS
// UNE FOIS Q'ON APPELE LA FONCTION AVEC LES DIFFERENT ARGUMENT, ET QUE LA SESSION EST BIEN DEMARER? ON STOCK LES INFORMATION DANS $_session
// AU NIVEAU DE L4ARGUMENT notification MESSAGE + MESSAGE
// AU NIVEAU DE L4ARGUMENT notification TYPE + TYPEE

if(!function_exists('set_flash')){
//PREND EN PARAMETRE LE MESSAGE ET LE TYPE DE MESSAGE + INFOS
    function set_flash($message, $type = 'info'){
// AU NIVEAU DE L4ARGUMENT notification MESSAGE + MESSAGE
        $_SESSION['notification']['message'] = $message;
// AU NIVEAU DE L4ARGUMENT notification TYPE + TYPEE
        $_SESSION['notification']['type'] = $type;
    }
}

if(!function_exists('redirect')){
//  PREND EN PARAMETRE LA PAGE OU ON VEUX DERIGER L'UTILISATEUR
    function redirect($page){
//  FAIRE HEADER LOCATION VERS CETTE PAGE        
        header('Location: ' . $page);
//  FAIRE UN exite() POUR LA FERMER 
        exit();
    }
}

//GERE L'ETAT ACTIVE DE NOS DEFFERENTS LIENS
if(!function_exists('set_active')){
    function set_active($file, $class = 'active'){
        $page = array_pop(explode('/', $_SERVER['SCRIPT_NAME']));

        if($page == $file.'.php'){
            return $class;
        }else {
            return "";
        }
    }
}

//FUNCTION QUI RECCUPERE TOUT LES ARTICLES
function getBlogs(){
    global $db;
    $q = $db->prepare("SELECT idBlog, title, content, date FROM articles ORDER BY date DESC");
    $q->execute();
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $q->closeCursor();
}

//FUNCTION QUI RECCUPERE UN ARTICLE
function getBlog($idBlog){
    global $db;
    $q = $db->prepare('SELECT * FROM articles WHERE idBlog = ?');
    $q->execute(array($idBlog));
// retourne le nombre de lignes affectées par le dernier appel de la function
    if($q->rowCount() == 1){
        $data = $q->fetch(PDO::FETCH_OBJ);
        return $data;

    }else{
        //header("location: pageBlog.php?id=<?= get_session('user_id')");
        $q->closeCursor();
    }
}

//FONCTION QUI RECUPERE LES COMMENTAIRES D'UN ARTICLE
function getCommentsBlog($idBlog){
    global $db;
    $q = $db->prepare('SELECT * FROM comments 
            inner join commenter on comments.idComment = commenter.idComment 
            inner join users on  commenter.id = users.id 
            where commenter.idBlog = :idBlog   
            ORDER BY comments.idComment DESC ');
    $q->execute([
        'idBlog' => $idBlog
    ]);
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $q->closeCursor();
}

//FUNCTION QUI RECCPERE TOUT LES COMMENTAIRES
function getAllComments(){
    global $db;
    $q = $db->prepare(" SELECT idComment, comment, date, idTypeComment FROM comments ORDER BY idComment ASC");
    $q->execute();
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

//FUNCTION QUI RECCUPERE TOUT LES LIVRES
function getBooks(){
    global $db;
    $q = $db->query('SELECt idBook, nameBook, bookUrl FROM books');
    $q->execute();
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $q->closeCursor();
}

//FUNCTION QUI RECCUPERE UN LIVRE
function getBook($idBook){
    global $db;
    $q = $db->prepare('SELECT * FROM books WHERE idBook = ?');
    $q->execute(array($idBook));
    if($q->rowCount() == 1){
        $data = $q->fetch(PDO::FETCH_OBJ);
        return $data;
    }else{
        header('location: pageBook.php');
        $q->closeCursor();
    }
}

//FONCTION QUI RECUPERE LES COMMENTAIRES D'UN LIVRE
function getCommentsBook($idBook){
    global $db;
    $q = $db->prepare('SELECT * FROM comments 
            inner join commenter on comments.idComment = commenter.idComment 
            inner join users on  commenter.id = users.id 
            where commenter.idBook = :idBook   
            ORDER BY comments.idComment DESC ');
    $q->execute([
        'idBook' => $idBook
    ]);
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $q->closeCursor();
}

//FONCTION QUI RECUPERE LES COMMENTAIRES ECRITENT SUR L'AUTEUR
function getCommentsPortf1(){
    global $db;
    $q = $db->prepare('SELECT * FROM comments
            INNER JOIN commenter on comments.idComment = commenter.idComment
            INNER JOIN users on commenter.id = users.id
            WHERE comments.idTypeComment = 1
            ORDER BY comments.idComment DESC ');
    $q->execute();
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $q->closeCursor();
}





