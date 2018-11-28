<?php

    $title = "Page de livres";

    include ('partials/_header.php');

?>


    <div class=" row slider1 justify-content-center item align-items-center">
        <h1 class="entete">Bienvenue à ma liste des livres</h1>
    </div>


    <div class="row item align-items mb-5 mt-5">
        <div class="col-2"></div>
        <div class="card-deck col-8">


<?php

    $i = 0;
    $l =1;
    $books = getBooks();
    $nbBooks = count($books);
    foreach($books as $book):
$i+=1;
    $l+= 1;
    $nameBook = explode('.' , $book->nameBook)[0];
?>

<div class="bloc_content col-xs-6 col-lg-3>
            <div class="card bg-light" >
                <img class="card-img-top" src="./assets/images/download.jpg" alt="Card image cap">
            <div class="lien_bloc-content">
                <div class="card-body">
                    <h4 class="card-title"><?= $nameBook ?></h4>
                    <p class="card-text"><a  href="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $book->idBook ?>">
                            Commenter ou voir <br>les commentaires</a></p>
                </div>

                <div class="card-body">
                    <a href="<?=$book->bookUrl?>" class="card-link" target="_blank">Lire le livre<br></a>
                    <small class=" ml-5 ">Gratuit</small>
                </div>
            </div>
        </div>
            <?php if($i % 4 == 0) { $l =1; ?>
        </div>

        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="card-deck mt-5  col-8">
<?php
    }
    endforeach;
echo $l;
if(($nbBooks % 4) != 0){
    for($s = 0; $s <= ( 4- $l); $s++){
        ?>
        <div class="card"></div>
        <?php
    }
}
?></div>

        <div class="col-2"></div>

    </div>


<?php include ('partials/_link.php');?>
<?php include ('partials/_footer.php');?>






