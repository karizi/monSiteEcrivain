<?php
//SANITIZER
if(!function_exists('e')){
    function e($string){
        if($string){
            return htmlspecialchars($string);
        }
    }
}

//CHECK SI TOUS LES CHAMPS EXISTENT ET NE SONT PAS VIDES
if(!function_exists('not_empty')){
    function not_empty($fields = []){
        if(count($fields) != 0){
            foreach($fields as $field){
                if(empty($_POST[$field]) || trim($_POST[$field]) == false){
                    return false;
                }
            }
            return true;
        }
    }
}

//GET A SESSION VALUE BY KEY
if(!function_exists('get_session')){
    function get_session($key){
        if($key){
            return !empty($_SESSION[$key])
                ? e($_SESSION[$key])
                : null;
    }
    }
}

//CHECK IF AN USER IS CONNECTED
if(!function_exists('is_logged_in')){
    function is_logged_in(){
        return isset($_SESSION['user.id']) || isset($_SESSION['pseudo']);
    }
}

if(!function_exists('is_already_in_use')){
    function is_already_in_use($field, $value, $table){
        global $db;

        $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
        $q->execute([$value]);
        $count = $q->rowCount();
        $q->closeCursor();
        return $count;
    }
}

if(!function_exists('set_flash')){
    function set_flash($message, $type = 'info'){
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;
    }
}

if(!function_exists('redirect')){
    function redirect($page){
        header('Location: ' . $page);
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

//FUNCTION QUI RECCUPERE TOUT LES USERS
//function getUsers(){
//    global $db;
//    $q = $db->prepare("SELECT id, name, pseudo, email FROM users ORDER BY id ASC");
//    $q->execute();
//    $data = $q->fetchAll(PDO::FETCH_OBJ);
//    return $data;
//    $req->closeCursor();
//}

//FUNCTION QUI RECCUPERE TOUT LES ARTICLES
function getBlogs(){
    global $db;
    $q = $db->prepare("SELECT idBlog, title, content, date FROM articles ORDER BY date DESC");
    $q->execute();
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

//FUNCTION QUI RECCUPERE UN ARTICLE

function getBlog($idBlog){
    global $db;
    $q = $db->prepare('SELECT * FROM articles WHERE idBlog = ?');
    $q->execute(array($idBlog));
    if($q->rowCount() == 1){
        $data = $q->fetch(PDO::FETCH_OBJ);
        return $data;

    }else{
        header("location: pageBlog.php?id=<?= get_session('user_id')");
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





